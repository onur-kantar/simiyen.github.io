<?php

function site_url($url = false){

    return URL.'/'.$url;

}
function img_url($url = false){
    return URL.'/img/'.$url;

}

function public_url($url = false){

    return URL.'/public/'.$url;
    
}

function error(){
    global $error;
    return isset($error)?$error:false;
}

function success(){
    global $success;
    return isset($success)?$success:false;
}