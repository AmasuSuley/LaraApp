<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
</head>
<body>
    <h1 style="margin-left:70px">Your Message</h1>
    <div>
      @if($errors->any())
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
         
        @endforeach
      </ul>   
      @endif   
    </div>

    <form  method="post" action="{{route('posts.store')}}">
        @csrf
        @method('post')
        
        {{-- <input type="text" name="tittle" placeholder="name" value="{{ Auth::user()->name }}"><br><br> --}}
        {{-- <select name="tittle" id=""><option value="{{ Auth::user()->name }}">{{ Auth::user()->name }}</option></select><br><br> --}}
        {{-- <select name="user_id" id=""><option value="{{ Auth::user()->id }}">{{ Auth::user()->id }}</option></select><br><br> --}}
        <input type="hidden" name="tittle" value="{{ Auth::user()->name }}">
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <textarea name="body" id="" cols="30" rows="10" style="margin-left:70px"></textarea>
        <input type="submit" value="Send post">

   

    </form>

  



</body>
</html>