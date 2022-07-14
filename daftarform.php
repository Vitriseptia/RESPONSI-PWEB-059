<?php
	echo "<link rel=stylesheet href=vit.css type=text/css>";
	echo "<br><br><br><br><br><br>";
	echo "<center><div id=tampl>";
	echo "<body background=awan.jpg>";
	echo "<head><title>DAFTAR KEHADIRAN</title></head>";
	echo "<center><br> DAFTAR KEHADIRAN MAHASISWA </center>";
	$fp = fopen("text.txt","r");
	echo "<table border=1 width=100% align=center>";
	echo "<tr><th> Tanggal </th><th> Nama Lengkap </th><th> NIM </th><th> Prodi </th><th> Kehadiran </th><th> alasan </th></tr>";
	$tanggal=date("d-m-Y");
	while($isi = fgets($fp,80))
	{
		$pisah = explode("|", $isi);
		echo "<tr><th> $tanggal </th><th> $pisah[0] </th><th> $pisah[1] </th><th> $pisah[2] </th><th> $pisah[3] </th><th> $pisah[4] </th></tr>";
	}

	echo "<br><br></table></div></center>";
	echo "<br><br><br>";
	echo "<center><div id=pilih>";
	echo "<a href = formulir.html> Isi Daftar Hadir </a>";
	echo "</div>";
	echo "<br><br><div id=pilih align=center><a href=index.html> kembali ke menu awal </a></div><br></center>";

?>