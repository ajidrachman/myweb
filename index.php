<?php 
		include_once("function/helper.php");
		include_once("function/koneksi.php");

		$page = isset($_GET['page']) ? $_GET['page'] : false;

?>
<!DOCTYPE html>
<html>
<head>
	<title>simpel CRUD</title>
	<link rel="stylesheet" type="text/css" href="<?php echo URL."css/style.css"; ?>">
</head>

<body>

	<div id="container">
		<div id="header">
			<?php 
					if($page=="tambah"){

						echo "<p class='text-header'>Data Mahasiswa</p>";
					}elseif ($page=="lihat") {
						
						echo "<p class='text-header'>Tabel Mahasiswa</p>";
					}
					else{

						echo "<p class='text-header'>Data Mahasiswa</p>";
					}
			?>
		</div>

		<div id="menu">

		  <a class="tambah" href="<?php echo URL."index.php?page=tambah"; ?>">+ tambah data</a>
		  <a class="lihat" href="<?php echo URL."index.php?page=lihat"; ?>">lihat</a>

		</div>

		<div id="content">
			<?php 

				$file = "$page.php";

				if(file_exists($file)){
					include_once($file);
				}else{

					echo "<h3>Maaf Konten Tidak Ada</h3>";
				}
			?>
		</div>

		<div id="footer">
			<p class="text-footer">copy right simpel crud @ajidrachman</p>
		</div>
		
	</div>
</body>

</html>