<?php
	$sql = "SELECT * FROM sanpham, loaisp WHERE sanpham.id_loaisp = loaisp.id_loaisp ORDER BY sanpham.id_sp DESC";
	$result = mysqli_query($conn, $sql);
?>

<table width="100%" border="1">
	<tr>
		<td>ID</td>
		<td>Tên sản phẩm</td>
		<td>Hình ảnh</td>
		<td>Giá</td>
		<td>Mô tả</td>
		<td>Loại sản phẩm</td>
		<td>Thứ tự</td>
		<td colspan="2">Quản lý</td>
	</tr>

	<?php
		while ($row = mysqli_fetch_array($result)) {
	?>

	<tr>
		<td><?php echo $row['id_sp'];?></td>
		<td><?php echo $row['tensp'];?></td>
		<td>
			<img src="modules/quanlychitietsp/uploads/<?php echo $row['hinhanh'];?>" width="60px" height="60px">
			<p><a href="index.php?quanly=gallery&ac=them&id=<?php echo $row['id_sp'];?>">Gallery</a></p>
		</td>
		<td><?php echo $row['gia'];?></td>
		<td><?php echo $row['mota'];?></td>
		<td><?php echo $row['tenloaisp'];?></td>
		<td><?php echo $row['thutusp'];?></td>
		<td>
			<a href="index.php?quanly=quanlychitietsp&ac=sua&id=<?php echo $row['id_sp'];?>">Sửa</a>
		</td>
		<td>
			<a href="modules/quanlychitietsp/xuly.php?id=<?php echo $row['id_sp'];?>">Xóa</a>
		</td>	
	</tr>

	<?php
		}
	?>
</table>
	
