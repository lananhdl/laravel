<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
</head>
<body>
	<form action="" method="POST" >
	{{ csrf_field() }}
		<table border="1px" >
			<tr>
				<td>Tên thành viên</td>
				<td><input type="text" name="txthoten" value="{{ $data_edit['hoten']}}"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="txtemail" value="{{ $data_edit['email']}}"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="txtpassword" value="{{ $data_edit['password']}}"></td>
			</tr>
			<tr>
				<td>Vai trò</td>
				<td><input type="text" name="txtvaitro" value="{{ $data_edit['vaitro']}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnsua" value="Sửa"></td>
			</tr>
		</table>
	</form>
</body>
</html>