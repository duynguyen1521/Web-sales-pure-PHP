<div class="left">
	<?php
		if(isset($_GET['ac'])){		//bien action
			$temp = $_GET['ac'];
		} else {
			$temp = "";
		}

		if($temp == "them"){
			include('them.php');
		} elseif ($temp == "sua") {
			include('sua.php');
		}
	?>
</div>
<div class="right">
	<?php
		include('lietke.php');
	?>
</div>