<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    product 
    <form action="{{route('waste.put')}}" method="post">
        @csrf
        <input type="text" name="product_name" placeholder="insert product">
        <input type="submit" value="submit">
    </form>
</body>
</html>