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
			<td>Tên thành viên</td>
			<td>Email</td>
			<td>Password</td>
			<td>Vai trò</td>
			<td colspan="2">Action</td>
		</tr>
		@foreach ($thanhvien as $value)
		<tr>
			<td>{{ $loop->iteration}}</td>
			<td>{{ $value['hoten']}}</td>
			<td>{{ $value['email']}}</td>
			<td>{{ $value['password']}}</td>
			<td>{{ $value['vaitro']}}</td>
			<td><a href="{{ route('delete-thanh-vien',['id'=>$value['id']])}}">Xóa</a</td>
			<td><a href="{{ route('edit',['id'=>$value['id']])}}">Sửa</a></td>
			
		</tr>
		@endforeach
	</table>
</body>
</html>
