<?php
    include_once('dbconnect.php');
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
    $file = $_FILES['file'];

    $dir = "uploads/";

    if($conn){
        echo "connected <br>";
    }
    
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


    /* file validation */
    if(checkType($file['type'])){
        if(checkSize($file['size'])){
            $targetDir = $dir.basename($file['name']);
            if(checkIfFileExist($targetDir)){
               if(moveFile($file['tmp_name'],$targetDir)){
                echo "[{$file['name']}] succesful <br>";
               /*  echo '
                <div class="col-md-3">
                    <img src="'.$dir . '/' . $file['name'].'" alt="..." style="width:250px; height:auto;">
                </div>'; */
               }else{
                   echo "error upload";
               }
            }else{
                echo "[{$file['name']}] file exist <br>";
            }
        }else{
            echo "[{$file['name']}] file To Large <br>";
        }
    }else{
        echo "[{$file['name']}] this file type is not allowed <br>";
    }


?>