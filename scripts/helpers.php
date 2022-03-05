<?php

/**
 * @param {mixed} $message - Message to add to returned json | false if no message
 * @return {string} - json to echo 
 */
function json_error($message): string{
    if($message){
        return "{\"status\":\"false\", \"message\":\"$message\"}";
    }else{
        return "{\"status\":\"false\"}";
    };
}

/**
 * @return {string} json to echo 
 */
function json_success(){
    return "{\"status\":\"true\"}";
}

function getGET(string $var){
    $value = null;
    if(isset($_GET[$var])){
        $value = sanitizeValue($_GET[$var]);
    }else{
        $value = false;
    };
    return $value;
}

function getPOST(string $var){
    $value = null;
    if(isset($_POST[$var])){
        $value = sanitizeValue($_POST[$var]);
    }else{
        $value = false;
    };
    return $value;
}

function sanitizeValue(string $var){
    $value = null;
    $value = filter_var($var, FILTER_UNSAFE_RAW);
    if($value){
        if(strlen($value) < 3){
			$value = false;
		};
    };
    return $value;
}
