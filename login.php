
<?php

session_start();

if( isset($_SESSION['user'])) 
{
    
          header('Location: /index.php');
     
}

if( isset($_POST['user']) )

{
     $user = $_POST['user'];
     $pass = $_POST['pass'];

     $user = strtolower($user);

        $vts = array(
        "st2020_0001@meetingonline.eu" => [ 
                        "firstName" => "Jovan", 
                        "lastName" => "Heron", 
                        "city" => "Aachen", 
                        "email" => "jaheron24@gmail.com", 
                        "language" => "Englisch / English", 
                        "password" => "7675f87b9cdd0dae4aad5e6884e083010380dff6", 
                        "payment" => "" 
                     ], 
        "st2020_0002@meetingonline.eu" => [ 
                        "firstName" => "Joy", 
                        "lastName" => "Heron", 
                        "city" => "Aachen", 
                        "email" => "joyheron42@gmail.com", 
                        "language" => "Englisch / English", 
                        "password" => "46bb5e689aa0404572c900c9bc1ff0f9de6d9c0d", 
                        "payment" => "" 
                     ]

                         );

        if(file_exists('vts.php')){
            include 'vts.php';
        }else
        {
            include 'vts2.php';
        }


$error_message="";



    if (array_key_exists($user,$vts))
     {

        if(sha1($pass)===$vts[$user]['passwordSHA1']){

                $_SESSION['user'] = $vts[$user];

                header('Location: /index.php');
        }else{

                $error_message = "Password wrong, please check your email.";
          }

    }else{

            $error_message = "User not found, please check your email.";
        }    

}
?>

<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    VIDEO TRAINING
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />

  <style type="text/css">
    .main-panel-2 {

    /* width: calc(100% - 260px); */

  margin-top: 20px;
    background-color: #f4f3ef;
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }

  </style>
</head>

<body style="background-color: #f4f3ef;">
  <div class="wrapper" style="">
   
    <div class="main-panel-2">
      <!-- Navbar -->
     
      <!-- End Navbar -->
      <div class="content" >
        <div class="row">
          <div class="col-md-8 col-lg-4 offset-lg-4  offset-md-2">
            <div class="card card-user">
              <div class="image">
                <img src="assets/img/bg1.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                    <img class="avatar border-gray" src="assets/img/default-avatar.png" alt="...">
                    <h6 class="title" > SEMIANNUAL Video Training </h6>
                    <p> July 7-19, 2020 </p>
                  
                </div>
                
                 
                 <form method="post" action="/login.php">

                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Username</label>
                        <input name="user" id="user" maxlength="40"  type="text" class="form-control" placeholder="" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Password    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
 </label>
                        <input id="password-field" type="password" class="form-control" placeholder="" name="pass" value="">
                     
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" href="index.php" class="btn btn-primary btn-round">Login</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <a class="btn btn-warning btn-round" href="https://tinyurl.com/HelpVT2020" >Help Desk</a>
                    </div>
                  </div>
                </form>


              </div>
             
            </div>
          </div>
          
        </div>
      </div>
     
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>

<script type="text/javascript">
    
     document.getElementById("user").focus();

     $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});


</script>

  <?php

if($error_message != ""){
    ?>
    <script type="text/javascript">
        demo.showNotification('top','center','<?=$error_message?>');
    </script>
    <?php
}
  ?>

</body>

</html>
