<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Posts</h1>
    <a href="{{route('posts.create')}}" >create post </a>
    <br><br><br>
    <div>
        
        <div>
            @if(session()->has('success'))
                 {{session('success')}}
            @endif
        </div>
        <br><br>
        {{-- <table border="1">
<tr>
    <th>id</th>
    <th>Name</th>
    <th>Body</th>
    <th>Edit</th>
    <th>delete</th>  
</tr>
@foreach ($posts  as $posts )
<tr>
    <td>{{$posts->id}}</td>
    <td>{{$posts->tittle}}</td>
    <td>{{$posts->body}}</td>
    <td>
        <a href="{{route('posts.edit',['post'=>$posts])}}">Edit</a>
    </td>
    <td>
        <form method="post"action="{{route('posts.destroy', ['post'=> $posts])}}">
            @csrf
            @method('delete')
            <input type="submit" value="delete">
        </form>
    </td>
</tr>

    @endforeach

        </table>
    </div><br> --}}

    
        @foreach ($posts  as $posts )
        <div style="border: 2px solid; margin-left:50px; width:50%">
        <h1 style="margin-left: 20px">{{$posts->tittle}}</h1>
        <p style="margin-left: 20px"><a href="{{route('posts.edit',['post'=>$posts])}}">Edit</a></p>
        <p style="margin-left: 20px">
            <form method="post"action="{{route('posts.destroy', ['post'=> $posts])}}">
                @csrf
                @method('delete')
                <input type="submit" value="delete" style="margin-left: 20px">
            </form>
        </p>
        <p style="margin-left: 20px">{{$posts->body}}</p>
        <p style="margin-left: 20px">{{$posts->created_at}}</p>
    </div>
        @endforeach
    

    
</body>
</html>