<?php
function ketiga()
{
    $hitung=4+7;
    return $hitung;
}
echo(ketiga());
function keempat($sisi){
    $luas_persegi=$sisi*$sisi;
    return $luas_persegi;
}
?> //kode Scriptlet
<?= keempat(4)?> //kode Expresi, kode ini akan langsung menampilkan hasil
output, tanpa menuliskan perintah echo atau print