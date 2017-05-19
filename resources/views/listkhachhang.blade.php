<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List</title>
</head>
<body>
	<table border="1px" width="650px">
		<tr>
			<td>STT</td>
			<td>Tên khách hàng</td>
			<td>Số điện thoại</td>
			<td>Địa chỉ</td>
			<td>Sản phẩm đã mua</td>
			<td colspan="2">Action</td>
		</tr>
		@foreach ($khachhang as $value)
		
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $value['hoten']}}</td>
			<td>{{ $value['sdt']}}</td>
			<td>{{ $value['diachi']}}</td>
			<td>{{ $value['sanpham']}}</td>
			<td><a href="{{ route('xoa',['id'=>$value['id']]) }}">Xóa</a></td>
			<td><a href="{{ route('sua',['id'=>$value['id']]) }}">Sửa</a></td>
			
		</tr>
		@endforeach
	</table>
</body>
</html>
