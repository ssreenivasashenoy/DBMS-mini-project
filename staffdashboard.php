<?php
include_once 'config.php';
session_start();
if(!isset($_SESSION['teacher']))
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
  <title>STAFF-DASHBOARD</title>

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
  <br>
    <center>
    <button type="button" class="btn" style=" background:#0099e6;"><a href="logout.php" style="text-decoration: none;
    color: white;"><i class="fas fa-sign-out-alt"></i> LOGOUT</a></button>
    </center>
    <br>

  
  <!-- top -->
  <br>
  <br>
  <div class="container">
    <div class="row">
      <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-showstudent-tab" data-bs-toggle="pill"
            data-bs-target="#pills-showstudent" type="button" role="tab" aria-controls="pills-showstudent"
            aria-selected="true">SHOW STUDENT</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-addstudent-tab" data-bs-toggle="pill" data-bs-target="#pills-addstudent"
            type="button" role="tab" aria-controls="pills-addstudent" aria-selected="false">ADD STUDENT</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-removestudent-tab" data-bs-toggle="pill"
            data-bs-target="#pills-removestudent" type="button" role="tab" aria-controls="pills-removestudent"
            aria-selected="false">REMOVE STUDENT</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-attendance-tab" data-bs-toggle="pill" data-bs-target="#pills-attendance"
            type="button" role="tab" aria-controls="pills-attendance" aria-selected="false">ATTENDANCE</button>
        </li>
      </ul>
<hr>

      <!-- showstudent -->
      <div class="tab-content" id="pills-tabContent">
        
        <div class="tab-pane fade show active" id="pills-showstudent" role="tabpanel"
          aria-labelledby="pills-showstudent-tab">
           <br>

           <!-- exp -->
           <div class="d-flex align-items-start">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-cs-tab" data-bs-toggle="pill" data-bs-target="#v-pills-cs" type="button" role="tab" aria-controls="v-pills-cs" aria-selected="true">COMPUTER SCIENCE</button>
    <button class="nav-link" id="v-pills-ec-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ec" type="button" role="tab" aria-controls="v-pills-ec" aria-selected="false">ELECTRONICS AND COMMUNICATION</button>
    <button class="nav-link" id="v-pills-is-tab" data-bs-toggle="pill" data-bs-target="#v-pills-is" type="button" role="tab" aria-controls="v-pills-is" aria-selected="false">INFORMATION AND SCIENCE</button>
    <button class="nav-link" id="v-pills-me-tab" data-bs-toggle="pill" data-bs-target="#v-pills-me" type="button" role="tab" aria-controls="v-pills-me" aria-selected="false">MECHANICAL</button>
  </div>
  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-cs" role="tabpanel" aria-labelledby="v-pills-cs-tab">
     
    <?php 
      $query = "SELECT S_ID,S_NAME FROM `student` where B_ID = 1;";
      $res = mysqli_query($con,$query) or die("Query Failed");
      while($row = mysqli_fetch_assoc($res)){
        echo '
        <div class="input-group">  
          <span class="input-group-text" style="width:850px; background:#ccffff;">'.$row['S_NAME'].'</span><pre> </pre>
          
          <form class="button-form" action="attendance.php" method="post"><input type="hidden" name = "id" value="'.$row['S_ID'].'">
          <button class="btn btn-success" type="submit"><i class="fas fa-check"></i> P</button>&nbsp;&nbsp;</form>
            <form class="button-form" action="leave.php" method="post"><input type="hidden" name = "id" value="'.$row['S_ID'].'">
            <button class="btn btn-danger" type="submit"><i class="fas fa-times"></i> A</button></form>
    </div><br>';
      }
    ?>
    </div>


    <div class="tab-pane fade" id="v-pills-ec" role="tabpanel" aria-labelledby="v-pills-ec-tab">
    <?php 
      $query = "SELECT S_ID,S_NAME FROM `student` where B_ID = 2;";
      $res = mysqli_query($con,$query) or die("Query Failed");
      while($row = mysqli_fetch_assoc($res)){
        echo '
        <div class="input-group">  
          <span class="input-group-text" style="width:850px; background:#ccffff;">'.$row['S_NAME'].'</span><pre> </pre>
          
          <form class="button-form" action="attendance.php" method="post"><input type="hidden" name = "id" value="'.$row['S_ID'].'">
          <button class="btn btn-success" type="submit"><i class="fas fa-check"></i> P</button>&nbsp;&nbsp;</form>
            <form class="button-form" action="leave.php" method="post"><input type="hidden" name = "id" value="'.$row['S_ID'].'">
            <button class="btn btn-danger" type="submit"><i class="fas fa-times"></i> A</button></form>
    </div><br>';
      }
    ?>
    </div>


    <div class="tab-pane fade" id="v-pills-is" role="tabpanel" aria-labelledby="v-pills-is-tab">
    <?php 
      $query = "SELECT S_ID,S_NAME FROM `student` where B_ID = 3;";
      $res = mysqli_query($con,$query) or die("Query Failed");
      while($row = mysqli_fetch_assoc($res)){
        echo '
        <div class="input-group">  
          <span class="input-group-text" style="width:850px; background:#ccffff;">'.$row['S_NAME'].'</span><pre> </pre>
          
          <form class="button-form" action="attendance.php" method="post"><input type="hidden" name = "id" value="'.$row['S_ID'].'">
          <button class="btn btn-success" type="submit"><i class="fas fa-check"></i> P</button>&nbsp;&nbsp;</form>
            <form class="button-form" action="leave.php" method="post"><input type="hidden" name = "id" value="'.$row['S_ID'].'">
            <button class="btn btn-danger" type="submit"><i class="fas fa-times"></i> A</button></form>
    </div><br>';
      }
    ?>
    </div>
    <div class="tab-pane fade" id="v-pills-me" role="tabpanel" aria-labelledby="v-pills-me-tab">
    <?php 
      $query = "SELECT S_ID,S_NAME FROM `student` where B_ID = 4;";
      $res = mysqli_query($con,$query) or die("Query Failed");
      while($row = mysqli_fetch_assoc($res)){
        echo '
        <div class="input-group">  
          <span class="input-group-text" style="width:850px; background:#ccffff;">'.$row['S_NAME'].'</span><pre> </pre>
          
          <form class="button-form" action="attendance.php" method="post"><input type="hidden" name = "id" value="'.$row['S_ID'].'">
          <button class="btn btn-success" type="submit"><i class="fas fa-check"></i> P</button>&nbsp;&nbsp;</form>
            <form class="button-form" action="leave.php" method="post"><input type="hidden" name = "id" value="'.$row['S_ID'].'">
            <button class="btn btn-danger" type="submit"><i class="fas fa-times"></i> A</button></form>
    </div><br>';
      }
    ?>
    </div>
    
          </div>
