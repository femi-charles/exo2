<?php

function my_password_hash($password) {
    
    $salt = uniqid();  
    $hash = md5($password . $salt);
    return array("hash" => $hash, "salt" => $salt);
}

function my_password_verify($password, $salt, $hash) {
   
    $hash_verify = md5($password . $salt);
    return $hash_verify == $hash;
}

$arr = my_password_hash("toto");
var_dump($arr);