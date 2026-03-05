<?php
$students = [
    ["nom" => "Alami", "prenom" => "Ahmed" ,"notes" => [10.5, 18, 12]],
    ["nom" => "Bakkali", "prenom" => "Ali" ,"notes" => [12, 9, 7.5]],
    ["nom" => "Serraj", "prenom" => "Karima" ,"notes" => [8, 13, 15.5]]
];

$afficher="<table border ='1' >
    <tr>
    <th>nom</th>
    <th>prenom</th>
    <th>note1</th>
    <th>note2</th>
    <th>note3</th>
    <th>moyenne</th>
    </tr>";

    foreach($students as $student){
        $afficher.="<tr>
        <td>". $student['nom'] . "</td>
        <td>". $student['prenom'] . "</td>
                <td>note1</td>
                <td>note2</td>
                <td>note3</td>
                <td>moyenne</td>
             </tr>"
    }
?>