<?php 
require "Character.php"
// Crée une class héritant de la class character 
// exo 4
class Hero extends Character {
    private $name;
    private $weaponName;
    private $weaponDamage;
    private $shieldName;
    private $shieldValue;


// exo 5

//methode d'acces au attribut avec la methode getters 

public function getName(){
    return $this -> name; 
}
public function getWeaponName(){
    return $this -> weaponName;
}
public function getWeaponDamage(){
    return $this -> weaponDamage;
}
public function getShiedName(){
    return $this -> shiedName;
}
public function getShiedDamage(){
    return $this -> shiedDamage;
}

//methode pour definir un attribut setters
public function setName(){
     $this -> name = $name; 
}
public function setWeaponName(){
    $this -> weaponName = $weaponName;
}
public function setWeaponDamage(){
    $this -> weaponDamage = $weaponDamage;
}
public function setShiedName(){
    $this -> shiedName = $shieldName;
}
public function setShiedDamage(){
    $this -> shiedDamage = $shiedDamage;
}


// exo 6 
public function __construct($name, $health, $rage, $weaponName, $weaponDamage, $shieldName, $shieldValue) {
    parent::__construct($health, $rage);
    
    $this-> name = $name
    $this-> getWeaponName = $weaponName;
    $this-> weaponDamage = $weaponDamage;
    $this-> shieldName = $shieldName;
    $this-> shielValue = $shieldValue; 

    echo "nouveau personnage $name avec un une arme : $weaponName degat de l'arme : $weaponDamage armure : $shieldName force de l'armure : $shieldValue";
}

}
?>