<?php
 //recordMove.php
                        
$color = $_REQUEST['color'];
$x = $_REQUEST['x'];
$y = $_REQUEST['y'];
$cube = $_REQUEST['cube'];
$face = "#";

if((strlen($color) <= 6) && (strlen($x) <= 4) && (strlen($y) <= 4) && (strlen($cube) <= 2))  {
  $database = "glassplategame_com";
  $link = mysql_connect("localhost", "caploc", "REDACTED");
  if(!$link)
  die("Could not connect to MySQL");
  mysql_select_db($database)
  or die ("Couldn't open db" . mysql_error());
  if (isset($cube)) {
    $piece = mysql_real_escape_string($cube);
    $color = mysql_real_escape_string($color);
    $x = mysql_real_escape_string($x);
    $y = mysql_real_escape_string($y);
    $face = mysql_real_escape_string($face);
    $result = mysql_query("SELECT * FROM gpgmoves");
    $num_rows = mysql_num_rows($result);
    if(($cube - 1) == $num_rows) {
      $sql = "INSERT INTO gpgmoves SET piece='$piece', color='$color', x='$x',
      y='$y'";
      }
    else {
      $sql = "UPDATE gpgmoves SET piece='$piece', color='$color', x='$x',
      y='$y', face = '$piece' WHERE id='$piece'";
      }  
    $result = mysql_query($sql);
    if (!$result) die(mysql_error());
 } 
}
mysql_close();
?>
