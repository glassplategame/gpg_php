<?php
 //recordFace.php

$cube = $_REQUEST['cube'];
$face = $_REQUEST['face'];
$database = "glassplategame_com";
$link = mysql_connect("localhost", "caploc", "REDACTED");
 if(!$link)  
  die("Could not connect to MySQL");
 mysql_select_db($database)
 or die ("Couldn't open db" . mysql_error());
 if (isset($cube)) {
   $piec = mysql_real_escape_string($cube);
   $fac = mysql_real_escape_string($face);
   $result = mysql_query("SELECT * FROM gpgmoves");
   $num_rows = mysql_num_rows($result);
   $sql = "UPDATE gpgmoves SET face='$fac' WHERE id = '$piec'";
   $result = mysql_query($sql);
   if (!$result) die(mysql_error());
   echo $face;
 } 
mysql_close();
?>

