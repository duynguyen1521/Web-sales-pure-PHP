<?php
	$sql = "SELECT * FROM loaisp ORDER BY id_loaisp DESC";
	$result = mysqli_query($conn, $sql);
?>

<table width="100%" border="1px">
	<tr>
		<td>ID</td>
		<td>Tên loại sản phẩm</td>
		<td>Thứ tự</td>
		<td colspan="2">Quản lý</td>
	</tr>
	<?php
		while($row = mysqli_fetch_array($result)){

	?>
	<tr>
		<td><?php echo $row['id_loaisp']; ?></td>
		<td><?php echo $row['tenloaisp']; ?></td>
		<td><?php echo $row['thutu']; ?></td>
		<td><a href="index.php?quanly=quanlyloaisp&ac=sua&id=<?php echo $row['id_loaisp']; ?>">Sửa</a></td>
		<td><a href="modules/quanlyloaisp/xuly.php?id=<?php echo $row['id_loaisp']; ?>">Xóa</a></td>
	</tr>
	<?php
		}
	?>
</table>