<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>
</head>
<body>
    <h1>注册页面</h1>
    <form action="{{url('user/reginsert')}}" method="post">
        <table border="1">
            @csrf
            <tr>
                <td>用户名</td>
                <td><input type="text" name="pass_name" id=""></td>
            </tr>
            <tr>
                <td>邮箱</td>
                <td><input type="email" name="pass_email" id=""></td>
            </tr>
            <tr>
                <td>手机号</td>
                <td><input type="tel" name="pass_tel" id=""></td>
            </tr>
            <tr>
                <td>密码</td>
                <td><input type="password" name="pass_pwd" id=""></td>
            </tr>
            <tr>
                <td>确认密码</td>
                <td><input type="password" name="pwds" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="注册"></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>