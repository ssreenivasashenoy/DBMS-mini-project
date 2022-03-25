<!-- php -->
<?php

session_start();

if(!isset($_SESSION['admin']))
  header("location:login.php");

?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN-DASHBOARD</title>

  <!-- favicon -->
  <link rel="icon" type="image/x-icon" href="Images/main_logo.png">

  <!-- External CSS link-->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="dash.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Font awesome CSS -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <!-- Font awesome JS -->
  <script src="https://kit.fontawesome.com/888b14ec26.js" crossorigin="anonymous"></script>

</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav_bar">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php#mem"><img src="Images/main_logo.png" alt="" id="logo"></a>
      <span><a class="navbar-name" href="index.php">SP COLLEGE OF ENGINEERING</a></span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-angle-down"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php"><i class="fas fa-home" style="color: grey;  width: auto; "></i>
              HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php#mem"><i class="fas fa-sign-in-alt" style="color: grey; width: auto; "></i>
              LOGIN / SIGN UP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="branch.php#mem"><i class="fas fa-code-branch" style="color: grey; width: auto; "></i>
              BRANCH</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="moreinfo.php#mem"><i class="fas fa-info" style="color: grey; width: auto; "></i> MORE
              INFO</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Content -->
  <section id=content>
    <div class="container">
      <div class="row">
        <div class="col-md-4 mx-auto" id="pic">
          <img src="Images/femaleteacher.png" class="img--fluid preimg  " alt="design1">
        </div>
        <div class="col-md-4 con text-center">
          <p class="branding">SP COLLEGE OF ENGINEERING</p>
          <p class="moto">Learn to Achieve!</p>
        </div>
        <div class="col-md-4 mx-auto" id="pic">
          <img src="Images/maleteacher.png" class="img--fluid preimg" alt="design1">
        </div>
      </div>
    </div>
    <img src="Images/wave1.png" alt="design1" class="btmimg">
  </section>

  <!-- top -->
  <br>
  <br>
  <div class="container">
    <div class="row">
      <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-addstaff-tab" data-bs-toggle="pill" data-bs-target="#pills-addstaff"
            type="button" role="tab" aria-controls="pills-addstaff" aria-selected="true">ADD STAFF</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-removestaff-tab" data-bs-toggle="pill" data-bs-target="#pills-removestaff"
            type="button" role="tab" aria-controls="pills-removestaff" aria-selected="false">REMOVE STAFF</button>
        </li>
</ul>
        <hr>
        <!-- addstaff -->
        <div class="tab-pane fade show active" id="pills-addstaff" role="tabpanel" aria-labelledby="pills-addstaff-tab">
          <br>
          <form action="staffadd.php" method="post">
          <div class="row g-3">

            <div class="col-sm-3">
              <input type="text" class="form-control" style="background:#ccffff;" autocomplete="off" placeholder="Name" name="staffname" aria-label="staffname">
            </div>
            <div class="col-sm-2">
              <input type="text" class="form-control" style="background:#ccffff;" autocomplete="off" placeholder="ID" name="staffid" aria-label="staffid">
            </div>
            <div class="col-sm-3">
              <input type="text" class="form-control" style="background:#ccffff;" autocomplete="off" placeholder="Address" name="staffaddress" aria-label="staffaddress">
            </div>
            <div class="col-auto">
              <label class="visually-hidden" for="autoSizingSelect">Preference</label>
              <select class="form-select" id="autoSizingSelect" style="background:#ccffff;" name="staffbranch" >
                <option selected>Branch [click to select]</option>
                <option value="1">Computer Science</option>
                <option value="2">Electronics and Communication</option>
                <option value="3">Information and Science</option>
                <option value="4">Mechanical</option>
              </select>
              
            </div>
            <div class="col-auto">
              <button type="submit" class="btn"
                style="border:1px solid white; background:#0099e6; color:white;">ADD</button>
            </div>
            </form>
          </div>
        </div>
        

        <!-- removestaff -->
        <div class="tab-pane fade" id="pills-removestaff" role="tabpanel" aria-labelledby="pills-removestaff-tab">
          <form action="staffremove.php" method="get">
          <center>
            <div class="d-flex" style="width:40%">
              <input class="form-control me-2" type="search" style="background:#ccebff;" autocomplete="off" name="removestaff" placeholder="Enter the ID to be removed" aria-label="ID">
              <button class="btn" style="border:1px solid white; background:#0099e6; color:white;"
                type="submit">REMOVE</button>
            </div>
          </center>
          </form>
          <br>
        </div>
    </div>
  </div>

 <!-- logout -->
  </center>
    <br>
    <center>
    <button type="button" class="btn" style=" background:#0099e6;"><a href="logout.php" style="text-decoration: none;
    color: white;"><i class="fas fa-sign-out-alt"></i> LOGOUT</a></button>
    </center>
    <br>
    <br>

  <!-- Footer -->
  <section id="footer">
    <img src="Images/wave2.png" alt="design2" class="footimg">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footbox " style="padding-left: 125px;">
          <p><b>CONTACT US</b></p>
          <p><i class="fas fa-map-marked-alt fb"></i> Mangalore</p>
          <p><i class="fas fa-phone-square-alt fb"></i> 1234567890</p>
          <p><i class="fas fa-envelope-square fb"></i> spce@gmail.com</p>
        </div>
        <div class="col-md-4 footbox mid " style="padding-left: 125px;">
          <img src="Images/graduated.png" alt="graduate" id="graduate">
          <p id="name">SP COLLEGE OF ENGINEERING</p>
        </div>
        <div class="col-md-4 footbox " style="padding-left: 125px;">
          <ul class="fl">
            <li class="fi">
              <a href="index.php"><i class="far fa-arrow-alt-circle-right"></i>HOME</a>
            </li>
            <li class="fi">
              <a href="login.php#mem"><i class="far fa-arrow-alt-circle-right"></i>LOGIN/SIGN UP</a>
            </li>
            <li class="fi">
              <a href="branch.php#mem"><i class="far fa-arrow-alt-circle-right"></i>BRANCH</a>
            </li>
            <li class="fi">
              <a href="moreinfo.php#mem"><i class="far fa-arrow-alt-circle-right"></i>MORE INFO</a>
            </li>
          </ul>
        </div>
      </div>
      <hr>
      <p class="copyright">© 2020-2021 <i class="fas fa-database"></i> DBMS Mini Project <i
          class="fas fa-laptop-code"></i> Made by SP group</p>
    </div>
  </section>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Smooth scroll JS -->
  <script src="smooth-scroll.js"></script>
  <script>
    var scroll = new SmoothScroll('a[href*="#"]');
  </script>

</body>

</html>