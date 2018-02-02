<?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM sanpham WHERE id_loaisp = '$id' ";
	$result = mysqli_query($conn, $sql);

	$sql2 = "SELECT tenloaisp FROM loaisp WHERE id_loaisp = '$id' ";
	$result2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_array($result2);
?>

<p><?php echo $row2['tenloaisp'];?></p>
<div class="sanphamall">
	<ul>
		<?php 
			while($row = mysqli_fetch_array($result)){
		?>
			<li><a href="index.php?xem=chitietsanpham&id=<?php echo $row['id_sp']; ?>">
					<img width="60px" height="60px" src="admincp/modules/quanlychitietsp/uploads/<?php echo $row['hinhanh'];?>" alt="">
					<p><?php echo $row['tensp']; ?></p>
					<p><?php echo $row['gia']; ?></p>
					<p>Chi tiết</p>
			</a></li>
		<?php
			}
		?>
	</ul>
</div>
