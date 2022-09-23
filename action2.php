<?php
$nameErr = $ageErr = $emailErr = $phoneErr = $genderErr = $bloodErr = "";
$name = $age = $email = $phone = $address = $msg = $gender = $blood = "";
$nameb = $ageb = $emailb= $phoneb = $addressb = $msgb = $genderb = $bloodb = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($_POST['fullname'])){
        $nameErr = '*Name is Required';
        $nameb = false;
    }else{
        $name = test_input($_POST['fullname']);
        $nameb = true;
    }
    if(empty($_POST['age'])){
        $ageErr = '*Age is Required';
        $ageb = false;
    }else{
        $age = test_input($_POST['age']);
        $ageb = true;
    }
    if(empty($_POST['email'])){
        $emailErr = '*Email is Required';
        $emailb = false;
    }else{
        $email = test_input($_POST["email"]);
        $emailb = true;
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $emailErr = "*Invalid email format";
           $emailb = false; 
        }
    }
    if(empty($_POST['phone'])){
        $phoneErr = '*Phone number is empty';
        $phoneb = false;
    }else{
        $phone = test_input($_POST['phone']);
        $phoneb = true;
    }
    if(empty($_POST['gender'])){
        $genderErr = '*Select One from options';
        $genderb = false;
    }else{
        $gender = test_input($_POST['gender']);
        $genderb = true;
    }
    if(empty($_POST['blood'])){
        $bloodErr = '*Boold type is Mandatory';
        $bloodb = false;
    }else{
        $blood = test_input($_POST['blood']);
        $bloodb = true;
    }
    if(empty($_POST['address'])){
        $address="";
        $addressb = true;
    }else{
        $address = test_input($_POST['address']);
        $addressb = true;
    }
    if(empty($_POST['msg'])){
        $msg = "";
        $msgb = true;
    }else{
        $msg = test_input($_POST['msg']);
        $msgb = true;
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }


if($nameb && $ageb && $emailb && $phoneb && $addressb && $msgb && $genderb && $bloodb == true){
  $conn = mysqli_connect("localhost","root","","bloodbank_db");
  $data = "INSERT INTO blooddonar values('$name' , '$age' , '$email' , '$phone' , '$address' , '$msg' , '$gender' , '$blood')"; 
  mysqli_query($conn,$data); 
  include 'adminadd.php';
}else{
include 'adminadd.php';
}

?>
