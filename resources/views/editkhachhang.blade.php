<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>edit</title>
</head>
<body>
	<form action="" method="POST" >
	 {{ csrf_field() }}
		
		<table border="1px" >
			<tr>
				<td>Tên khách hàng</td>
				<td><input type="text" name="txthoten" value="{{ $khachhang['hoten'] }}" {{ old ('txthoten' )}}></td>
			</tr>
			<tr>
				<td>Số điện thoại</td>
				<td><input type="text" name="txtsdt" value="{{ $khachhang['sdt'] }}" {{ old ('txtsdt')}}></td>
			</tr>
			<tr>
				<td>Địa chỉ</td>
				<td><input type="text" name="txtdiachi" value="{{ $khachhang['diachi'] }}" {{ old ('txtdiachi')}}></td>
			</tr>
			<tr>
				<td>Sản phẩm đã mua</td>
				<td><input type="text" name="txtsanpham" value="{{ $khachhang['sanpham'] }}" {{ old ('txtsanpham')}}></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnsua" value="Sửa"></td>
			</tr>
		</table>
	
	</form>
</body>
</html>