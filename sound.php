<?php
$numpeaks = $_POST['peaks'];
$maxdb = $_POST['max'];
$time = date("Y-m-d H:i:s");
$record = $time.",peaks: ".$numpaeks.", maximum dB: ".$maxdb."\n";

$file = "sound.log";
if(file_exists($file))
		$fp = fopen($file, "a");
else
	$fp = fopen($file,"w");
fwrite($fp, $record);
fclose($fp);
?>