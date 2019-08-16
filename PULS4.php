<?php
//warna
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";
$t = "\n";
//waktu
system ("clear");
$today = date("d M Y");
$d = date("D");
echo $biru. "Tanggal :".$today;
echo $biru. "Hari ";
if($d == "Sun") {
	echo "Minggu";
}
elseif ($d == "Mon") {
	echo "Senin";
}
elseif ($d == "Tue") {
	echo "Selasa";
}
elseif ($d == "Wed") {
	echo "Rabu";
}
elseif ($d == "Thu") {
	echo "Kamis";
}
elseif ($d == "Fri") {
	echo "Jumat";
}
elseif ($d == "Sat") {
	echo "Sabtu";
}$nomor = "087730882553";
//pilih
print $ijo."
____ _ _ _ __   __ _
| _ \| | | | | / ___|      / \
| |_)| | | | | \ ___ \    / _ \
| __/| |_| | |___  ___)  / ___ \
|_|  \___/|_____| ____  /_/   \_\"$t

$t
AUTHOR :$kuning W A H Y U S I B R A N$t";
echo $putih. "TYPE   :$biru Hack Pulsa".$t;
echo $putih. "=================================".$t;
echo $putih."A L L O P E R A T O R  ".$t;
sleep(2);
echo $ijo. "Masukan nomor : ";
$nomer = trim(fgets(STDIN));
echo $ijo. "Masukan jumlah pulsa : ";
$pulsa = trim(fgets(STDIN));
echo "";
echo "";
echo "";
sleep(2);
echo $ijo. "SUKSES TERKIRIM !!".$t;
sleep(1);
echo "";
echo "";
echo "";
echo "";
echo "";
echo $biru." [>]".$ijo."Selamat Nomor ".$nomor." Mendapatkan Pulsa".$t;
echo $biru." [>]".$ijo."Sebesar Rp.".$pulsa." Jika Anda Butuh Bantuan". $t;
echo $biru." [>]".$ijo."Mohon Hubungi *123#. TERIMA KASIH". $t;
echo "";
?>
