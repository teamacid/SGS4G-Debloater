<?php
$ROM = "kj6";
$rom = trim(@$_GET['rom']);
if($rom != "") {
   $ROM = $rom;
}
$APK_LIST = "apk_list_$ROM.txt";
?>
