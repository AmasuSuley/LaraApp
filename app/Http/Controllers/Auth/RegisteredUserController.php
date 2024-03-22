<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\posts;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function userShow(){
       // $user = User::all();
       $posts = posts::with('user')->get();
       $users = User::with('post')->get();
        return view('waste.registeredUser', compact('posts','users'));
        //return view('waste.registeredUser', ['user'=> $user]);
    }
    public function emailView($id){
        $data = User::Find($id);
        return view('waste.emailView', compact('data'));
    }

    public function storeEmail(Request $request, $id){
        $user = User::Find($id);
       $details = array();
       $details['greetings'] = $request->greetings;
       $details['body'] = $request->body;
       $details['actionText'] = $request->actionText;
       $details['actionUrl'] = $request->actionUrl;
       $details['endText'] = $request->endText;

       Notification::send($user, new sendEmailNotification($details));
       return redirect()->to('/waste/registeredUser');
    }

    
public function emailAll(){
    return view('waste.emailViewAll');
}


    public function storeEmailAll(Request $request){
        $users = User::All();
       $details = array();
       $details['greetings'] = $request->greetings;
       $details['body'] = $request->body;
       $details['actionText'] = $request->actionText;
       $details['actionUrl'] = $request->actionUrl;
       $details['endText'] = $request->endText;
foreach($users as $user){
       Notification::send($user, new sendEmailNotification($details));
}
       return redirect()->to('/waste/registeredUser');
    
}
    
}
