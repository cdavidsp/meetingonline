<?php

$version = 60;












function validate($m){


if(file_exists('vts.php')){
    include 'vts.php';
}


  foreach ($vms as $k => $v) {

//echo " ".intval($v['zoomID'])."  ".intval($m);

    if(intval($v['zoomID'])==intval($m)){
      return true;
    }
    # code...
  }



  return false;

}













$at = 'Bearer eyJhbGciOiJIUzUxMiIsInYiOiIyLjAiLCJraWQiOiJmMDJlOWVjZS0zOTQwLTRkMmUtYTk0NS04YWVlOTA0Y2RiYWMifQ.eyJ2ZXIiOjcsImF1aWQiOiIyNjc4YzI4ZDM5OWMwZjY1ZTBkNGYwYWM5ZWNkN2VlZCIsImNvZGUiOiJmT0huaXFZZTU0X1RVZUFQUWxQVGpPOG84R3RoelRLY2ciLCJpc3MiOiJ6bTpjaWQ6b1dxVDZDQ1RUTW1XV29EWWFHZVR2QSIsImdubyI6MCwidHlwZSI6MCwidGlkIjowLCJhdWQiOiJodHRwczovL29hdXRoLnpvb20udXMiLCJ1aWQiOiJUVWVBUFFsUFRqTzhvOEd0aHpUS2NnIiwibmJmIjoxNTk1NDE1MjAzLCJleHAiOjE1OTU0MTg4MDMsImlhdCI6MTU5NTQxNTIwMywiYWlkIjoiLVFhZUt4bVZSeWk3d3ppSlNwc3hNZyIsImp0aSI6IjZjOTQ0ODg1LTJkNjQtNDViNC1hMjI3LThiZGMyZTRlMTJjZCJ9.eqsnwlAwpWVmHWVey3Bo4k4sn2CfrsppiLdJ_-PWE-eckd-Gq-r8epecWwLJYXmBx60ov4KwN63MRqE9mQvLog';

echo '<h1>'.$version.'</h1>';


$curl2 = curl_init();

//get reports





$meetings = file_get_contents("/var/www/html/meetings.json");
$mees = json_decode($meetings, true);
$filter_meetings=array();

    $mc= array();

    $k=0;

foreach ($mees['meetings'] as $k => $mee) {

$k++;



    $next_t = '1';
    $w=0;
    $allp=array();

    $meeting_id=$mee['uuid'];

    $mee_id=$mee['id'];


//echo $mee_id."<br>";















if($k<200000 && validate($mee_id)){


      array_push($filter_meetings, $mee);

//echo $meeting_id.'<br>';

 while($next_t!=''){
    $w++;

    if($w==1){
      $url="https://api.zoom.us/v2/report/meetings/".$meeting_id."/participants?page_size=300";

    }else
    {
      $url="https://api.zoom.us/v2/report/meetings/".$meeting_id."/participants?next_page_token=".$next_t."&page_size=300";

    }

     curl_setopt_array($curl2, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Authorization: ".$at,
        "Content-Type: application/json"
       )

    ));
    $response2 = curl_exec($curl2);



    $d1=json_decode($response2, true);

    $next_t = $d1['next_page_token'];

    $participants= $d1['participants'];

    $allp = array_merge($allp, $participants);


    }


    foreach ($allp as $key => $value) {
      $value['meeting_id']=$meeting_id;
      array_push($mc, $value);
      # code...
    }

 
}

   






}








    echo json_encode($mc);
//echo json_encode($filter_meetings);


curl_close($curl2);



?>

