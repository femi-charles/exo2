<?php

function my_add_elem_map($key, $value, &$map) {
    if (is_array($map)){
        if (empty($key)){
         echo "You have to give good parameters \n";
        }else{
           $map[$key] = $value ;
           return $map ;
        }
    }else{
    echo "You have to give good parameters \n";
    }
}

function my_modify_elem_map ($key, $valu, &$map){
    if (is_array($map)){
        if(array_key_exists($key , $map)){
            $map [$key]= $valu;
            return $map;
        }else{
            echo "You have to give good parameters \n";
        }
    }else {
        echo "You have to give good parameters \n";
        
    }


}

function my_delete_elem_map($key, &$map){
    if (is_array($map)) {
        if (array_key_exists($key, $map)) {
            unset($map[$key]);
            return $map;
        }
    }
    echo "You have to give good parameters.\n";

}

function my_is_elem_valid($key, $value, &$map) {
    if (is_array($map)) {
        if (array_key_exists($key, $map)) {
            if ($map[$key] == $value) {
                return true;
            }
        }
    }
    echo "You have to give good parameters.\n";
    return false;
}
$arr = [];
$arr = my_add_elem_map( "eeee","baris", $arr);
$arr = my_add_elem_map("second", "toto", $arr);
$arr = my_add_elem_map("third", "life", $arr);
$arr = my_modify_elem_map("third", "42", $arr);
$arr = my_delete_elem_map("second", $arr);

var_dump($arr);
