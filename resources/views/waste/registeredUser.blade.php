<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Registered User</h2>
    <a href="{{route('store.emailAllView')}}">Send Email for All</a>

    <table border="1"  style="margin-top: 20px; margin-left:30px">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Posts</th>
            <th>Action</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($posts  as $post )
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->user->email}}</td>
            <td>{{$post->body}}</td>
            <td><a href="{{route('waste.emailView',$post->user->id )}}">Send Email</a></td>
            
            
           
          </tr>
          @endforeach
        </tbody>
      </table>
     
      {{-- @foreach ($user  as $user )
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        
       
      </tr>
      @endforeach --}}
    
</body>
</html>