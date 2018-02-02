<!-- 
	include thì dùng đường dẫn tương đối vẫn ok.
	còn action của <form> với href của <a> và src của <img> thì phải dùng đường dẫn tuyệt đối
 -->
<form action="modules/quanlyloaisp/xuly.php" method="post" enctype="multipart/form-data">
	<table width="100%" border="1px">
		<tr>
			<td colspan="2"><div align="center">Thêm loại sản phẩm</div></td>
		</tr>
		<tr>
			<td>Tên loại sản phẩm</td>
			<td><input type="text" required name="tenloaisp"></td>
		</tr>
		<tr>
			<td>Thứ tự</td>
			<td><input type="number" required step="1" min="0" name="thutu"></td>
		</tr>
		<tr>
			<td colspan="2">
				<div align="center">
					<input type="submit" name="them" value="Thêm">
				</div>
			</td>
		</tr>
	</table>
</form>