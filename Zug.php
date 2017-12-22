<?php  

include("einbindenSQL.php");

$zug = $_POST['zug'];
$zuvor =
$jetzt =


$xyz_id = mysql_connect($ip,$Benutzer,$password);
mysql_select_db($db,$$xyz_id);


$query ="SELECT FROM 'schachbrett'WHERE'feld' = '$zuvor'";
$result = mysql_query ($query);
        //WIE WEITER?!
    // if($result){
    //     $id =
    //     $FigureWurdeBewegt =
    // }

//wo die Figure hinbewegt wird
$query = "UPDATE `schachbrett` SET `Figure`='$FigureWurdeBewegt' WHERE `feld`='$jetzt'";
$result = mysql_query($query);


//wo die Figure war ist jetzt leer
$query ="UPDATE 'schachbrett'SET 'Figure'='' WHERE 'feld'='$zuvor'";
$result = mysql_query($query);

mysql_close($link_id);
?>