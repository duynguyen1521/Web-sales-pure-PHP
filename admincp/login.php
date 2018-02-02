<?php
	include('modules/config.php');
	session_start();							//Đây cũng có start session để phòng ng dùng vào thẳng trang này 											 //thay vì vào từ trang index
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
		$result = mysqli_query($conn, $sql);
		$num = $result->num_rows;
		if($num > 0){
			$_SESSION['dangnhap'] = $username;
			echo 'muuhen';
			header('location:index.php');
		} else {
			header('location:login.php');
			echo 'keban';
		}
	}
?>

<form action="login.php" method="post" enctype="multipart/form-data">
	<table width="auto" border="1px">
		<tr>
			<td colspan="2" align="center">Đăng nhập</td>
		</tr>
		<tr>
			<td>Username:</td>
			<td>
				<input type="text" name="username" required placeholder="Nhập username">
			</td>
		</tr>
		<tr>
			<td>Password:</td>
			<td>
				<input type="password" name="password" required placeholder="Nhập password">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div align="center"><input type="submit" name="login" value="Login"></div>
			</td>
		</tr>
	</table>
</form>
