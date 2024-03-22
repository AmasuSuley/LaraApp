<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Request From</h1>
    <div>
      @if($errors->any())
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
         
        @endforeach
      </ul>  
      <div>
        @if(session()->has('success'))
             {{session('success')}}
        @endif
    </div> 
      @endif   
      
    </div>
    <form  method="post" action="{{route('waste.store')}}">
        @csrf
        @method('post')
  
        <input type="hidden" name="Account_name" value="{{ Auth::user()->name }}"><br><br>
        <input type="text" name="waste_type" placeholder="waste type"><br><br>
        <input type="text" name="street_name" placeholder="street name"><br><br>
        <input type="text" name="house_number" placeholder="house number"><br><br>
        <input type="text" name="phone_number" placeholder="phone number"><br><br><br>
        <input type="submit" value="submit">
    </form>

    
</body>
</html>