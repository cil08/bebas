<?php
$nama = "Fandi Ganteng";
$petikSatu = 'Pada petik satu, $nama tetap muncul sebagai $nama<br />';
$petikDua = "Sedangkan pada petik dua, \$nama menjadi: $nama<br /><br />";
echo $petikSatu;
echo $petikDua;
//Contoh penggunaan sederhana
$harga = 20000;
$strHarga = number_format($harga, 0, ",", ".");
echo "Harga Rp.$strHarga<br />";
?>