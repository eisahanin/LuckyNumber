<?php
$LuckyNumber = null;
$expireDate = mktime(24, 59, 59, null, null, null);
setcookie("lucky", "null", $expireDate, "/");
global $HasVisited
if ($HasVisited == true) {
  // code...
} else {
  // code...
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <link href="style.css" type="text/css" rel="stylesheet" />
  <script type="text/javascript" src="gen.js"></script>
</head>
<body>
  <header>
    <p>This Project uses Cookies! It will self-destruct at midnight. :)</p>
  </header>

  <main>
    <h1 id="num">
      <?php
      function LuckyGen() {
        $GLOBALS['LuckyNumber'] = rand(0,100);
        setcookie("lucky", $GLOBALS['LuckyNumber'], $GLOBALS['expireDate'], "/",);
      }

      switch ($_COOKIE["user"]) {
        case (!isset($LuckyNumber)):
          LuckyGen();
          echo $LuckyNumber;
          break;

        case (isset($LuckyNumber)):
          echo $LuckyNumber;
          break;
        }
      ?>
    </h1>
  </main>

  <footer>
    <p>This is a joke, do not take this seriously.</p>
  </footer>
</body>

</html>
