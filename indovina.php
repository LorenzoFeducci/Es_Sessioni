
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $numeroScelto = $_GET["numero"];
        $numeroCasuale = rand(1, 20);

        if(!isset($_SESSION["giocate"])){
            $_SESSION["giocate"] = 0;
            $_SESSION["indovinati"] = 0;
        }

        if($numeroScelto == $numeroCasuale){
            $_SESSION["indovinati"]++;
            $_SESSION["giocate"]++;
        } else {
            $_SESSION["giocate"]++;
        }

        echo "<table>";
            echo "<tr>";
                echo "<th>Numero Scelto</th>";
                echo "<th>Numero Casuale</th>";
                echo "<th>Partite Effettuate</th>";
                echo "<th>Numeri indovinati</th>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>$numeroScelto</td>";
                echo "<td>$numeroCasuale</td>";
                echo "<td>" . $_SESSION["giocate"] . "</td>";
                echo "<td>" . $_SESSION["indovinati"] . "</td>";
            echo "</tr>";
        echo "<table>";

        echo "<br>";

        echo "<a href='./scelta.html'>Pagina HTML</a>";
    ?>
</body>
</html>