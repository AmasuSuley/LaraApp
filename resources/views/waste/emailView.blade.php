<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Send Email</h2>
    <form action="{{route('store.email', $data->id)}}" method="post">
        @csrf
        <input type="text" name="greetings" placeholder="greetings"  value="User,">
        <input type="text" name="body" placeholder="body">
        <input type="text" name="actionText" placeholder="ActionText">
        <input type="text" name="actionUrl" placeholder="ActionUrl">
        <input type="text" name="endText" placeholder="EndText">            
        <input type="submit" value="send">
    </form>
</body>
</html>