<div class="clear"></div>
<div class="main">
	<?php 
		if(isset($_GET['action']) && $_GET['query']){
						$tam = $_GET['action'];
						$query = $_GET['query'];
					}
					else{
						$tam = '';
						$query = '';

					}
					if($tam == 'quanlydanhmucsanpham' && $query == 'them') {
						include("modules/quanlydanhmucsp/them.php");
						include("modules/quanlydanhmucsp/lietke.php");
					}elseif ($tam == 'quanlydanhmucsanpham' && $query == 'sua') {
						# code...
						include("modules/quanlydanhmucsp/sua.php");
					}elseif ($tam == 'quanlysanpham' && $query == 'them') {
						# code...
						include("modules/quanlysp/them.php");
						include("modules/quanlysp/lietke.php");
					
					}elseif ($tam == 'quanlysanpham' && $query == 'sua') {
						# code...
						include("modules/quanlysp/sua.php");
						
					
					}elseif ($tam == 'quanlydonhang' && $query == 'lietke') {
						# code...
						include("modules/quanlydonhang/lietke.php");
						
					
					}elseif ($tam == 'donhang' && $query == 'xemdonhang') {
						# code...
						include("modules/quanlydonhang/xemdonhang.php");
						
					
					}
					else {
						include("modules/dashboard.php");
					}
	 ?>
</div>