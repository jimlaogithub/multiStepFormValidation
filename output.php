<?php

    include_once('validate.php');

    $lastname = $_POST['lName'];
    $firstname = $_POST['fName'];
    $middlename = $_POST['mName'];
    $address = $_POST['address'];
    $DOB = $_POST['DOB'];
    $POB = $_POST['POB'];
    $sex = $_POST['gender'];
    $guardian = $_POST['guardian'];
    $contact = $_POST['contact'];
    $status = $_POST['status'];
    $year = $_POST['yearLevel'];
    $course = $_POST['course'];
    $SY = $_POST['SY'];
    $email = $_POST['email'];

    /* echo "Name:",$lastname,$firstname,$middlename,"<br>";
    echo "address:",$address,"<br>";
    echo "birthday:",$DOB,"<br>";
    echo "place of birth:",$POB,"<br>";
    echo "gender:",$sex,"<br>";
    echo "gaurdian:",$guardian,"<br>";
    echo "contact:",$contact,"<br>";
    echo "civil status:",$status,"<br>";
    echo "year level:",$year,"<br>";
    echo "course:",$course,"<br>";
    echo "school year:",$SY,"<br>";
    echo "email:",$email,"<br>"; */
    
    /* check if last name  is more than 2 character
        and does not start in special character */
        if(checkInput($lastname) && checkLenght($lastname)){
            
            echo "Last Name good <br>";
            
        }else{
            
            echo "Last Name bad <br>";
            
        }
    /* check if first name is more than 2 character 
        and does not starts in a special char- */
        if(checkInput($firstname) && checkLenght($firstname)){
            
            echo "First name good <br>";
            
        }else{
            
            echo "First name bad <br>";
            
        }

    /* check if middle name does not contain a  non word */

        if(checkInput($middlename)){

            echo "Middle good <br>";
            
        }else{
            echo "Middle bad <br>";
            
    }

    /* check if address starts with special with special character */
        if(checkInput($address)){
                
            echo "Address good <br>";
            
        }else{
            
            echo "Address bad <br>";
            
        }

    /* check if place of birth starts with special with special character */
    if(checkInput($POB)){
                
        echo "Place of Birth good <br>";
        
    }else{
        
        echo "Place of Birth bad <br>";
        
    }

    /* check if status starts with special with special character */
    if(checkInput($status)){
                
        echo "Civil Status good <br>";
        
    }else{
        
        echo "Civil Status bad <br>";
    
    }

    /* check if guardain starts with special with special character */
    if(checkInput($guardian)){
                
        echo "Guardian good <br>";
        
    }else{
        
        echo "Guardian bad <br>";
        
    }
    /* CHECK CONTACT */
    if(checkContact($contact)){
                
        echo "Contact good <br>";
        
    }else{
        
        echo "Contact bad <br>";
        
    }

    /* CHECK SY */
    if(Sy($SY)){
                
        echo "School Year good <br>";
        
    }else{
        
        echo "School Year bad <br>";
        
    }

    /* CHECK Email */
    if(properEmail($email)){
                
        echo "Email good <br>";
        
    }else{
        
        echo "Email bad <br>";
        
    }


?>