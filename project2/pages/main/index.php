<?php
		if(isset($_GET['trang'])){
			$page = $_GET['trang'];

		}else{
			$page = 1;
		}
		if($page == '' || $page ==1){
			$begin = 0;
			}else{
				$begin = ($page*5)-5;
			}


		 $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,5	";
		
		
		
        $query_pro = mysqli_query($mysqli,$sql_pro);
        
        
?>

				<h3>Sản phẩm mới nhất</h3> 
				<ul class="product_list">
					<?php
					while ($row = mysqli_fetch_array($query_pro)) {
						# code...
					
					?>
					<li>
						<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
						<img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" width="100%">
						<p class="title_product"> <?php echo $row['tensanpham']?></p>
						<p class="price">Giá: <?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></p>
						<p style="text-align: center; color:#000000
"><?php echo $row['tendanhmuc']?></p>
						</a>
					</li>
					<?php 
					}
					 ?>					
				</ul>
				<div style="clear: both;"></div>
				<style type="text/css">
					ul.list_trang{
						padding: 0;
						margin: 0;
						list-style: none;
					}
					ul.list_trang li{
						float: left;
						padding: 5px 14px;
						margin: 5px;
						background: #e6e6e6;
						display: block;
						
					}
					ul.list_trang li a{
						color: #000;
						text-align: center;
						text-decoration: none;

					}
				</style>
				<p>Trang: </p>
				<?php 
				$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
				$row_count = mysqli_num_rows($sql_trang);
					$trang = ceil($row_count/5);

				 ?>
				<ul class="list_trang">
					<?php 
						
						for($i = 1; $i<=$trang; $i++){
					 ?>
						<li  <?php if($i == $page) { echo 'style="background: gray;"';}else{ echo '';} '' ?>><a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
					<?php 
					}
					 ?>
					
				</ul>
		