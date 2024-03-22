<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Send Email All User</h2>
    <form action="{{route('store.emailAll')}}" method="post">
        
        <input type="text" name="greetings" placeholder="greetings">
        <input type="text" name="body" placeholder="body">
        <input type="text" name="actionText" placeholder="ActionText">
        <input type="text" name="actionUrl" placeholder="ActionUrl">
        <input type="text" name="endText" placeholder="EndText">
        <input type="submit" value="send">
    </form>
</body>
</html>