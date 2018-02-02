<p>Thêm Gallery</p>
<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
?>

<form action="modules/gallery/xuly.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
	<input type="file" name="hinhanh[]" multiple="multiple">
	<input type="submit" name="upload" value="Upload images">
</form>