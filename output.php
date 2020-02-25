<?php
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

    echo "Name:",$lastname,$firstname,$middlename,"<br>";
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
    echo "email:",$email,"<br>";

?>