</div>
          
        </div> 
        <!-- addstudent -->
        <div class="tab-pane fade" id="pills-addstudent" role="tabpanel" aria-labelledby="pills-addstudent-tab">
          <form action="studentadd.php" method="post">
        <br>
        <div class="row g-3">
          
  <div class="col-sm-3">
    <input type="text" class="form-control" style="background:#ccffff;" autocomplete="off" placeholder="Name" name="studentname"  aria-label="studentname">
  </div> 
  <div class="col-sm-2">
    <input type="text" class="form-control" style="background:#ccffff;" autocomplete="off" placeholder="ID" name="studentid" aria-label="studentid">
  </div>
  <div class="col-sm-3">
    <input type="text" class="form-control" style="background:#ccffff;" autocomplete="off" placeholder="Address" name="studentaddress" aria-label="studentadd">
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingSelect">Preference</label>
    <select class="form-select" style="background:#ccffff;" id="autoSizingSelect" name="studentbranch">
      <option selected>Branch [click to select]</option>
      <option value="1">Computer Science</option>
      <option value="2">Electronics and Communication</option>
      <option value="3">Information and Science</option>
      <option value="4">Mechanical</option>
    </select>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn" style="border:1px solid white; background:#0099e6; color:white;">ADD</button>
  </div>
  </form>
</div>
    </div>

    <!-- removestudent -->
    <div class="tab-pane fade" id="pills-removestudent" role="tabpanel" aria-labelledby="pills-removestudent-tab">
      <form action="studentremove.php" method="get">
      <center>
        <br>
        <div class="d-flex" style="width:40%">
          <input class="form-control me-2" style="background:#ccffff;" autocomplete="off" type="search" name="removestudent" placeholder="Enter the ID to be removed" aria-label="ID">
          <button class="btn" style="border:1px solid white; background:#0099e6; color:white;"
            type="submit">REMOVE</button>
        </div>
      </center>
      </form>
      <br>
    </div>

    <!-- attendance -->
    <div class="tab-pane fade" id="pills-attendance" role="tabpanel" aria-labelledby="pills-attendance-tab">

    <!-- .............................................................................. -->

    <div class="d-flex align-items-start">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-atcs-tab" data-bs-toggle="pill" data-bs-target="#v-pills-atcs" type="button" role="tab" aria-controls="v-pills-atcs" aria-selected="true">COMPUTER SCIENCE</button>
    <button class="nav-link" id="v-pills-atec-tab" data-bs-toggle="pill" data-bs-target="#v-pills-atec" type="button" role="tab" aria-controls="v-pills-atec" aria-selected="false">ELECTRONICS AND COMMUNICATION</button>
    <button class="nav-link" id="v-pills-atis-tab" data-bs-toggle="pill" data-bs-target="#v-pills-atis" type="button" role="tab" aria-controls="v-pills-atis" aria-selected="false">INFORMATION AND SCIENCE</button>
    <button class="nav-link" id="v-pills-atme-tab" data-bs-toggle="pill" data-bs-target="#v-pills-atme" type="button" role="tab" aria-controls="v-pills-atme" aria-selected="false">MECHANICAL</button>
  </div>
  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-atcs" role="tabpanel" aria-labelledby="v-pills-atcs-tab">
    <table id="attend" style="width:900px;">
  <tr>
    <th style="text-align: center;">STUDENT NAME</th>
    <th style="text-align: center;">STUDENT ID</th>
    <th style="text-align: center;">PRESENT</th>
    <th style="text-align: center;">ABSENT</th>
          </tr>
          <?php 
    $sqlQuery= "SELECT `S_NAME`,`S_ID`,`ATTEND`,`DAYS` FROM `student` NATURAL JOIN `attend` NATURAL join `leave` WHERE B_ID='1' ";
    $res = mysqli_query($con,$sqlQuery) or die("Unable to fetch!");
    while($row = mysqli_fetch_assoc($res)){
      
      echo '<tr><td style="text-align: center;">'.$row['S_NAME'].'</td>
            <td style="text-align: center;">'.$row['S_ID'].'</td>
            <td style="text-align: center;">'.$row['ATTEND'].'</td>
            <td style="text-align: center;">'.$row['DAYS'].'</td></tr>
      ';
    }
    ?>
  
