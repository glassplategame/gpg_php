<html>
<head><title>gpgMovesDump.php</title></head>
<body>

<?php
// check database contents$database = "glassplategame_com"; 

$database = "glassplategame_com";
$link = mysql_connect("localhost", "caploc", "REDACTED");
if(!$link)
  die("Could not connect to MySQL");
mysql_select_db($database)
 or die ("Couldn't open db" . mysql_error());
$query = null;
$query  = "SELECT * FROM gpgmoves";
$result = mysql_query($query) or die(mysql_error());
  while($data = mysql_fetch_array($result)) 
  { 
    echo $data['piece'] . ", ";
    echo $data['color'] . ", ";
    echo $data['x'] . ",";
    echo $data['y'] . ", ";
    echo $data['face'] . ", ";
    echo "<BR>,";
  }
mysql_close();
?>
</body>
</html>



