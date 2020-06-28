<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>欢迎注册</title>
</head>
<body>
<form action="/user/reg" method="post">
{{csrf_field()}}
<table border="2">
    <tr>
        <td>用户名</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td> <input type="email" name="email"></td>
    </tr>
    <tr>
        <td>密码</td>
        <td><input type="password" name="pass1"></td>
    </tr>
    <tr>
        <td>确认密码</td>
        <td><input type="password" name="pass2"></td>
    <tr>
        <td></td>
        <td><input type="submit" value="注册"></td>
    </tr>
</table>
</form>
</body>
</html>