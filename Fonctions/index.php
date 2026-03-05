<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="Post">

    <label>quantité</label>
    <input type="number" name="qte" placeholder="quantité">

    <label>prix</label>
    <input type="number" name="prix" placeholder="prix">

     <button type="submit" name="valide">valide</button>


    </form>



  <?php
  if(isset($_POST["valide"])){

    $qte=$_POST['qte'];
    $prix=$_POST['prix'];

if(empty($qte) || empty($prix)){
    echo "vide";
}
elseif($qte<=0 || $prix<=0){
    echo" non valide";
}else{
echo "total =" . calculerTotal($prix,$qte) ;
} }
function calculerTotal($prix,$qte){
    $total=$prix * $qte;
    $redution=10;
    $total=$total-($total * $reduction/100);
    return $total;
 }
  
   ?>

</body>
</html>


