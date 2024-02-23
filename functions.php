<?php

$LuckyNumber = 0;
$expireDate = mktime(24, 59, 59, null, null, null);
$luckylink = "lucky.php";
$img1= "src/1.png";
$img2= "src/2.png";
$img3= "src/3.png";
$img4= "src/4.png";
$img5= "src/5.png";


function LuckyGen() {
  $GLOBALS['LuckyNumber'] = rand(0,100);
  setcookie("lucky", $GLOBALS['LuckyNumber'], $GLOBALS['expireDate'], "/",);
  echo "<h1>". $GLOBALS['LuckyNumber'] . "</h1>";
  setcookie("user", "visitor", $GLOBALS['expireDate'], "/",);
  echo "Come back tomorrow for new number... after midnight....... </br>";
};

function deleteNumber() {
  unset($_COOKIE['lucky']);
  setcookie("lucky", $GLOBALS['LuckyNumber'], time() - 3600, "/",);
  $GLOBALS['LuckyNumber'] = 0;
};



?>
