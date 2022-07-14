<?php
echo "<body background=awan.jpg>";
echo "<link rel=stylesheet type=text/css href=vit.css>";
	$hari = date("d");
	$bulan = date("m");
	$tahun = date("y");
	$jumlahhari= date ("t",mktime(0,0,0,$bulan,$hari,$tahun));
	echo "<img src=logo.jpg width=50px>";
?>
<br><br>
<?php
	switch ($bulan) {
		case 1 : $nmbulan = "Januari"; break;
		case 2 : $nmbulan = "Februari"; break;
		case 3 : $nmbulan = "Maret"; break;
		case 4 : $nmbulan = "April"; break;
		case 5 : $nmbulan = "Mei"; break;
		case 6 : $nmbulan = "Juni"; break;
		case 7 : $nmbulan = "July"; break;
		case 8 : $nmbulan = "Agustus"; break;
		case 9 : $nmbulan = "September"; break;
		case 10 : $nmbulan = "Oktober"; break;
		case 11 : $nmbulan = "November"; break;
		case 12 : $nmbulan = "Desember"; break;
	}
	echo "<center><h1><font color=white> $nmbulan 20$tahun </font></h1></center>";
?> <br>
<center>
<div id=kalender>
<table style= align="center" cellpadding="10">
	<tr>
		<td align="center"><font color="#FF0000">Min</font></td>
		<td align="center">Sen</td>
		<td align="center">Sel</td>
		<td align="center">Rab</td>
		<td align="center">Kam</td>
		<td align="center">Jum</td>
		<td align="center">Sab</td>
	</tr>

<?php
	$s= (date("w",mktime(0,0,0,$bulan,1,$tahun)));
	for ($ds=1; $ds < $s ; $ds++) { 
		echo "<td></td>";
	}
	for ($d=0; $d < $jumlahhari ; $d++) { 
		if(date("w",mktime(0,0,0,$bulan,$d,$tahun))==0)
		{
			echo "<tr>";
		}
		$warna="000000";

		if (date("l",mktime(0,0,0,$bulan,$d,$tahun))=="Sunday") {
			$warna="#FF0000";
		}
		echo "<td align=center valign=middle><span style=\"color:$warna\">$d</span></td>";
		if(date("w",mktime(0,0,0,$bulan,$d,$tahun))==6){
			echo "</tr>";
		}
	}
	echo "</table></div>";
	echo "<br><br><div id=pilih align=center><a href=indrex.html> kembali ke menu awal </a></div><br>";
	echo "<marquee behavior=alternate direction=up height=50px><marquee direction=right style= font-size:15px; color: white;> Vitri Septia Kirani || 2100018059 || Pemograman Web - A || Dosen Taufik ismail || Prodi Informatika S1 2021 || Universitas Ahmad Dahlan</marquee></marquee>";

?>