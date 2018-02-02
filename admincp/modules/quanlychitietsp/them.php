<?php
	$sql = "SELECT * FROM loaisp";
	$result = mysqli_query($conn, $sql);

?>




<form action="modules/quanlychitietsp/xuly.php" method="post" enctype="multipart/form-data">
	<table width="100%" border="1">
		<tr>
			<td colspan="2" align="center">Thêm chi tiết sản phẩm</td>
		</tr>
		<tr>
			<td>Tên sản phẩm</td>
			<td>
				<input type="text" required name="tensp">
			</td>
		</tr>
		<tr>
			<td>Giá sản phẩm</td>
			<td>
				<input type="text" required name="gia">
			</td>
		</tr>
		<tr>
			<td>Hình ảnh</td>
			<td>
				<input type="file" required name="hinhanh">
			</td>
		</tr>
		<tr>
			<td>Mô tả sản phẩm</td>
			<td>
				<input type="textarea" name="mota" cols="40" rows="15">
			</td>
		</tr>
		<tr>
			<td>Loại sản phẩm</td>
			<td>
				<select required name="loaisp">
					<option>Chọn loại sản phẩm</option>
					<?php
						while ($row = mysqli_fetch_array($result)) {
							
					?>
					<option value="<?php echo $row['id_loaisp'];?>"><?php echo $row['tenloaisp'];?></option>
					<?php
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Thứ tự</td>
			<td>
				<input type="number" required min="0" step="1" name="thutusp">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="them" value="Thêm" align="center">
			</td>
		</tr>
	</table>
</form>