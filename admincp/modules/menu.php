<?php
	if(isset($_GET['ac'])){
		$temp = $_GET['ac'];
		if($temp == 'logout'){
			unset($_SESSION['dangnhap']);
			header('location:login.php');
		}
	}
?>

<div class="menu">
	<ul>
		<li><a href="index.php">Trang chủ</a></li>
		<li><a href="index.php?quanly=quanlyloaisp&ac=them">Quản lý loại sản phẩm</a></li>
		<li><a href="index.php?quanly=quanlychitietsp&ac=them">Quản lý chi tiết sản phẩm</a></li>
		<?php
			if(isset($_SESSION['dangnhap'])){
		?>	
			<li><a href="index.php?quanly=doimatkhau">Đổi mật khẩu</a></li>
			<li><a href="index.php?ac=logout">Đăng xuất</a></li>
		<?php
			}
		?>
		
	</ul>
</div>