<?php  include("einbindenSQL.php");?>
<?php 

$xyz_id = mysql_connect($ip,$Benutzer,$password);
mysql_select_db($db,$$xyz_id);

//weiße hintere Reihe
    $query = "INSERT INTO Schachbrett VALUES(null,'a1', 'wTurm')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'b1', 'wPferd')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'c1', 'wLäufer')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'d1', 'wDame')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'e1', 'wKönig')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'f1', 'wLäufer')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'g1', 'wPferd')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'h1', 'wTurm')";
    $result = mysql_query($query);


//weiße Bauern
    $query = "INSERT INTO Schachbrett VALUES(null,'a2', 'wBauer')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'b2', 'wBauer')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'c2', 'wBauer')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'d2', 'wBauer')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'e2', 'wBauer')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'f2', 'wBauer')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'g2', 'wBauer')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'h2', 'wBauer')";
    $result = mysql_query($query);

//4 Leere Reihen
    //1te Reihe
        $query = "INSERT INTO Schachbrett VALUES(null,'a3', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'b3', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'c3', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'d3', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'e3', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'f3', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'g3', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'h3', '')";
        $result = mysql_query($query);

    //2te Reihe
        $query = "INSERT INTO Schachbrett VALUES(null,'a4', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'b4', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'c4', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'d4', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'e4', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'f4', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'g4', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'h4', '')";
        $result = mysql_query($query);

    //3te Reihe
        $query = "INSERT INTO Schachbrett VALUES(null,'a5', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'b5', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'c5', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'d5', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'e5', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'f5', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'g5', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'h5', '')";
        $result = mysql_query($query);

    //4te Reihe    
        $query = "INSERT INTO Schachbrett VALUES(null,'a6', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'b6', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'c6', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'d6', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'e6', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'f6', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'g6', '')";
        $result = mysql_query($query);

        $query = "INSERT INTO Schachbrett VALUES(null,'h6', '')";
        $result = mysql_query($query);


//schwarze Bauern
    $query = "INSERT INTO Schachbrett VALUES(null,'a7', 'wBauer')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'b7', 'wBauer')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'c7', 'wBauer')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'d7', 'wBauer')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'e7', 'wBauer')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'f7', 'wBauer')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'g7', 'wBauer')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'h7', 'wBauer')";
    $result = mysql_query($query);

//schwarze hintere Reihe
    $query = "INSERT INTO Schachbrett VALUES(null,'a8', 'sTurm')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'b8', 'sPferd')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'c8', 'sLäufer')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'d8', 'sDame')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'e8', 'sKönig')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'f8', 'sLäufer')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'g8', 'sPferd')";
    $result = mysql_query($query);

    $query = "INSERT INTO Schachbrett VALUES(null,'h8', 'sTurm')";
    $result = mysql_query($query);
?>