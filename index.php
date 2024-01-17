<?php
include('config.php');
include('fungsi.php');

// header
include('header.php');
?>
	<section class="content">
			<h2 class="ui header"><i>Analitycal Hierarchy Process</i> (AHP)</h2>
			
	<div class="card-header">

	<p align="justify"><i>Analytic Hierarchy Process</i> (AHP) merupakan suatu model pendukung keputusan yang dikembangkan oleh Thomas L. Saaty. 
				Model pendukung keputusan ini akan menguraikan masalah multi faktor atau multi kriteria yang kompleks menjadi suatu 
				hirarki. Hirarki  didefinisikan sebagai suatu representasi dari sebuah permasalahan yang kompleks dalam suatu 
				struktur multi level dimana level pertama adalah tujuan, yang diikuti level faktor, kriteria, sub kriteria, dan 
				seterusnya ke bawah hingga level terakhir dari alternatif.</p>
			
	<p align="justify">AHP membantu para pengambil keputusan untuk memperoleh solusi terbaik dengan mendekomposisi permasalahan kompleks 
				ke dalam bentuk yang lebih sederhana untuk kemudian melakukan sintesis terhadap berbagai faktor yang terlibat dalam 
				permasalahan pengambilan keputusan tersebut. AHP mempertimbangkan aspek kualitatif dan kuantitatif dari suatu 
				keputusan dan mengurangi kompleksitas suatu keputusan dengan membuat perbandingan satu-satu dari berbagai kriteria 
				yang dipilih untuk kemudian mengolah dan memperoleh hasilnya.</p>

	<p align="justify">AHP sering digunakan sebagai metode pemecahan masalah dibanding dengan metode yang lain karena alasan-alasan 
				sebagai berikut :</p>

			<ol class="ui list">
				<li>Struktur yang berhirarki, sebagai konsekuesi dari kriteria yang  dipilih, sampai pada subkriteria yang paling dalam.</li>
				<li>Memperhitungkan validitas sampai dengan batas toleransi inkonsistensi berbagai kriteria dan alternatif yang dipilih oleh pengambil keputusan.</li>
				<li>Memperhitungkan daya tahan output analisis sensitivitas pengambilan keputusan.</li>
			<hr color="black">
<br>
</br>	
<br>
</br>
<br>
</br>	
<br>
</br>
<br>
</br>

<a onclick="return confirm('Anda yakin ingin sign out dan sign in ke aplikasi web metode PROFILE MATCHING ?!')" href="http://localhost/profile_matching/login.php"target="_blank" class="nav-link">
	<button class="ui right labeled icon button red" style="float: right;">
		<i class="right arrow icon"></i>
		Beralih Ke Metode Profile Matching
	</button>
</a>
<br/>
<br/>
<a onclick="return confirm('Anda yakin ingin sign out dan sign in ke aplikasi web metode SMART?!')" href="developer.php"target="_blank" class="nav-link">
	<button class="ui right labeled icon button red" style="float: right;">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<i class="right arrow icon"></i>
		Beralih Ke Metode SMART
	</button>
</a>
<br/>
<br/>
<a onclick="return confirm('Anda yakin ingin sign out dan sign in ke aplikasi web metode PROMETHEE?!')" href="developer.php"target="_blank" class="nav-link">
	<button class="ui right labeled icon button red" style="float: right;">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<i class="right arrow icon"></i>
		Beralih Ke Metode PROMETHEE
	</button>
</a>

	</ol>
	<br>
	</tr>
	</tbody>
	</section>

<?php include('footer.php'); ?>
