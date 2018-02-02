<?php
	if(isset($_POST['dangnhap'])){
		$tenthanhvien = $_POST['tenthanhvien'];
		$matkhau = $_POST['matkhau'];
		$sql = "SELECT * FROM dangky WHERE tenthanhvien = '$tenthanhvien' AND matkhau = '$matkhau' ";
		$result = mysqli_query($conn, $sql);
		$num = $result->num_rows;
		if($num > 0){
			$_SESSION['thanhvien'] = $tenthanhvien;
			header('location:index.php?xem=giohang');
		} else {
			echo "Đăng nhập thất bại!";
		}
	}
?>

<form action="" method="post" enctype="multipart/form-data">
	<table width="auto" border="1px">
		<tr>
			<td colspan="2" align="center">Đăng nhập</td>
		</tr>
		<tr>
			<td>Tên thành viên</td>
			<td>
				<input type="text" name="tenthanhvien" required>
			</td>
		</tr>
		<tr>
			<td>Mật khẩu</td>
			<td>
				<input type="password" name="matkhau" required>
			</td>
		</tr>
		<tr>
			<td align="center">
				<input type="submit" name="dangnhap">
			</td>
		</tr>
	</table>
</form>
