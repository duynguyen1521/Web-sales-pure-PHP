<div class="content">
	<?php
		if(isset($_GET['quanly'])){
			$temp = $_GET['quanly'];
		} else {
			$temp = "";
		}

		if($temp == "quanlyloaisp"){
			include('quanlyloaisp/main.php');
		} elseif ($temp == "quanlychitietsp") {
			include('quanlychitietsp/main.php');
		} elseif ($temp == "doimatkhau") {
			include('doimatkhau.php');
		} elseif ($temp == "gallery") {
			include('gallery/main.php');
		}
	?>
</div>
<div class="clear"></div>