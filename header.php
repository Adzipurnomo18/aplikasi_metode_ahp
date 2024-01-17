

<!DOCTYPE html>
<html>
<head>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>WEB | SPK | AHP</title>
	<link rel="icon" href="images/ahp.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Alert -->
	<link rel="stylesheet"  href="css/style.css">
	<link rel="stylesheet"  href="semantic/dist/semantic.min.css">
	<script src="plugins/alert.js"></script>
</head>



<body>
<header>
<h1>Aplikasi Web Perhitungan Otomatis Metode AHP <i>(Analitycal Hierarchy Process)</i></h1>
</header>

<?php

        $sql_cek = "SELECT * FROM pengguna";
        $query_cek = mysqli_query($koneksi, $sql_cek);
		$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
		{

		
?>

<div class="wrapper">
	<nav id="navigation" role="navigation">
		<ul>
		<li class="nav-item">
		<div class="image">
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;<img src="images/photo.jpg"  width=100px class="img-circle elevation-1"/>
					<a class="item" href="index.php"><i class="d-block"></i>
							<?php echo $data_cek['email']; }?>
							</a>
						</li>	
				
			<div class="wrapper">
				<nav id="navigation" role="navigation">
					<ul>
					<li class="nav-item">
							<a class="item" href="index.php"><i class="nav-icon fas fa-home"></i>
								&nbsp;Dashboard
							</a>
							<hr/>
						</li>
				<a class="item" href="kriteria.php"><i class="nav-icon fas fa-fire"></i> &nbsp;Kriteria
					<div class="ui black tiny label" style="float: right;"><?php echo getJumlahKriteria(); ?></div>
				</a>
				<hr/>
			</li>
			<li>
				<a class="item" href="alternatif.php"><i class="nav-icon fas fa-fire-alt"></i> &nbsp;Alternatif
					<div class="ui black tiny label" style="float: right;"><?php echo getJumlahAlternatif(); ?></div>
				</a>
				<hr/>
			</li>
			<li><a class="item" href="bobot_kriteria.php"><i class="nav-icon fas fa-book-open"></i> &nbsp;Perbandingan Kriteria</a></li>
			<hr/>
			<li><a class="item" href="bobot.php?c=1"><i class="nav-icon fas fa-book-reader"></i> &nbsp;Perbandingan Alternatif</a></li>
			<hr/>	
				<ul>
					<?php

						if (getJumlahKriteria() > 0) {
							for ($i=0; $i <= (getJumlahKriteria()-1); $i++) { 
								echo "<li><a class='item' href='bobot.php?c=".($i+1)."'>".getKriteriaNama($i)."</a></li>";
							}
						}

					?>
				</ul>
			<li><a class="item" href="hasil.php"><i class="nav-icon fas fa-chalkboard-teacher"></i> &nbsp;Hasil</a></li>
			<li class="nav-item">
			<hr/>
			<li><a class="item" href="grafik.php"><i class="nav-icon fas fa-chalkboard-teacher"></i> &nbsp;Grafik</a></li>
			<li class="nav-item">
			<hr/>
			<a onclick="return confirm('Anda yakin ingin keluar dari aplikasi ini ? Hidup lebih mudah tanpa mikirin rumus kan ?!')" href="logout.php" class="nav-link">
					<i class="nav-icon fas fa-power-off"></i>
						&nbsp;Sign out	
				</a>
				<hr/>
			</li>
		</ul>
	</nav>
	</nav>

	