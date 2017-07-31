<!DOCTYPE html>
<html>
<head>
	<title>TABEL PENILAIAN</title>
<h3>NAMA	: ADE IRMA</h3>
<h3>JURUSAN	: RPL</h3>
<h2>NILAI</h2>
<?php 
$ag = 51;
$pj = 87;
$pkn = 70;
$pro = 90;
//agama
if ($ag >= 0 && $ag <= 30) {
	$ket = "E";
}elseif ($ag >= 31 && $ag <= 50) {
	$ket = "D";
}elseif ($ag >= 51 && $ag <= 60) {
	$ket = "C";
}elseif ($ag >= 61 && $ag <= 80) {
	$ket = "B";
}elseif ($ag >= 81 && $ag <= 100) {
	$ket = "A";
}
//pjok
if ($pj >=0 && $pj <= 30) {
	$kete = "E";
}elseif ($pj >=31 && $pj <= 50) {
	$kete = "D";
	}elseif ($pj >= 51 && $pj <= 60) {
	$kete = "C";
}elseif ($ag >= 61 && $ag <= 80) {
	$kete = "B";
}elseif ($pj >= 81 && $pj <= 100) {
	$kete = "A";
}
//ppkn
if ($pkn >= 0 && $pkn <= 30) {
	$keter = "E";
}elseif ($pkn >= 31 && $pkn <= 50) {
	$keter = "D";
}elseif ($pkn >= 51 && $pkn <= 60) {
	$keter = "C";
}elseif ($pkn >= 61 && $pkn <= 80) {
	$keter = "B";
}elseif ($pkn >= 81 && $pkn <= 100) {
	$keter = "A";

}
//produktif
if ($pro >= 0 && $pro <= 30) {
	$ketera = "E";
}elseif ($pro >= 31 && $pro <= 50) {
	$ketera = "D";
}elseif ($pro >= 51 && $pro <= 60) {
	$ketera = "C";
}elseif ($pro >= 61 && $pro <= 80) {
	$ketera = "B";
}elseif ($pro >= 81 && $pro <= 100) {
	$ketera = "A";

}
//TIDAK MENERIMA KRITIK DAN SARAN
 ?>
 <table border="1">
 	<td>MATA PELAJARAN</td>
 	<td>ANGKA</td>
 	<td>HURUF</td>
 	<tr>
 		<td>AGAMA</td>
 		<td><?php echo $ag; ?></td>
 		<td><?php echo $ket; ?></td>
 	</tr>

 	<tr>
 		<td>PJOK</td>
 		<td><?php echo $pj; ?></td>
 		<td><?php echo $kete; ?></td>
 	</tr>

 	<tr>
 		<td>PPKN</td>
 		<td><?php echo $pkn; ?></td>
 		<td><?php echo $keter; ?></td>
 	</tr>

 	<tr>
 		<td>PRODUKTIF</td>
 		<td><?php echo $pro; ?></td>
 		<td><?php echo $ketera; ?></td>
 	</tr>
 	<tr>
 		<td colspan="2" align="center">RATA-RATA</td>
 		<td><?php echo ($ag+$pkn+$pj+$pro)/4; ?></td>
 	</tr>
 </table>
</head>
<body>

</body>
</html>