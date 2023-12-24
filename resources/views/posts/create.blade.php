<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>create Posts</h1>
    <div>
        
    
        
    </div>

    <form  method="post" action="{{route('posts.store')}}">
        @csrf
        @method('post')
        
        <input type="text" name="tittle" placeholder="name"><br><br>
        <input type="text" name="body" placeholder="body"><br><br>
        <input type="submit" value="save post">
    </form>
</body>
</html>