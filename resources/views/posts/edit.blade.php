<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>edit Post</h1>
    <div>
      @if($errors->any())
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
         
        @endforeach
      </ul>   
      @endif   
    </div>

    <form  method="post" action="{{route('posts.update',['post'=>$post])}}">
        @csrf
        @method('put')
        
        <input type="text" name="tittle" placeholder="name" value="{{$post->tittle}}"><br><br>
        <input type="text" name="body" placeholder="body" value="{{$post->body}}"><br><br>
        <input type="submit" value="Update post">
    </form>
</body>
</html>