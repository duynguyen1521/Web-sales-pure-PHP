<?php
	include('../config.php');	//Phải kết nối CSDL vì file them.php gọi đến file này chứ không include nó
								//Bởi vì đã kết nối sẵn từ file index.php

	$tensp = $_POST['tensp'];
	$gia = $_POST['gia'];
	$mota = $_POST['mota'];
	$loaisp = $_POST['loaisp'];
	$thutusp = $_POST['thutusp'];

	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_temp = $_FILES['hinhanh']['tmp_name'];			
	//Vì server lưu tên file với 1 tên tạm chứ không lưu bằng tên file ở local
	move_uploaded_file($hinhanh_temp, 'uploads/'.$hinhanh);

	$id = $_GET['id'];

	if(isset($_POST['them'])){
		$sql = "INSERT INTO sanpham (tensp, hinhanh, gia, mota, id_loaisp, thutusp) VALUES 
		('$tensp', '$hinhanh', '$gia', '$mota', '$loaisp', '$thutusp')";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlychitietsp&ac=them');
	} else if(isset($_POST['sua'])){
		$sql = "UPDATE sanpham SET tensp='$tensp', gia='$gia', mota='$mota', id_loaisp='$loaisp', thutusp='$thutusp', hinhanh='$hinhanh' WHERE id_sp='$id'";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlychitietsp&ac=sua&id='.$id);
	} else {
		$sql = "DELETE FROM sanpham WHERE id_sp='$id'";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlychitietsp&ac=them');
	}
?>