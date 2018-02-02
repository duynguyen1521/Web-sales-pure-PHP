<div class="menu">
	<ul>
		<li><a href="index.php">Trang chủ</a></li>
		<li><a href="index.php?xem=chitietloaisanpham&id=1">Sản phẩm</a></li>
		<li><a href="">Hướng dẫn</a></li>
		<li><a href="index.php?xem=giohang">Giỏ hàng</a></li>
		<li><a href="">Liên hệ</a></li>
		<li class="searchform">
			<form action="index.php" method="post" enctype="multipart/form-data">
				<input type="text" name="searchtext" id="searchf" size="20" required placeholder="Search">
				<input type="submit" name="search" id="searchbtn" value="Search">
			</form>
		</li>
		<?php
			if(!isset($_SESSION['thanhvien'])){
		?>
		<li><a href="index.php?xem=dangnhap">Đăng nhập</a></li>
		<li><a href="index.php?xem=dangky">Đăng kí</a></li>
		<?php
			}
		?>
		
		<?php
			if(isset($_SESSION['thanhvien'])){
		?>
			<li><a href="index.php?xem=dangxuat">Đăng xuất</a></li>
			<div class="thanhvien">Xin chào:<span style="color: red;">  <?php echo $_SESSION['thanhvien'];?>
			</span></div>
		<?php
			}
		?>
	</ul>
</div>

