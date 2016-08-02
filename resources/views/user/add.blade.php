<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户添加</title>
</head>
<body>
	<!--<form action="{{url('test/insert')}}" method="post" enctype="multipart/form-data">-->
	<form action="{{url('/test/upload')}}" method="post" enctype="multipart/form-data">
		用户名 <input type="text" name="username"><br><br>
		密码 <input type="password" name="password"><br><br>
		邮箱 <input type="email" name="email"><br><br>
		头像 <input type="file" name="pic"><br><br>
		{{csrf_field()}}
		<input type="submit" value="提交">
	</form>
</body>
</html>