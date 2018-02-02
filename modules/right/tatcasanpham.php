<?php
	if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	} else {
		$page = 1;
	}
	$start = $page * ($page - 1);
	$ppp = 5;									//products per page
	$sql = "SELECT * FROM sanpham LIMIT ". $start . ", " .$ppp;
	$result = mysqli_query($conn, $sql);

?>

<p>Tất cả sản phẩm</p>
<div class="sanphamall">
	<ul>
		<?php 
			while($row = mysqli_fetch_array($result)){
		?>
			<li><a href="index.php?xem=chitietsanpham&id=<?php echo $row['id_sp'];?>">
					<img width="60" height="60" src="admincp/modules/quanlychitietsp/uploads/<?php echo $row['hinhanh'];?>" alt="">
					<p><?php echo $row['tensp'];?></p>
					<p><?php echo $row['gia'];?></p>
					<p>Chi tiết</p>
			</a></li>
		<?php
			}
		?>
	</ul>
</div>

<p style="clear: both;"></p>

<?php
	$sql2 = "SELECT * FROM sanpham";
	$sql_trang = mysqli_query($conn, $sql2);
	$numPdt = $sql_trang->num_rows;
	$numPage = ceil($numPdt/$ppp);
	echo 'Trang: ';
	for($b=1; $b<= $numPage; $b++){
		if($b == $page){
			$soHienThi = "<span style='background-color:gray;'>".$b."</span>";
		}else{
			$soHienThi = $b;
		}
		echo "<a href='index.php?trang=".$b."'>" . " " . $soHienThi . "</a>";
	}
?>
