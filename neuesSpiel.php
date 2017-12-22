<?php include("einbindenSQL");

//muss noch eingefügt weden! 
$xyz_id = mysql_connect($ip,$benutzer,$password);
mysql_select_db($db, $xyz_id);

//Reihe hinten weiß
$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'wTurm'
          WHERE 'Feld' = 'a1'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'wPferd'
          WHERE 'Feld' = 'b1'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'wLäufer'
          WHERE 'Feld' = 'c1'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'wDame'
          WHERE 'Feld' = 'd1'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'wKönig'
          WHERE 'Feld' = 'e1'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'wLäufer'
          WHERE 'Feld' = 'f1'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'wPferd'
          WHERE 'Feld' = 'g1'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'wTurm'
          WHERE 'Feld' = 'h1'";
$result = mysql_query($query);

// Bauernreihe weiß

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'Bauer'
          WHERE 'Feld' = 'a2'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'Bauer'
          WHERE 'Feld' = 'b2'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'Bauer'
          WHERE 'Feld' = 'c2'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'Bauer'
          WHERE 'Feld' = 'd2'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'Bauer'
          WHERE 'Feld' = 'e2'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'Bauer'
          WHERE 'Feld' = 'f2'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'Bauer'
          WHERE 'Feld' = 'g2'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'Bauer'
          WHERE 'Feld' = 'h2'";
$result = mysql_query($query);

//Leere reihe 1

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'a3'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'b3'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'c3'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'd3'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'e3'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'f3'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'g3'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'h3'";
$result = mysql_query($query);

//Leere reihe 2

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'a4'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'b4'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'c4'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'd4'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'e4'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'f4'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'g4'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'h4'";
$result = mysql_query($query);

//Leere reihe 3

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'a5'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'b5'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'c5'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'd5'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'e5'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'f5'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'g5'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'h5'";
$result = mysql_query($query);

//Leere reihe 4

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'a6'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'b6'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'c6'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'd6'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'e6'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'f6'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'g6'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = ''
          WHERE 'Feld' = 'h6'";
$result = mysql_query($query);

//Reihe Bauern schwarz

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'Bauer'
          WHERE 'Feld' = 'a7'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'Bauer'
          WHERE 'Feld' = 'b7'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'Bauer'
          WHERE 'Feld' = 'c7'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'Bauer'
          WHERE 'Feld' = 'd7'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'Bauer'
          WHERE 'Feld' = 'e7'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'Bauer'
          WHERE 'Feld' = 'f7'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'Bauer'
          WHERE 'Feld' = 'g7'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'Bauer'
          WHERE 'Feld' = 'h7'";
$result = mysql_query($query);

//Reihe hinten schwarz

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'sTurm'
          WHERE 'Feld' = 'a8'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'sPferd'
          WHERE 'Feld' = 'b8'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'sLäufer'
          WHERE 'Feld' = 'c8'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'sDame'
          WHERE 'Feld' = 'd8'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'sKönig'
          WHERE 'Feld' = 'e8'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'sLäufer'
          WHERE 'Feld' = 'f8'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'sPferd'
          WHERE 'Feld' = 'g8'";
$result = mysql_query($query);

$query = "UPDATE 'Schachbrett'
          SET 'figure' = 'sTurm'
          WHERE 'Feld' = 'h8'";
$result = mysql_query($query);

mysql_close($xyz_id);
?>
