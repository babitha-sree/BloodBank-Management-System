<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="adminadd.css">
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
    <div class="spl">
              <form action="action2.php" method="POST">
                  <div class="form-group">
                      <label for="fullname">Fullname</label>
                      <div><input class="form-control" type="text" id="fullname" placeholder="Babitha Sree" name="fullname"></div>
                  </div>
                  <div class="form-group">
                    <label for="age">Age</label>
                    <div><input class="form-control" type="text" id="age" placeholder="20" name="age"></div>
                 </div>
                 <div class="form-group">
                    <label for="email">Email</label>
                    <div><input class="form-control" type="email" id="email" placeholder="example@hotmail.com" name="email"></div>
                 </div>
                 <div class="form-group">
                    <label for="Phone">Phone</label>
                    <div><input class="form-control" type="text" id="Phone" placeholder="9912345678" name="phone"></div>
                 </div>
                 <div class="form-group">
                    <label for="Address">Address</label>
                    <div><input class="form-control" type="text" id="Address" placeholder="hoby street,Delhi" name="address"></div>
                 </div>
                 <div class="form-group">
                    <label for="msg">Message</label>
                    <div ><input class="form-control" type="text" id="msg" placeholder="Leave a Message" name="msg"></div>
                 </div>
                 <div class="form-group">
                    <label for="gen">Gender</label>
                    <select class="form-control" id="gen" name="gender">
                        <option value="">---SELECT---</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                      </select>
                </div>
                 <div class="form-group">
                    <label for="blood">Blood type</label>
                    <select class="form-control id="blood" name="blood">
                        <option value="">---SELECT---</option>
                        <option value="A+">A<sup>+</sup></option>
                        <option value="B+">B<sup>+</sup></option>
                        <option value="AB+">AB<sup>+</sup></option>
                        <option value="O+">O<sup>+</sup></option>
                        <option value="A-">A<sup>-</sup></option>
                        <option value="B-">B<sup>-</sup></option>
                        <option value="AB-">AB<sup>-</sup></option>
                        <option value="O-">O<sup>-</sup></option>
                      </select>
                 </div>
                 <button class="btn btn-info btn-sm pos">SUBMIT</button>
              </form>
          </div>
    </div>
</body>

</html>