<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admindonordetails.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Miriam+Libre:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="sidebar">
        <div id="head">
            <img src="img/admin.png">
            <h3>ADMIN</h3>
        </div>
        <a href="admindonordetails.php">
            <div class="navbtn">
                <h1><i class="fas fa-info-circle"></i>
                </h1>
                <h5>DONOR DETAILS</h5>
            </div>
        </a>
        <a href="adminsearch.php">
            <div class="navbtn">
                <h1><i class="fas fa-search"></i></h1>
                <h5>SEARCH DONOR</h5>
            </div>
        </a>
        <a href="adminadd.php">
            <div class="navbtn">
                <h1><i class="fas fa-user-plus"></i></h1>
                <h5>ADD DONOR</h5>
            </div>
        </a>
        <a href="admindelete.php">
            <div class="navbtn">
                <h1><i class="fas fa-user-times"></i></h1>
                <h5>DELETE DONOR</h5>
            </div>
        </a>
        <a href="admin.html">
            <div class="navbtn">
                <h1><i class="fas fa-sign-out-alt"></i></h1>
                <h5>LOGOUT</h5>
            </div>
        </a>
    </div>

    <!-- Page content -->
    <div class="content">
    <div class="container">
        <div class="col-lg-12">
          <h1 id="tablehead">DONOR DETAILS</h1>
 <?php
$conn = mysqli_connect("localhost","root","","bloodbank_db");
$sel = "select * from blooddonar";
$res = mysqli_query($conn,$sel);?>
            <table id="datatable" align="center">
                <thead>
                    <tr>
                        <th>NAME</th>
                        <th>AGE</th>
                        <th>EMAIL</th>
                        <th>MOBILE NUMBER</th>
                        <th>GENDER</th>
                        <th>BLOOD TYPE</th>
                    </tr>
                </thead>
                <?php
if($res)
{
    foreach($res as $row)
    {
        ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['age'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['phone'];?></td>
                        <td><?php echo $row['gender'];?></td>
                        <td><?php echo $row['bloodtype'];?></td>
                    </tr>
                </tbody>
                <?php
    }
}
else{
    echo "no record found";
}
?>
 </table>
    </div>
</body>

</html>