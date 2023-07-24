<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h2>Halaman Login</h2>
    <hr>
    <form method="POST" action="/proses" style="margin: 0 auto">
        {{ csrf_field() }}
        Email : <input type="text" name="email"><br>
        Password : <input type="password" name="password"><br>
        <input type="submit" value="login">
    </form>
</body>
</html>