<?php
		echo "<link rel=stylesheet href=vit.css type=text/css>";
		echo "<head><title>DAFTAR KEHADIRAN</head></title>";
		echo "<body background=awan.jpg>";
		$nama = $_POST["nama"];
		$nim =  $_POST["nim"];
		$prodi = $_POST["prodi"];
		$kehadiran = $_POST["kh"];
		$alasan = $_POST["alasan"];
		$fp = fopen("text.txt","a+");
		fputs($fp,"$nama|$nim|$prodi|$kehadiran|$alasan\n");
		fclose($fp);

		echo "<br><br><br><br><br><br>";
		echo "<center><div id=tampl>";
		echo "<b>Terima Kasih Telah Mengisi Daftar Hadir ❤️</b><br></div></center>";
		echo "<br><br><br>";
		echo "<center><div id=pilih>";
		echo "<a href=formulir.html> Isi Daftar Hadir</a></div><br>";
	
		echo "<center><div id=pilih>";
		echo "<a href=daftarform.php> Lihat Daftar Hadir</a><br></div>";

		echo "<br><br><div id=pilih align=center><a href=index.html> kembali ke menu awal </a></div><br>";

?>