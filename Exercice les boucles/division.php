<?php
if(isset($_POST['OK'])){
    $nombre=$_POST['num'];
    if($nombre>0) {
    for( $i=1 ; $i <= $nombre  ; $i++)
    {
        if($nombre % $i == 0)
        {
            echo $i . "<br>";
        }
    }     
}
else{
    echo "entrer un nombre positif";
     }
}

?>

   

