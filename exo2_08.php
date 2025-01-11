<?php

function my_order_class_name(...$obj) {
    $types = []; 
    
    
    foreach ($obj as $element) {
        if (is_object($element)) {
            $type = get_class($element);
        } else {
            $type = gettype($element);
        }
        if (!in_array($type, $types)) {
            $types[] = $type;
        }
    }
    
    
    $groups = [];
    foreach ($types as $type) {
        $length = strlen($type); 
        $groups[$length][] = $type; 
    }
    
   
    ksort($groups); 
    foreach ($groups as &$group) {
        sort($group); 
    }
    
    return array_values($groups);
}


class MyClass
{
}
$args = [
true,
76,
false,
12.5,
"Coucou !",
[1, 2, 3],
new MyClass(),
NULL
];
print_r(my_order_class_name(...$args));
