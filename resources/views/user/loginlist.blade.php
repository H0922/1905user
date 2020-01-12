<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
</head>
<body>
    <h1>登录页面</h1>
    <form action="{{url('user/logininsert')}}" method="post">
        <table border="1">
            <b>请输入您的用户名，手机号，邮箱，进行登录</b>
            @csrf
            <tr>
                <td>用户名</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>密码</td>
                <td><input type="password" name="pwd" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="登录"></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>