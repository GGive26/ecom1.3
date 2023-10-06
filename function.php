<?php 
function nameLengthIsValid($nameToValid){
    //minimum 2 maximum 10
    $length = strlen($nameToValid);
    $responses=[
        'isValid'=>true,
        'msg'=>''
    ];
    if ($length<2){
        $responses=[
            'isValid'=>false,
            'msg'=>'Nom trop court'
        ];
    }elseif($length>10){
        $responses=[
            'isValid'=>false,
            'msg'=>'Nom trop long'
        ];
    }
return $responses;    
}
function addSalt($nameToSalt){
    $salt = "unPeuDeSalt123!";
    $saltedName=$salt.$nameToSalt.$salt;

    return $saltedName;
}
function encodName($saltedName){
    $encodName= sha1($saltedName);
    return $encodName;
}

?>