
<?php




if(file_exists('vts.php')){
    include 'vts.php';
}


$fecha = date_create();

$cts = date_timestamp_get($fecha);

$ts = array();


$ts[4]=1594472400;
$ts[5]=1594539900;
$ts[6]=1594558800;

//$ts[7]=1594558800;


$ts[7]=1594746000;
$ts[8]=1594918800;

$ts[9]=1595057400;
$ts[10]=1595077200;

$ts[11]=1595144700;
$ts[12]=1595163600;

$ts_mm=1595156400;




if($cts>$ts_mm){

$big_m = $vms['Video Training Meeting']['meetingURL'];

}else
{
  $big_m = $vms['Big Meeting']['meetingURL'];

}





$c_lan='en';
$schedule='VT2020Schedule.pdf';

if( isset($_GET['l']) )

{
  $c_lan=$_GET['l'];

  }
$lan=$lans[$c_lan];




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
         
         TRAINEE
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
            <a href="help.php?l=<?=$c_lan?>" >
              <i class="nc-icon nc-alert-circle-i"></i>
              <p>HELP</p>
            </a>
          </li>
          

          <li class="active-pro">
           
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

          <div class="collapse navbar-collapse justify-content-end" id="navigation">
        
            <ul class="navbar-nav">
              
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-world-2"></i>
                  <p>
                    <?=$ls[$c_lan]?> 
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                 <?php
                 foreach ($ls as $key => $value) {
                  if($key!=$c_lan){


                  ?>
                  <a class="dropdown-item" href="index.php?l=<?=$key?>"><?=$value?></a>
                  <?php
                }
                 }
                 ?>
                </div>
              </li>
            </ul>
          </div>

          
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
<div class="col-md-8">
            <div class="card card-chart">
              <div class="card-header">


                   <div class="row">
                    <div class="col-md-12 ml-auto mr-auto text-center">

                      <h5 class="card-title"> International Training for Elders and Responsible Ones</h5>
                    </div>
                  </div>

              </div>
              <div class="card-body">

                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                      <h6>October 2020
                      </h6>
                    </div>
                  </div>


                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                      <a href="20ST_<?=$c_lan?>.pdf" target="_blank" class="btn btn-default btn-round"><?=$lan['text_11']?></a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                        <a target="_blank" href="<?=$schedule?>" class="btn btn-default btn-round"><?=$lan['text_18']?></a>
                    </div>
                  </div>

            
         

              </div>
             <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-info"></i>
                  <?=$lan['text_8']?>

                </div>
              </div>
            </div>
          </div>

<div class="col-md-4">
            <div class="card ">
              <div class="card-header ">

                  <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">

                      <h5 class="card-title"><?=$lan['text_9']?></h5>
                    </div>
                  </div>

              </div>
              <div class="card-body ">
                 <div class="row">
                    <div class="update ml-auto mr-auto">
                      <a target="_blank" href="<?=$big_m?>" class="btn btn-success btn-round"><?=$lan['text_19']?></a>
                    </div>
                  </div>

                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <a class="btn btn-warning btn-round" href="help.php?l=<?=$c_lan?>" ><?=$lan['text_35']?></a>
                     
                    </div>
                  </div>
              </div>
            <div class="card-footer ">
               
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar"></i> <?=$lan['text_10']?>: 70
                </div>
              </div>


            
            </div>
          </div>




          


        </div>

        <div class="row">
          <div class="col-md-12">

            <div class="card card-chart">
              <div class="card-header">



                   <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">

                <h5 class="card-title"><?=$lan['text_22']?> </h5>

                    </div>
                  </div>

            

              </div>
              <div class="card-body">

                
                
                <div class="row">

                    <div class="ml-1">
                    </div>
                    <div class="ml-3">
                      
                      <h6 ><?=$lan['text_23']?></h6>

                      <audio controls>
                        <source src="a/<?=$c_lan?>/msg_111.mp3" type="audio/mpeg">


                        Your browser does not support the audio tag.
                      </audio>

                    </div>

                    <div class="ml-1">
                    </div>
                    <div class="ml-3">
                      
                      <h6 ><?=$lan['text_24']?></h6>

                      <audio controls>
                        <source src="a/<?=$c_lan?>/msg_112.mp3" type="audio/mpeg">


                        Your browser does not support the audio tag.
                      </audio>

                    </div>


                    <div class="ml-1">
                    </div>
                    <div class="ml-3">
                      
                      <h6 ><?=$lan['text_25']?></h6>

                      <audio controls>
                        <source src="a/<?=$c_lan?>/msg_113.mp3" type="audio/mpeg">


                        Your browser does not support the audio tag.
                      </audio>

                    </div>


                    <div class="ml-1">
                    </div>


               </div>


<?php 
for($i=1;$i<=3;$i++){

$st=3*$i;

  ?>


<div class="row">

<?php
for($j=1;$j<=3;$j++){

if($cts>=$ts[$st+$j] && $st+$j<=8){
  ?>

                    <div class="ml-1">
                    </div>
                    <div class="ml-3">
                      
                      <h6 ><?=$lan['text_'.(22 + $j + $st)]?></h6>


                      <audio controls>
                        <source src="" type="audio/mpeg">


                        Your browser does not support the audio tag.
                      </audio>

                    </div>

  <?php
}
}
?>





                    <div class="ml-1">
                    </div>


               </div>



  <?php
}
?>



<div class="row">
    <div class="ml-1">
                    </div>
                    <div class="ml-3">
                      
                      <h6 > <?php

                          if($c_lan=='gr'){
                            echo 'Schlusswort';

                          }else
                          {
                            echo 'Closing Word';
                          }
                      ?>  </h6>


                      <audio controls>
                        <source src="a/closing.mp4" type="audio/mpeg">


                        Your browser does not support the audio tag.
                      </audio>

                    </div>

</div>

              </div>
              <div class="card-footer">
                
               
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
        

        <pre>
      
        </pre>
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
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js

        //demo.showNotification('top','center','Hi <b> <?=$user['firstName']?></b>, We are happy you are able to join us for the Semiannual Video Training 2020!. ');
    });
  </script>
</body>

</html>
