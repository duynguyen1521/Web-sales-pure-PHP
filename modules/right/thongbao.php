<?php
	if(isset($_GET['thongtin']) && !empty($_GET['thongtin'])){
		$thongtin = $_GET['thongtin'];
		if($thongtin == 'dangky'){
			$thongtin = 'Đăng ký';
		}else if($thongtin == 'muahang'){
			$thongtin = 'Thanh toán';
		}
	}
?>

<h1 align="center" style="text-transform: uppercase; color: green;"><?php echo $thongtin ?> thành công!</h1>
<?php
	if($thongtin == 'Đăng ký'){
?>
	<div align="center"><a href="index.php?xem=dangnhap">Chuyển tới trang đăng nhập</a></div>
<?php
	}else if($thongtin == 'Thanh toán'){
		foreach ($_SESSION as $name => $value) {
			if(substr($name, 0, 5) == 'cart_'){
				unset($_SESSION["$name"]);
			}
		}
				
?>
	<div align="center"><a href="index.php">Tiếp tục mua hàng</a></div>
<?php
	}
?>