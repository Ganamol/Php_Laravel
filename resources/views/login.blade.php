<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(session()->has('message'))
<p>{{session()->get('message')}}</p>
@endif
    <form action="{{route('do.login')}}" method="POST">
   
   @csrf 
username: <input name="email" type="text"><br>
password: <input type="text" name="password"><br>
<input type="submit">
</form>
</body>
</html>