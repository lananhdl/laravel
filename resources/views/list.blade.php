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
			<td>Tên sản phẩm</td>
			<td>Giá</td>
			<td>Công dụng</td>
			<td colspan="2">Action</td>
		</tr>
		@foreach ($sanpham as $value)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $value['tensanpham'] }}</td>
			<td>{{ $value['gia'] }}</td>
			<td>{{ $value['congdung'] }}</td>
			<td><a href="{{ route('destroy',['id'=>$value['id']]) }}">Xóa</a</td>
			<td><a href="{{ route('edit',['id'=>$value['id']]) }}">Sửa</a></td>
			
		</tr>
		@endforeach
	</table>
</body>
</html>
