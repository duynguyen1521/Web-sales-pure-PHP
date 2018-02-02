<?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM sanpham WHERE id_sp = '$id' ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
?>


<table width="auto" border="1" align="center">
	<tr>
		<td colspan="2">Chi tiết sản phẩm</td>
	</tr>
	<tr>
		<td rowspan="2">
			<img width="200px" height="200px" src="admincp/modules/quanlychitietsp/uploads/<?php echo 
			$row['hinhanh'];?>" alt="">
		</td>
		<td>Tên sản phẩm: <?php echo $row['tensp']; ?></td>
	</tr>
	<tr>
		
		<td>Giá sản phẩm: <?php echo $row['gia'].' VNĐ'; ?></td>
	</tr>
	<tr>
		<td colspan="2"><div align="center">Thông số kỹ thuật</div></td>
	</tr>
	<tr>
		<td colspan="2"><?php echo $row['mota']; ?></td>
	</tr>

	<a href="index.php?xem=giohang&add=<?php echo $row['id_sp'];?>"><img style="float: right;" width="100px" height="70px" src="images/Buy-now.jpg"></a>
</table>

<p>Hình ảnh sản phẩm</p>
<?php
	$sql3 = "SELECT * FROM gallery WHERE id_sp = '$id' ";
	$result3 = mysqli_query($conn, $sql3);
	while($row3 = mysqli_fetch_array($result3)){
?>
	<img width="60" height="60" src="admincp/modules/gallery/<?php echo $row3['hinhanhsp'];?>" alt="">
<?php
	}
?>

<p>Sản phẩm cùng loại</p>
<div class="sanphamall">
	<ul>
		<?php
			$id_loaisp = $row['id_loaisp'];					//Lấy loại sản phẩm
			$id_sp = $row['id_sp'];							//id sản phẩm hiện tại
			$sql2 = "SELECT * FROM sanpham WHERE id_loaisp = '$id_loaisp' AND id_sp <> '$id_sp' ";
			$result2 = mysqli_query($conn, $sql2);
			while($row2 = mysqli_fetch_array($result2)){
		?>
			<li><a href="index.php?xem=chitietsanpham&id=<?php echo $row2['id_sp'];?>">
					<img width="60" height="60" src="admincp/modules/quanlychitietsp/uploads/<?php echo $row2['hinhanh'];?>" alt="">
					<p><?php echo $row2['tensp'];?></p>
					<p><?php echo $row2['gia'];?></p>
					<p>Chi tiết</p>
			</a></li>
		<?php
			}
		?>
	</ul>
</div>