<?php
$hari_sekarang=date("l");
switch($hari_sekarang)
{
    case "Monday" : $hari="Senin";
    break;
    case "Tuesday" : $hari="Selasa";
    break;
    case "Wednesday" : $hari="Rabu";
    break;
    case "Thusrday" : $hari="Kamis";
    break;
    case "Friday" : $hari="Jumat";
    break;
    case "Saturday" : $hari="Sabtu";
    break;
    default : $hari="Minggu";
}
echo("Sekarang Adalah Hari". $hari);
?>