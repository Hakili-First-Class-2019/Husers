<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=husers', 'root', '');
    
} catch (PDOException $e) {
   echo "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
class utilisateur 
{
  public function create($nom,$prenoms,$num,$mail,$passe)
  {
       
  }  
}
?>