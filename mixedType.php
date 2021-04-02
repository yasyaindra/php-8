<?php


function checkingType(mixed $name):mixed {
    if(is_array($name)){
        return $name  ;
    } else if(is_int($name)) {
        return $name;
    } else if(is_string($name)){
        return $name;
    }
}

echo checkingType([1,3,true,'Indra'])[1];