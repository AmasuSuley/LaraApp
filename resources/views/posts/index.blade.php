<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Posts</h1>
    <a href="{{route('posts.create')}}" >create post now</a>
    <br><br><br>
    <div>
        <table border="1">
<tr>
    <th>id</th>
    <th>Name</th>
    <th>Body</th>  
</tr>
@foreach ($posts  as $posts )
<tr>
    <td>{{$posts->id}}</td>
    <td>{{$posts->tittle}}</td>
    <td>{{$posts->body}}</td>
</tr>
@endforeach
    

        </table>
    </div>
</body>
</html>