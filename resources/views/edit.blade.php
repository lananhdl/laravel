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
				<td>Tên sản phẩm</td>
				<td><input type="text" name="txtTensanpham" value="{{ $data['tensanpham']}}"{{ old('txtTensanpham', $data['tensanpham']) }}></td>
			</tr>
			<tr>
				<td>Giá</td>
				<td><input type="text" name="txtGia" value="{{ $data['gia']}}" {{ old('txtGia', $data['gia']) }}></td>
			</tr>
			<tr>
				<td>Công dụng</td>
				<td><input type="text" name="txtCongdung" value="{{ $data['congdung']}}" {{ old('txtCongdung', $data['congdung']) }} ></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnSua" value="Sửa"></td>
			</tr>
		</table>
	</form>
</body>
</html>