<?php
   // validates the data type of the file
   function checkType($type){

    $allowed = array('jpg', 'jpeg', 'png');
    $fileExt = explode('/', $type);
    $fileExt = strtolower(end($fileExt));
    return in_array($fileExt, $allowed) ? true : false ;

    }

    function checkSize($size){
        return ($size <= 1000000) ? true : false;
    }

    function checkIfFileExist($file){
        return (!file_exists($file)) ? true : false;
    }

    function moveFile($file,$targetDir){
        return  move_uploaded_file($file,$targetDir);
    }

    function checkInput($data){
        $regex = '/^[^\W]$/';  //list of now word 
        return preg_match($regex,substr($data,0,1)) ? true : false;
    }

    function checkLenght($data){
        $str = trim($data);
        return ($str < 2) ? true : false ;
    }

    function checkContact($data){
        $regex = '/\+63/';
        $rege = '/[\d]+/';
        return (preg_match($regex,$data) && preg_match($rege,$data) && strlen($data) == 13) ? true : false ;
    }

    function sY($data){
        return (preg_match('/^[\d\-]{9}+$/',$data)) ? true : false;
    }
    
    function properEmail($data){
        return(preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/',$data)) ? true : false;
    }
?>