<?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM sanpham WHERE id_sp='$id'";
	$sql1 = "SELECT * FROM loaisp";

	$sp = mysqli_query($conn, $sql);
	$sp = mysqli_fetch_array($sp);
	$loaisp = mysqli_query($conn, $sql1);

?>

<form action="modules/quanlychitietsp/xuly.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
	<table width="100%" border="1">
		<tr>
			<td colspan="2" align="center">Sửa chi tiết sản phẩm</td>
		</tr>
		<tr>
			<td>Tên sản phẩm</td>
			<td>
				<input type="text" name="tensp" required value="<?php echo $sp['tensp']; ?>">
			</td>
		</tr>
		<tr>
			<td>Giá sản phẩm</td>
			<td>
				<input type="text" name="gia" required value="<?php echo $sp['gia']; ?>">
			</td>
		</tr>
		<tr>
			<td>Hình ảnh</td>
			<td>
				<input type="file" name="hinhanh" required>
				<img width="60px" height="60" src="modules/quanlychitietsp/uploads/<?php echo $sp['hinhanh'];?>">
			</td>
		</tr>
		<tr>
			<td>Mô tả sản phẩm</td>
			<td>
				<input type="textarea" name="mota" cols="40" rows="15" value="<?php echo $sp['mota']; ?>">
			</td>
		</tr>
		<tr>
			<td>Loại sản phẩm</td>
			<td>
				<select required name="loaisp">
					<option>Chọn loại sản phẩm</option>
					<?php
						while ($row = mysqli_fetch_array($loaisp)) {
							
					?>
					<option <?php if($row['id_loaisp'] == $sp['id_loaisp']) echo "selected"?> value="<?php echo $row['id_loaisp'];?>"><?php echo $row['tenloaisp'];?></option>
					<?php
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Thứ tự</td>
			<td>
				<input type="number"  required min="0" step="1" name="thutusp" value="<?php echo $sp['thutusp']; ?>">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="sua" value="Sửa" align="center">
			</td>
		</tr>
	</table>
</form>