<?php

function generatePassword(int $length, bool $mixed){
    $password = "";
    $number = "0123456789";
    $alphabet = "abcdefghilmnopqrstuvz";
    if($mixed){
        for($i = 0; $i < $length; $i++){
            if(rand(0,1) == 0){
                $password .= $number[rand(0,9)];
            }else{
                $password .= $alphabet[rand(0,20)];
            };
        };
    }else{
       for($i = 0; $i < $length; $i++){
        $password .= $number[rand(0,9)];
        }; 
    }
    

    session_start();
    $_SESSION["password"][] = $password;
    header("Location: ./result.php");
    return $password;
}

?>