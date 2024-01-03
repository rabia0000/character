<!-- exo 1 -->

<?php 
class Character {
    
    private $health;
    private $rage;




//  exo 2

// public function definirHealthRage ($value1, $value2){
//     // methode (fonction) permet d'acceder ET définir a l'attribut private $heath et de l'afficher
//     echo $this-> health = $value1;
//     echo $this -> rage; = $value2;
// }

public function getHeath(){
    return $this -> health;
}
public function getRage(){
    return $this -> rage;
}

// exo 3 

public function __construct($nom) {
    $this -> nom = $nom;
    $this -> health = $health;
    $this -> rage = $rage; 
}
$Character1 = new Character("mario", 100, 50)
}
?>