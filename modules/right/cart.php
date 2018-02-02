<h1>Giỏ hàng</h1>
<?php
	//session_start();
	
	if ( session_status() == PHP_SESSION_NONE ) {
		session_start();
	}
	
	//Thêm sản phẩm sau mỗi lần click buynow
	if(isset($_GET['add']) && !empty($_GET['add'])){
		$id = $_GET['add'];
		if (!isset($_SESSION['cart_'.$id])) {
	      $_SESSION['cart_'.$id] = 1;
	   	}
	   	else {
	      	$_SESSION['cart_'.$id] += 1;
	      	header('location:index.php?xem=giohang');			//để khi refresh trang, không tự động tăng
	   	}
	}

	if(isset($_GET['them']) && !empty($_GET['them'])){
		$_SESSION['cart_'.$_GET['them']] += 1;
		header('location:index.php?xem=giohang');			//để khi refresh trang, không tự động tăng
	}

	if(isset($_GET['tru']) && !empty($_GET['tru'])){
		if($_SESSION['cart_'.$_GET['tru']] > 0){
			$_SESSION['cart_'.$_GET['tru']] -= 1;
		} else {
			$_SESSION['cart_'.$_GET['tru']] = 0;
			unset($_SESSION['cart_'.$_GET['tru']]);	
		}
		header('location:index.php?xem=giohang');			//để khi refresh trang, không tự động tăng
	}

	if(isset($_GET['xoa']) && !empty($_GET['xoa'])){
		unset($_SESSION['cart_'.$_GET['xoa']]);
		header('location:index.php?xem=giohang');			//để khi refresh trang, không tự động tăng
	}



   //Hiển thị sản phẩm đã thêm
   $tong = 0;

   foreach ($_SESSION as $name=>$value) {
   		if($value == 0){
   			// unset($_SESSION[$name];
   		}
   	}

   foreach ($_SESSION as $name=>$value) {
   		
   		// echo $name . ' ' . $value . '<br>';
   		if(substr($name, 0, 5) == 'cart_'){
   			$id = substr($name, 5, strlen($name) - 5);
   			// echo $id;
   			$sql = "SELECT * FROM sanpham WHERE id_sp = '$id' ";
   			$result = mysqli_query($conn, $sql);
   			$row = mysqli_fetch_array($result);
   			echo "<br>Sản phẩm: " . $row['tensp'] . " " . " | Giá: " . $row['gia'] .
   			" | Số lượng: " . 
   			"<a href='index.php?xem=giohang&them=" . $row['id_sp'] . "'>[+]</a>" . 
   			$value . 
   			"<a href='index.php?xem=giohang&tru=" . $row['id_sp'] . "'>[-]</a>" . 
   			"<a href='index.php?xem=giohang&xoa=" . $row['id_sp'] . "''> Delete</a>";

	   		$tong += $row['gia'] * $value;
	   	}
   }
   if($tong == 0){
   		echo "<br><hr>Giỏ hàng trống";
   		echo '<div align="center"><a style="color:green;" href="index.php">Tiếp tục mua hàng</a></div>';
   } else {
   		echo "<br><hr>Tổng số tiền phải trả: ".$tong;

   		if(isset($_SESSION['thanhvien'])){
	   		echo "<br><br><div align='center'><a style='color:red;' href='index.php?xem=thongbao&thongtin=muahang'>Thanh toán</a></div>";
	   		echo '<div align="center"><a style="color:green;" href="index.php">Tiếp tục mua hàng</a></div>';
	   } else {
	   		echo "<br><br><div align='center'><a style='color:red;' href='index.php?xem=dangnhap'>Đăng nhập để thanh toán</a></div>";
	   }
   }

   
   
	
?>