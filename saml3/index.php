<?php

require_once 'lib/_autoload.php';
$as = new SimpleSAML_Auth_Simple('default-sp');
$as->requireAuth();

$attributes = $as->getAttributes();

$url = $as->getLogoutURL();



$email = $attributes['http://schemas.xmlsoap.org/ws/2005/05/identity/claims/name'][0];



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
}

$user = $vts[$email];



$big_m = $vms['Video Training Meeting']['meetingURL'];
$group = trim($user['group']);

$group_m = $vms[$group]['meetingURL'];

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
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="assets/img/default-avatar.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
         <?=$user['firstName']?>
          <!-- <div class="logo-image-big">
            <img src="assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./index.php">
              <i class="nc-icon nc-bank"></i>
              <p>HOME</p>
            </a>
          </li>
          <li>
            <a href="./help.php">
              <i class="nc-icon nc-alert-circle-i"></i>
              <p>HELP</p>
            </a>
          </li>
          

          <li class="active-pro">
            <a href="<?=htmlspecialchars($url)?>">
              <i class="nc-icon nc-spaceship"></i>
              <p>LogOut</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Meeting Online</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Semiannual Video Training 2020</h5>
              </div>
              <div class="card-body ">
          

                <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" disabled=""  value="<?=$user['user']?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" disabled="" value="<?=$user['firstName'].' '.$user['lastName']?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">City</label>
                        <input type="text" disabled="" class="form-control" value="<?=$user['city']?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" disabled=""  value="<?=$user['email']?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Language</label>
                        <input type="text" class="form-control" disabled="" value="<?=$user['language']?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Group</label>
                        <input type="text" class="form-control" disabled="" value="<?=$user['group']?>">
                      </div>
                    </div>
                  </div>


              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-info"></i>
                  The training will be held on Zoom. Click on the buttons below to join the meetings. 

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Meetings</h5>

              </div>
              <div class="card-body ">

                 <div class="row">
                    <div class="update ml-auto mr-auto">
                      <a target="_blank" href="https://meetingonline-eu.zoom.us/signin" class="btn btn-success btn-round">OPEN ZOOM</a>
                    </div>
                  </div>

                 <div class="row">
                    <div class="update ml-auto mr-auto">
                      <a target="_blank" href="<?=$big_m?>" class="btn btn-success btn-round">JOIN TO THE MEETING</a>
                    </div>
                  </div>

                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <a target="_blank" href="<?=$group_m?>" class="btn btn-info btn-round">JOIN TO GROUP MEETING</a>
                    </div>
                  </div>
              </div>
              <div class="card-footer ">
               
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar"></i> Number of trainees: <?=sizeof($vts)?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">Outlines</h5>
              </div>
              <div class="card-body">
<!--
                
                <div class="row">
                    <div class="ml-12">

              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#">English</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">German</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Farsi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Russian</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Chinese</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Vietnami</a>
                </li>
              </ul>
</div>
</div>
-->

                
                <div class="row">
                    <div class="ml-3">
                      <a href="20ST_eng.pdf" target="_blank" class="btn btn-default btn-round">English</a>
                    </div>

                    <div class="ml-3">
                      <a href="20ST_ger.pdf" target="_blank" class="btn btn-default btn-round">German</a>
                    </div>

                    <div class="ml-3">
                      <a href="20ST_far.pdf" target="_blank" class="btn btn-default btn-round">Farsi</a>
                    </div>


                  </div>
                  <!--<div class="row">
                    <div class="ml-3">
                      <button type="button" class="btn btn-default btn-round">Message 4</button>
                    </div>
                    <div class="ml-3">
                      <button type="button" class="btn btn-default btn-round">Message 5</button>
                    </div>
                    <div class="ml-3">
                      <button type="button" class="btn btn-default btn-round">Message 6</button>
                    </div>

                  </div>-->

              </div>
              <div class="card-footer">
                
                <hr />
                <div class="card-stats">
                  <i class="fa fa-check"></i> The audios will be available in <a target="_blank" href="http://lsmwebcast.com">http://lsmwebcast.com</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
  	function openWindow( url )

	{

	window.open(url, '_blank', "shilpijain" ,"modal=no");

	window.focus();

	}


    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js

        demo.showNotification('top','center','Hi <b> <?=$user['firstName']?></b>, We are happy you are able to join us for the Semiannual Video Training 2020!. ');
        openWindow('https://meetingonline-eu.zoom.us/signin');


    });
  </script>
</body>

</html>

