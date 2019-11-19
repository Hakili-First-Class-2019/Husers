<?php
class connexion
{
    protected $pdo, $serveur, $utilisateur, $motDePase, $dataBase;
    public function _construct($serveur, $utilisateur, $motDepasse, $dataBase)
    {
        $this->serveur = $serveur; 
        $this->utilisateur= $utilisateur;
        $this->motDePasse= $motDepasse;
        $this->dataBase= $dataBase;
        $this->connexionBDD();
    }
protected function connexionBDD() 
{
    $this->pdo = new PDO('mysql:host='.$this-)
    >serveur.';dbname='.$this->dataBase, $this->utilisateur, $this->motDePasse);
}
public function _sleep()
{
    return array('localhost', 'root', '', 'husers');
    }
public function _wakeup()
{
    $this->connexionBDD();
  }   
}
?>



