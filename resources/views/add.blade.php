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
				<td>Tên sản phẩm</td>
				<td><input type="text" name="txtTensanpham"></td>
			</tr>
			<tr>
				<td>Giá</td>
				<td><input type="text" name="txtGia"></td>
			</tr>
			<tr>
				<td>Công dụng</td>
				<td><input type="text" name="txtCongdung"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnThem" value="Thêm"></td>
			</tr>
		</table>
	</form>
</body>
</html>