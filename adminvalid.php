<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == '194g1a0512' && $password == 'Babitha'){
    include 'adminhome.html';
}
else{
    include 'admin.html';
}
?>