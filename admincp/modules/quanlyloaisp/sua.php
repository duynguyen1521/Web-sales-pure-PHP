<?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM loaisp WHERE id_loaisp='$id'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result)
?>

<form action="modules/quanlyloaisp/xuly.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
	<table width="100%" border="1px">
		<tr>
			<td colspan="2"><div align="center">Sửa loại sản phẩm</div></td>
		</tr>
		<tr>
			<td>Tên loại sản phẩm</td>
			<td><input type="text" required name="tenloaisp" value="<?php echo $row['tenloaisp'] ?>"></td>
		</tr>
		<tr>
			<td>Thứ tự</td>
			<td><input type="number" required step="1" min="0" name="thutu" value="<?php echo $row['thutu'] ?>"></td>
		</tr>
		<tr>
			<td colspan="2">
				<div align="center">
					<input type="submit" name="sua" value="Sửa">
				</div>
			</td>
		</tr>
	</table>
</form>