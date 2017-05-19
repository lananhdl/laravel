<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add</title>
</head>
<body>
	<form action="" method="POST" >
	 {{ csrf_field() }}
		<table border="1px" >
			<tr>
				<td>Tên thành viên</td>
				<td><input type="text" name="txthoten"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="txtemail"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="txtpassword"></td>
			</tr>
			<tr>
				<td>Vai trò</td>
				<td><input type="text" name="txtvaitro"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnThem" value="Thêm"></td>
			</tr>
		</table>
	</form>
</body>
</html>