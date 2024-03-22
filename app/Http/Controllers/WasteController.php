<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\waste;

class WasteController extends Controller
{
    public function index(){
        
        return view('waste.wasteForm');
    
        
    }
    public function show(){
        $waste = waste::all();
        return view('waste.show', ['waste'=> $waste]);
    }
    public function store(Request $request){
        //dd($request);
        $value = $request->validate([
            'Account_name' => 'required',
            'waste_type' => 'required',
            'street_name' => 'required',
            'house_number' => 'required',
            'phone_number' => 'required',
       ]);
        $new = waste::create($value);
       //return view('waste.wasteForm');
       return redirect(route('waste.wasteForm'))->with('success', 'Request Successfully!!');

    }
    public function destroy(waste $waste){
        $waste->delete();
        return redirect(route('waste.show'))->with('success', ' Post deleted Successfully!!');
}
}