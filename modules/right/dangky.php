<?php
	if(isset($_POST['dangky'])){
		$tenthanhvien = $_POST['tenthanhvien'];
		$matkhau = $_POST['matkhau'];
		$email = $_POST['email'];
		$diachi = $_POST['diachi'];
		$dienthoai = $_POST['dienthoai'];

		$sql = "INSERT INTO dangky (tenthanhvien, matkhau, email, diachi, dienthoai) VALUES ('$tenthanhvien', 
		'$matkhau', '$email', '$diachi', '$dienthoai' ) ";
		$result = mysqli_query($conn, $sql);
		if($result){
			header('location:index.php?xem=thongbao&thongtin=dangky');
		} else {
			header('location:index.php?xem=dangky');
		}
	}
?>

<form action="" method="post" enctype="multipart/form-data">
	<table width="auto" border="1px">
		<tr>
			<td colspan="2"><div align="center">Đăng ký thành viên</div></td>
		</tr>
		<tr>
			<td>Tên khách hàng</td>
			<td>
				<input type="text" required name="tenthanhvien">
			</td>
		</tr>
		<tr>
			<td>Mật khẩu</td>
			<td>
				<input type="password" required name="matkhau">
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>
				<input type="text" name="email">
			</td>
		</tr>
		<tr>
			<td>Địa chỉ</td>
			<td>
				<input type="text" name="diachi">
			</td>
		</tr>
		<tr>
			<td>Số điện thoại</td>
			<td>
				<input type="text" required name="dienthoai">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div align="center"><input type="submit" name="dangky" value="Đăng ký"></div>
			</td>
		</tr>
	</table>
</form>