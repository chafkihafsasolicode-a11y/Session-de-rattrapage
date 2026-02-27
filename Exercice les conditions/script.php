<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="POST">
        <label>saisir une note:</label>
        <input type ="text" name="note">
        <button type="submit" name="ok" value="ok"></button>
</form>
<?php
if(isset ($_POST["ok"])){
    if(empty($note)){
        echo"note vide";
    }
    if($note>=10 ){
        echo"vous etre admis";   
    } else{
        echo"vous n'etes pas admis";
    }
}
?>
</body>
</html>