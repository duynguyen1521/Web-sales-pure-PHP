<div class="content">
	<div class="left">
		<?php
			include("left/danhsach.php");
		?>
	</div>
	<div class="right">
		<?php
			if(isset($_GET['xem'])){
				$temp = $_GET['xem'];
			} else {
				$temp = "";
			}

			if($temp == "chitietloaisanpham"){
				include('right/chitietloaisanpham.php');
			} elseif ($temp == "chitietsanpham") {
				include('right/chitietsanpham.php');
			} elseif ($temp == "giohang") {
				include('right/cart.php');
			} elseif ($temp == "dangky") {
				include('right/dangky.php');
			} elseif ($temp == "dangnhap") {
				include('right/dangnhap.php');
			} elseif ($temp == "dangxuat") {
				include('right/dangxuat.php');
			} elseif ($temp == "thongbao") {
				include('right/thongbao.php');
			} elseif (isset($_POST['search'])) {
				include('right/search.php');
			} else {
				include('right/tatcasanpham.php');
			}
		?>
	</div>
</div>
<div class="clear"></div>
