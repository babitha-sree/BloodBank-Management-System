<?php
$conn = mysqli_connect("localhost","root","","bloodbank_db");

$table = "CREATE TABLE blooddonar(
    name varchar(45),
    age  varchar(3),
    email varchar(50),
    phone varchar(10) PRIMARY KEY NOT NULL,
    address varchar(100),
    message varchar(150),
    gender varchar(10),
    bloodtype varchar(5)
)";
if(mysqli_query($conn,$table)){
    echo "Table created";
}else{
    echo "Error";
}

mysqli_close($conn);
?>