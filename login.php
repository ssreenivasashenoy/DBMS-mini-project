<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN/SIGN UP</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="Images/main_logo.png">

    <!-- External CSS link-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">

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

    <!-- Login and Signup -->
    <div id="mem"><br><br><br><br>
    </div>
    <center>
    <div class="wrapper" id="log">
         <div class="title-text">
            <div class="title login">
               Login Form
            </div>
            <div class="title signup">
               Signup Form
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="validation.php" method="post" class="login">
                  <div class="field">
                     <input type="text" autocomplete="off" name="user" placeholder="Name" required>
                  </div>
                  <div class="field">
                     <input type="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Not Registered? <a href="">Signup now</a>
                  </div>
               </form>
               <form action="registration.php" method="post" class="signup">
                  <div class="field">
                     <input type="text" name="user" autocomplete="off" placeholder="Name" required>
                  </div>
                  <div class="field">
                     <input type="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Signup">
                  </div>
               </form>
            </div>
         </div>
      </div>
    </center>
    <br><br><br>



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

    <script src="login.js"></script>

</body>

</html>

<!-- <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> -->