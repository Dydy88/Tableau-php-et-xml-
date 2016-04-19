

<!DOCTYPE html>






<html>
    <head><title>Liste Simploniens</title></head>
    <table border=3px> 


 <th> Nom      </th>
 <th> Prenom   </th>
 <th> Date de Naissance </th>


        <?php
        $fichier = 'classe-simploniens.xml';
$xml = simplexml_load_file($fichier);




foreach($xml as $personne){
        
     echo "<tr><td>".$personne->nom.'</td><td>'.$personne->prenom.'</td><td>'.$personne->date_naissance.'</tr></td>'; 

}
?>
</table>
    </body>
</html>


