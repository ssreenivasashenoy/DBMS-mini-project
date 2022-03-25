<?php include_once 'config.php' ?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRANCH</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="Images/main_logo.png">

    <!-- External CSS link-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="branches.css">

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
                        <a class="nav-link" href="index.php"><i class="fas fa-home"
                                style="color: grey;  width: auto; "></i>
                            HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php#mem"><i class="fas fa-sign-in-alt" style="color: grey; width: auto; "></i> LOGIN / SIGN UP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="branch.php#mem"><i class="fas fa-code-branch"
                                style="color: grey; width: auto; "></i> BRANCH</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="moreinfo.php#mem"><i class="fas fa-info"
                                style="color: grey; width: auto; "></i> MORE
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

    <!-- Branch Details -->
    <h4 id="mem">
        <center>BRANCHES</center>
    </h4>
    <center>
        <hr style="width: 300px;">
    </center>
    <br>
    <center>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"
            style="width: 70%; height: auto;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Images/cse.jpg" class="d-block w-100" alt="CSE" style="width: 700px; height:500px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color:white; background-color:#003854; border-radius:10px;">COMPUTER SCIENCE AND ENGINEERING</h5>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="Images/ec.jpg" class="d-block w-100" alt="EC" style="width: 700px; height:500px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color:white; background-color:#003854; border-radius:10px;">ELECTRONICS AND COMMUNICATION ENGINEERING</h5>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="Images/is.jpg" class="d-block w-100" alt="ISE" style="width: 700px; height:500px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color:white; background-color:#003854; border-radius:10px;">INFORMATION SCIENCE AND ENGINEERING</h5>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <img src="Images/me.jpg" class="d-block w-100" alt="MECH" style="width: 700px; height:500px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color:white; background-color:#003854; border-radius:10px;">MECHANICAL ENGINEERING</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div><br>

        <!-- table -->
        <section>
        <center>
    <table id="branches" style="width:1200px;">
  <tr>  
    <th style="text-align: center;">COMPUTER SCIENCE</th>
    <th style="text-align: center;">ELECTRONICS AND COMMUNICATION</th>
    <th style="text-align: center;">INFORMATION AND SCIENCE</th>
    <th style="text-align: center;">MECHANICAL</th>
  </tr>
  
  <?php
  $query = "SELECT B_NAME,count(*) as count FROM `student` NATURAL join `branch` GROUP by B_ID;";
  $res = mysqli_query($con,$query) or die("Query Failed!");
  echo '<tr>';
  $count = 0;
  while($row = mysqli_fetch_assoc($res)){
      $count++;
      echo "<td style='text-align: center;'>".$row['count']."</td>";
    }
    while($count<4){
        echo "<td style='text-align: center;'>0</td>";
        $count++;
    }
    echo '</tr>';
  ?>
  
</table>
<br><br>
</center>
        
    </section>


    </center>

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

<!-- <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> -->