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

?>