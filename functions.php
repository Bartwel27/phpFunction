<?php
// functions
include "db.php";

function _http_res($time, $dir){
  echo "<meta http-equiv='refresh' content='{$time};url={$dir}'>";
}

function _innerjs($msg){
  echo "<script>alert('$msg')</script>";
}

function _innerhtml(){
  echo "
   <style></style>
   
  ";
}

function _pictureHundler($connect, $style, $SqlPicture, $SqlPhone){
  $picturesql = "select current_profile from users where phone = '$SqlPhone'";
  $picturesqlq = mysqli_query($connect, $picturesql);
  $picturesqlF = mysqli_fetch_assoc($picturesqlq);
    $pictureVar = $picturesqlF["current_profile"];
    
    $customDesign = "<style>#image{ $style }</style>";
   
  if ($picturesqlF["current_profile"] == "") {
    echo "{$customDesign} <img src='../main/xbin/img/sys/def.jpg' id='image' alt='defaultprofile'/>";
  } else {
    echo "{$customDesign} <img src='../main/xbin/img/users/$pictureVar' id='image' alt='$pictureVar'/>";
  }
  
}





