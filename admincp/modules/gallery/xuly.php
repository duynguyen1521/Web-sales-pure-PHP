<?php
	include('../config.php');

	if(isset($_POST['upload'])){
		$id = $_GET['id'];
		$hinhanh = $_FILES['hinhanh']['name'];

		foreach ($hinhanh as $i => $name) {
			$name = $_FILES['hinhanh']['name'][$i];
			$type = $_FILES['hinhanh']['type'][$i];
			$size = $_FILES['hinhanh']['size'][$i];
			
			$hinhanh_temp = $_FILES['hinhanh']['tmp_name'][$i];			//Tên tạm của tệp được upload trên server
			$explode = explode('.', $name);
			$ext = end($explode);
			$path = 'uploads/';
			// $path = $path . basename($name);						//Các file giống nhau nếu đc up sẽ replace nhau
			$path = $path . basename($explode[0].time().'.'.$ext);		
			//Cho phép upload các files ảnh giống nhau vì đã chèn thêm thời gian upload

			$hinhanhsp = $path;

			$thongbao = array();

			if(empty($hinhanh_temp)){
				echo $thongbao[] = 'Bạn phải chọn ít nhất một ảnh!';
			} else{
				$chophep = array('jpeg', 'jpg', 'png', 'PNG', 'gif', 'bmp');
				$max_size = 4000000;
				if(in_array($ext, $chophep) == false){
					echo $thongbao[] = 'File <strong>' . $name . '</strong> không phải file ảnh!';
				} elseif($size > $max_size){
					echo $thongbao[] = 'File <strong>' . $name . '</strong> quá lớn!';
				}
			}
			if(empty($thongbao)){
				if(!file_exists('uploads')){
					mkdir('uploads', 0777);
				} elseif(move_uploaded_file($hinhanh_temp, $path)){
					$sql = "INSERT INTO gallery (id_sp, hinhanhsp) VALUES ('$id', '$hinhanhsp') ";
					if(mysqli_query($conn, $sql)){
						// header('location:them.php');		//Không dùng cái này vì sẽ mất master layout
						header('location:../../index.php?quanly=gallery&ac=them&id='.$id);
						echo 'Upload file <strong>' . $name . '</strong> thành công!<br/>';
					}
				} else{
					echo 'Upload file <strong>' . $name . '</strong> thất bại!<br/>';
				}
			}
		}

		

	}
?>