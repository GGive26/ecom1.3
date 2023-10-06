<?php
require_once("function.php");
var_dump($_POST);

if($_POST){
    $name = $_POST['nom'];
    if(empty($name)){
        echo"<br>Nom vide";}
    else{
        echo"<br>Mon nom est : ".$name;
    }
    $nameLengthIsValid = nameLengthIsValid($_POST['nom']);
    echo'<br>';
    var_dump($nameLengthIsValid);
    if(!$nameLengthIsValid['isValid']){
        //on fait notre traitement 
    }
    }
    echo'<br>';
    $saltedName=addSalt($_POST['nom']);
    var_dump($saltedName);

?>
