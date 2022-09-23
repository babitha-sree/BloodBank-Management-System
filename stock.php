<!DOCTYPE html>
<html>

<head>
    <title>StockDetails</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stockpage.css">
    <link href="https://fonts.googleapis.com/css2?family=Miriam+Libre:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="landingpage.html"><i class="fas fa-heartbeat"></i> BloodBank</a>
            </div>
            <div class="container">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="Aboutus.html">AboutUs <i class="fas fa-address-card"></i></a></li>
                        <li><a href="Contactus.html">ContactUs <i class="fas fa-phone"></i></a></li>
                        <li><a href="bloodsearch.html">BloodSearch <i class="fas fa-search-plus"></i></a></li>
                        <li><a href="stock.php">StockDetails <i class="fas fa-box-open"></i></a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="Beadonar.php">Be a donor <i class="fas fa-hand-holding-medical"></i></a></li>
                        <li><a href="admin.html">Administrator <i class="fas fa-user-lock"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="col-lg-12">
          <h1>STOCK DETAILS</h1>
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
    </div>


</body>

</html>