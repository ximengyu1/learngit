<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>添加用户</h2>
    <form action="doaction.php?act=adduser" method='post'>
    <table cellpadding='0' cellspacing='0' bgcolor='#abcdef' border='1' width='80%'>
<tr>
  <td>用户名</td>
  <td><input type="text" name="username" placeholder='请输入合法用户名' require='required'></td>
</tr>
<tr>
  <td>密码</td>
  <td><input type="password" name="password" placeholder='请输入合法密码' require='required'></td>
</tr>
<tr>
<td colspan='2'><input type="submit" value="添加用户"></td>
</tr>
</table>
</form>
</body>
</html>