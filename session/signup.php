<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">

<label>email</label>
<input type="email" name="email">

<label>mot de passe</label>
<input type="password" name="password">

<label>Confirmation:</label>
<input type="password" name="confirmation">

<button type="submit" name="ok">ok</button>

</form>
    
</body>
</html>


<?php
$valide=true;

if(isset($_POST['ok'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmation=$_POST['confirmation'];

    if(empty($email) || empty($password) || empty($confirmation)){
        echo "Tous les champs sont obligatoires";
        $valide=false;
    }else{
        if(!str_ends_with($email,"@ofppt.ma")){
            echo "L'email doit se terminer par @ofppt.ma";
            $valide=false;
        }

        if(strlen($password) < 8){
            echo "Le mot de passe doit contenir au moins 8 caractères";
            $valide=false;
        }

        if(!preg_match("/[A-Z]/",$password)){
            echo "Le mot de passe doit contenir au moins une lettre majuscule";
            $valide=false;
        }

        if(!preg_match("/[0-9]/",$password)){
            echo "Le mot de passe doit contenir au moins un chiffre";
            $valide=false;
        }

        if($confirmation !== $password){
            echo "Les mots de passe ne correspondent pas";
            $valide=false;
        }
    }

    if($valide === true){
        session_start();
        $_SESSION['email'] = $email;
        header("location:welcome.php");
        exit;
    }
}
?>