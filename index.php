<?php
include 'functions.php';
 ?>
<!DOCTYPE html>
<html>
<head>
  <link href="style.css" type="text/css" rel="stylesheet" />
  <script type="text/javascript" src="gen.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Daily Lucky Number</title>
</head>
<body>
  <header>
    <nav>
      <a id="home" href="index.php">Home</a>
      <p id="cookienotice">This Project use one (1) essential Cookie! It will self-destruct at midnight. :)</p>
    </nav>
  </header>
</br>
  <main>
    <h1>
      Let's find your Lucky Number!
    </h1>
    <?php

    if (isset($_COOKIE["lucky"])) {
      echo "You got your Number!!!</br>";
      echo "img</br>";
      echo "<h1>" . $_COOKIE["lucky"] . "</h1>";
      echo "Come back tomorrow for new number... after midnight....... </br>";
      echo "img</br>";
      echo "Unless...?</br>";
      echo "You want a new one...?</br>";
      echo "img</br>";
      echo "<a href=". deleteNumber() . ">I want a new Number!!</a>";
    }
    else {
      echo "img</br>";
      echo "<p>Click to Find out!</p>";
      echo "<a href=". $luckylink . ">>Gimme a number!</a>";
    }

    ?>

  </main>

  <footer>
    <p>For legal reasons, this is a joke. Do not take this seriously.</p>
  </footer>
</body>

</html>
