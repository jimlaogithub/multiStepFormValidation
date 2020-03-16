<?php
    include_once('dbconnect.php');
    include_once('validate.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
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