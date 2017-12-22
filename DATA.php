<?php 
include("einbindenSQL.php");

$dbTableName = "schachbrett";

$$xyz_id = mysql_connect("IP?",$Benutzer,$password);
mysql_select_db($db,$$xyz_id);

$query ="CREATE table $dbTableName (id INT(10) NOT NULL PRIMARY KEY, feld VARCHAR(2) NOT NULL, FIGURE VARCHAR(20))";

$result = mysql_query("$db",$query);

$TableZug = "Zug";

$xyz_id = mysql_connect("IP?","$Benutzer","$password");
mysql_select_db($db,$$xyz_id);

$query = "CREATE table $dbTableName(id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY, zug VARCHAR(4) NOT NULL)";
$result = mysql_query("$db", "$query");

if ($neuesspiel = true){
    $query = "CREATE table $dbTableName(user_id int(50)NOT NULL PRIMARY KEY,farbe BOOLEAN(), spielnummer INT(1000) NOT NULL AUTO_INCREMENT)";
    $result = mysql_query("$db", "$query"); }?>