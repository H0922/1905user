<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>获取用户信息</title>
</head>
<body>
    <h1>获取用户信息</h1>
    <form action="{{url('user/userselect')}}" method="post">
        <table border="1">
            <b>请输入您登录的用户名，手机号，邮箱，进行获取用户信息</b>
            @csrf
            <tr>
                <td>用户名</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>用户token</td>
                <td><input type="text" name="pwd" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="获取"></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>