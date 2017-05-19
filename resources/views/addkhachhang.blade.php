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
				<td>Tên khách hàng</td>
				<td><input type="text" name="txthoten"></td>
			</tr>
			<tr>
				<td>Số điện thoại</td>
				<td><input type="text" name="txtsdt"></td>
			</tr>
			<tr>
				<td>Địa chỉ</td>
				<td><input type="text" name="txtdiachi"></td>
			</tr>
			<tr>
				<td>Sản phẩm đã mua</td>
				<td><input type="text" name="txtsanpham"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnThem" value="Thêm"></td>
			</tr>
		</table>
	</form>
</body>
</html>