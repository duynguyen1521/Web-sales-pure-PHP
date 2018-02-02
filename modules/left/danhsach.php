<?php
	$sql = "SELECT * FROM loaisp";
	$result = mysqli_query($conn, $sql);

?>

<p>Loại sản phẩm</p>
<div class="danhsachsanpham">
	<ul>
		<?php
			while ($row = mysqli_fetch_array($result)) {
		?>
			<li><a href="index.php?xem=chitietloaisanpham&id=<?php echo $row['id_loaisp'];?>"><?php echo $row['tenloaisp']; ?></a></li>
		<?php
			}
		?>

	</ul>
</div>

<p>Hãng sản phẩm</p>
<div class="hangsanpham">
	<ul>
		<li><a href="">Apple</a></li>
		<li><a href="">Dell</a></li>
		<li><a href="">ASUS</a></li>
		<li><a href="">HP</a></li>
	</ul>
</div>
