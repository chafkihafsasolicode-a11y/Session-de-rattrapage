<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST">
        <label>Number</label>
        <input type = "number" name = "num">
        <button type = "submit" name = "ok">ok</button>
    </form>
    <ul>


<?php

if(isset($_POST['ok']))
    {
        $nombre = $_POST['num'];
        $i = 1;
        if($nombre > 0)
        {
            while($i <= $nombre){
                if($nombre % $i == 0){
                    echo "<li>". $i . "</li>";
                }
                $i++;
            }
        }
        else
        {
            echo "entrer un nombre positif";
        }
    }
?>
</ul>
</body>
</html>