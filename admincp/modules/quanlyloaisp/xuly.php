<?php
	include('../config.php');	//Phải kết nối CSDL vì file them.php gọi đến file này chứ không include nó
								//Bởi vì đã kết nối sẵn từ file index.php

	$tenloaisp = $_POST['tenloaisp'];
	$thutu = $_POST['thutu'];
	$id = $_GET['id'];

	if(isset($_POST['them'])){
		//them loai sp
		$sql = "INSERT INTO loaisp (tenloaisp, thutu) VALUE ('$tenloaisp', '$thutu')";
		$result = mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=them');		//tro ve trang them loaisp truoc do
	} elseif (isset($_POST['sua'])) {
		$sql = "UPDATE loaisp SET tenloaisp='$tenloaisp', thutu='$thutu' WHERE id_loaisp='$id'";
		$result = mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=sua&id='.$id);
	} else {
		//xoa loai sp
		$sql = "DELETE FROM loaisp WHERE id_loaisp='$id'";
		$result = mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=them');
	}
?>