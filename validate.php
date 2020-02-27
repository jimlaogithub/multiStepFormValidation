<?php
    /* CHECKS CONTACTS CONTAINS JUST NUMBERS AND STARTS WITH +63 */
    /* function checkContact($data = null){
        return (preg_match('/(\+63)/',$data) && preg_match('/^[\+\d]{0,13}$/',$data)) ? true : false ;
    } */

    /* function checkFirstAndLastName($data){
        return (preg_match('/^[\w]{2,}$/',$data)) ? true : false;
    } */
    /* FUNCTION TO CHECK IF INPUTS STARTS WITH NUMBERS OR SYMBOLS and also tags*/
    /* function checkStartingInput($data = null){
        return (preg_match('/^[^0-9^\.!@#$%^&*()_\-\+=:"??><,]{1}+[a-zA-z@-\s\.]+$/',$data) ) ? true : false;
    }
    function sY($data = null){
        return (preg_match('/^[\d\-]{9}+$/',$data)) ? true : false;
    }



    /* FUNCTION TO VALIDATE EMAIL */
    /* function properEmail($data = null){
        return(preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/',$data)) ? true : false;
    }

    /* CHECKS CONTACTS CONTAINS JUST NUMBERS AND STARTS WITH +63 */
    /* function checkContact($data ){
        return (is_numeric(substr($data,1,13)) && substr($data, 0, 3) == "+63" && strlen($data)==13) ? true : false ;
    } */

    /* FUNCTION TO CHECK IF INPUTS STARTS WITH NUMBERS OR SYMBOLS and also tags*/
    /* function checkStartingInput($data){
        return (preg_match()) ? true : false;
    }
  */

    /* ------------------------------------------- */

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