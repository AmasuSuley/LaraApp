<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     
  <div>
    @if(session()->has('success'))
         {{session('success')}}
    @endif
</div>
     
     <table border="1"  style="margin-top: 20px; margin-left:30px">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>waste type</th>
            <th>street name</th>
            <th>house number</th>
            <th>phone number</th>
            <th>Date requested</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($waste  as $waste )
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$waste->Account_name}}</td>
            <td>{{$waste->waste_type}}</td>
            <td>{{$waste->street_name}}</td>
            <td>{{$waste->house_number}}</td>
            <td>{{$waste->phone_number}}</td>
            <td>{{$waste->created_at}}</</td>
            <td>
              <form method="post"action="{{route('waste.destroy', ['waste'=> $waste])}}">
                @csrf
                @method('delete')
                <input type="submit" value="delete" style="margin-left: 20px">
            </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
     
    
</body>
</html>