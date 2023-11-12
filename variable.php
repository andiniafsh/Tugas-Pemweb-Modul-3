<?php
$nama = "Ahmad Latif"; //variabel dengan tipe data srting
$nilai_bhs = 2; //variabel dengan tipe data integer
$nilai_ipa = 2; ////variabel dengan tipe data double
$bentuk_boolean = true; ////variabel dengan tipe data boolean
echo("Nama Mahasiswa: ".$nama."<br>");
echo("Nilai Bahasa: ".$nilai_bhs."<br>");
echo("Nilai IPA: ".$nilai_ipa."<br>");
if($bentuk_boolean==true){
    echo("Boolean menunjukan nilai benar <br>");
}
//konversi ke float
$nilai_bhs = (float)$nilai_bhs;
//konversi ke integer
$nilai_ipa = (int)$nilai_ipa;
echo("Nilai Bahasa setelah dikonversi float: ".$nilai_bhs."<br>");
echo("Nilai IPA setelah dikonversi integer = ".$nilai_ipa."<br>");
?>