<?php
	if(isset($_POST['search'])){
		$search = $_POST['searchtext'];
		$sql = "SELECT * FROM sanpham WHERE tensp LIKE '%$search%' ";
		$result = mysqli_query($conn, $sql);
	}
?>

<p><?php echo "Kết quả tìm kiếm";?></p>
<div class="sanphamall">
	<ul>
		<?php 
			if($result->num_rows == 0){
				echo "<p>Không tìm thấy sản phẩm nào!</p>";
		
			}else{
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
			}
		?>
	</ul>
</div>
