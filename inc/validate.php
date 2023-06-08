<?php

$errors = '' ;
$success ='' ;

function sanitiz($input) { 
    return trim (htmlspecialchars(htmlentities($input))) ;
}



function requiree($input) { 

    if(empty($input)) { 
        return true ; 
    
    }
    return false ;
}



function minChars($input,$num) { 

    if(strlen($input) < $num) { 
        return true ; 
    }

    return false ; 
}





function maxChars($input,$num) { 

    if(strlen($input) > $num) { 
        return true ; 
    }

    return false ; 
}


function filt($input) {

    if(!filter_var($input,FILTER_VALIDATE_EMAIL)) { 

        return false ;
    }

    return true ;
}


function redirect($input) { 
    return header("location:$input") ;
}