
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FCI - Faculty of Computing and Informatics</title>
  <link rel="icon" type="image/x-icon" href="<?=base_url()?>assets/img/ums_logo.png">

  <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous" />
  <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
  <link href='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css' rel='stylesheet' />

  <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css">
</head>

<body>

  <section class="navigation_bar">
    <nav class="navbar navbar-dark navbar-expand-md fixed-top d-lg-flex justify-content-lg-center">
      <div class="navbar-container container"><a class="navbar-brand page-title" href="<?=base_url()?>Admin"><img src="<?=base_url()?>assets/img/fci_logo.png"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol">
          <ul class="navbar-nav d-lg-flex flex-grow-1 justify-content-between justify-content-lg-end header-nav-items">

            <li class="nav-item links"><a class="nav-link" href="<?=base_url()?>Students/view_students">Students</a></li>
            <li class="nav-item links"><a class="nav-link" href="<?=base_url()?>Lecturers/view_lecturers">Lecturers</a></li>
            <li class="nav-item links"><a class="nav-link" href="<?=base_url()?>Courses/view_courses">Courses</a></li>
            <li class="nav-item links"><a class="nav-link" href="<?=base_url()?>Fees/view_fees">Fees</a></li>
            <li class="nav-item links"><a class="nav-link" href="<?=base_url()?>Exam/view_examdate">Exam</a></li>
            <li class="nav-item links"><a class="nav-link" href="<?=base_url()?>Students/student_results">Results</a></li>
            <li class="nav-item links"><a class="nav-link" href="<?=base_url()?>Feedback/view_feedback">Feedback</a></li>
            <li class="nav-item links"><a class="nav-link" href="<?=base_url()?>index.php/auth/create_user">Create Users</a></li>
            <li class="nav-item links"><a class="nav-link" href="<?=base_url()?>index.php/auth" >View Users</a></li>
            <li class="nav-item links"><a class="nav-link" href="<?=base_url()?>index.php/auth/logout" style="background-color:#133d9e; border-radius:5px;">Logout</a></li>


            <!-- <li class="nav-item links"><a class="nav-link" onclick="openSearch()"><i class="fas fa-search"></i>&nbsp;Search</a></li> -->
          </ul>
        </div>
      </div>
    </nav>
  </section>

  <!-- modal login form  -->
  <div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-btn">
          <button type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="modal-body">
          <form action="index.html" method="post">
            <h2>Login</h2><label><input class="reactive" type="text" name="username" required="" minlength="3" maxlength="25" /><span>Username</span></label><label><input class="reactive" type="password" name="password" required="" maxlength="25" /><span>Password</span></label><input type="submit" value="Login" />
            <p class="form-message">Don&apos;t have an account? <a class="link" href="#">Register</a> now!</p>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Searchbar -->
  <div id="searchbar" class="overlay">
    <span class="closebtn" onclick="closeSearch()"><i class="fas fa-times searchbar"></i></span>
    <div class="overlay-content">
      <form action="#">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>