</table>
    </div>
    <div class="tab-pane fade" id="v-pills-atec" role="tabpanel" aria-labelledby="v-pills-atec-tab">
    <table id="attend" style="width:900px;">
  <tr>
    <th style="text-align: center;">STUDENT NAME</th>
    <th style="text-align: center;">STUDENT ID</th>
    <th style="text-align: center;">PRESENT</th>
    <th style="text-align: center;">ABSENT</th>
  </tr>
  <?php 
    $sqlQuery= "SELECT `S_NAME`,`S_ID`,`ATTEND`,`DAYS` FROM `student` NATURAL JOIN `attend` NATURAL join `leave` WHERE B_ID='2' ";
    $res = mysqli_query($con,$sqlQuery) or die("Unable to fetch!");
    while($row = mysqli_fetch_assoc($res)){
      
      echo '<tr><td style="text-align: center;">'.$row['S_NAME'].'</td>
            <td style="text-align: center;">'.$row['S_ID'].'</td>
            <td style="text-align: center;">'.$row['ATTEND'].'</td>
            <td style="text-align: center;">'.$row['DAYS'].'</td></tr>
      ';
    }
    ?>
</table>
    </div>
    <div class="tab-pane fade" id="v-pills-atis" role="tabpanel" aria-labelledby="v-pills-atis-tab">
    <table id="attend" style="width: 900px;">
  <tr>
    <th style="text-align: center;">STUDENT NAME</th>
    <th style="text-align: center;">STUDENT ID</th>
    <th style="text-align: center;">PRESENT</th>
    <th style="text-align: center;">ABSENT</th>
  </tr>
  <?php 
    $sqlQuery= "SELECT `S_NAME`,`S_ID`,`ATTEND`,`DAYS` FROM `student` NATURAL JOIN `attend` NATURAL join `leave` WHERE B_ID='3' ";
    $res = mysqli_query($con,$sqlQuery) or die("Unable to fetch!");
    while($row = mysqli_fetch_assoc($res)){
      
      echo '<tr><td style="text-align: center;">'.$row['S_NAME'].'</td>
            <td style="text-align: center;">'.$row['S_ID'].'</td>
            <td style="text-align: center;">'.$row['ATTEND'].'</td>
            <td style="text-align: center;">'.$row['DAYS'].'</td></tr>
      ';
    }
    ?>
</table>
    </div>
    <div class="tab-pane fade" id="v-pills-atme" role="tabpanel" aria-labelledby="v-pills-atme-tab">
    <table id="attend" style="width:900px;">
  <tr>
    <th style="text-align: center;">STUDENT NAME</th>
    <th style="text-align: center;">STUDENT ID</th>
    <th style="text-align: center;">PRESENT</th>
    <th style="text-align: center;">ABSENT</th>
  </tr>
  <?php 
    $sqlQuery= "SELECT `S_NAME`,`S_ID`,`ATTEND`,`DAYS` FROM `student` NATURAL JOIN `attend` NATURAL join `leave` WHERE B_ID='4' ";
    $res = mysqli_query($con,$sqlQuery) or die("Unable to fetch!");
    while($row = mysqli_fetch_assoc($res)){
      
      echo '<tr><td style="text-align: center;">'.$row['S_NAME'].'</td>
            <td style="text-align: center;">'.$row['S_ID'].'</td>
            <td style="text-align: center;">'.$row['ATTEND'].'</td>
            <td style="text-align: center;">'.$row['DAYS'].'</td></tr>
      ';
    }
    ?>
</table>
    </div>
  </div>
</div>











    <!-- .............................................................................. -->
    <center>
    
    </center>
    </div>
  </div>
  </div>
  </div>
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