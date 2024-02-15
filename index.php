<?php
$LuckyNumber = 0;
$expireDate = mktime(24, 59, 59, null, null, null);

function LuckyGen() {
  $GLOBALS['LuckyNumber'] = rand(0,100);
  setcookie("lucky", $GLOBALS['LuckyNumber'], $GLOBALS['expireDate'], "/",);
};

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
    <a href="index.php">Index</a>
  </header>
</br>
  <main>
    <h1>
      Let's find your Lucky Number!
    </h1>

    <?php
    if (isset($_COOKIE["user"])) {
      echo "You got your Number!!!";
      echo "<h1>" . $_COOKIE["lucky"] . "</h1>";
      echo "Come back tomorrow for new number... after midnight.......";
    }
    else {
    }
    ?>

    <p>Click to Find out!</p>;
    <a href="lucky.php">Click Me!</a>;


  </main>

  <footer>
    <p>This is a joke, do not take this seriously.</p>
  </footer>
</body>

</html>
