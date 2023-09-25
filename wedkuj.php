<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Tabela z piwem</title>

    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap">

    



</head>

<body style="background-color:cadetblue; font-family: 'Croissant One', cursive; color:black;">
<b>
    </br> </br> </br>
    
    <?php

    $pon = 3;
    $nazwa = "'L%'";

$con = new mysqli("localhost","root","","wedkowanie");


$q = "SELECT * FROM ryby WHERE id > " . $pon . " AND nazwa LIKE " . $nazwa;

if($wynik=$con->query($q))
while($row=$wynik->fetch_array())
echo $row["id"] . ". " . $row["nazwa"] . " | " . $row["wystepowanie"] . " " . $row["styl_zycia"] . "</br>";
else
echo $con->errno . " " . $con->error;
?>
        
    </table>
</b>
</body>
</html>