<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <label>quantité</label>
    <input type="number" name="qte" placeholder="quantité">
    <label>prix</label>
    <input type="number" name="prix" placeholder="prix">

    <button type="submit" name="valide">valide</button>



    </form>


<?php

function calculerPrix($qte,$prix){
$total=$qte*$prix;
if($qte>=10){
    $total=$total-($total*0.1)
 return ' vous avez bénéfificié une réduction ' . $total ;
}
 return $total;

}



if(isset($_POST['valide'])){
    $qte=$_POST['qte'];
    $prix=$_POST['prix'];
    if(empty($qte) || empty($prix)){
        echo"champs vide";
    }
    elseif($qte<=0 || $prix<=0){
        echo"champs negative";
    }
    else{echo calculerprix($qte,$prix);
    }
}


?>

</body>
</html>