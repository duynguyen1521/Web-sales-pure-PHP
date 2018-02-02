<?php
	if(isset($_POST['doimatkhau'])){
		$tentaikhoan = $_POST['tentaikhoan'];
		$matkhaucu = $_POST['matkhaucu'];
		$matkhaumoi = $_POST['matkhaumoi'];

		$sql = "SELECT * FROM admin WHERE username = '$tentaikhoan' AND password = '$matkhaucu' LIMIT 1 ";
		$result = mysqli_query($conn, $sql);
		$row = $result->num_rows;
		if($row == 0){
			echo 'Sai tên tài khoản hoặc mật khẩu. Vui lòng nhập lại!';
		} else{
			$id_admin = mysqli_fetch_array($result);
			$id_admin = $id_admin['id_admin'];
			mysqli_query($conn, "UPDATE admin SET password = '$matkhaumoi' WHERE id_admin = '$id_admin' ");
			echo "Đổi mật khẩu thành công!";
		}
	}
?>

<form action="" method="post">
	<table width="auto" border="1px">
		<tr>
			<td colspan="2">Đổi mật khẩu</td>
		</tr>
		<tr>
			<td>Tên tài khoản</td>
			<td><input type="text" required name="tentaikhoan"></td>
		</tr>
		<tr>
			<td>Mật khẩu cũ</td>
			<td><input type="password" required name="matkhaucu"></td>
		</tr>
		<tr>
			<td>Mật khẩu mới</td>
			<td><input type="password" required name="matkhaumoi"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="doimatkhau" value="Đổi mật khẩu"></td>
		</tr>
	</table>
</form>