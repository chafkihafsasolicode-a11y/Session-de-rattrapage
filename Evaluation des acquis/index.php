<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>nom</label>
        <input type="text" name="nom" placeholder="nom">
        <label>prenom</label>
        <input type="text" name="prenom" placeholder="prenom">
        <label>age</label>
        <input type="text" name="age" placeholder="age">
        <button type="submit" name="ok">ok</button>

    </form>


  
    <?php

    if(isset($_POST['ok'])){

        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $age=$_POST["age"];

        if(empty($nom) || empty($prenom) || empty($age)){
            echo"les champs vides";
        }

        if(!numeric($age)){
            echo"entrer un nombre";
        }
        if($age<18){
            echo"age non valide";
        }


         echo " email: " .$nom .$prenom .$age . " @ofppt.ma "
        






    }
                                                      




    ?>























</body>
</html>