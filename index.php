<?php
include 'functions.php';
 ?>
<!DOCTYPE html>
<html>
<head>
  <link href="style.css" type="text/css" rel="stylesheet" />
  <script type="text/javascript" src="gen2.js">
  </script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Daily Lucky Number</title>
</head>

<body>
  <div class="overlay">
    <img src="src/start.gif" />
  </div>

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
      echo '<img alt="a doodle a person with two hair buns, and a crystal ball, angry" src='. $img3 .' />';
      echo "<h1>" . $_COOKIE["lucky"] . "</h1>";
      echo "Come back tomorrow for new number... after midnight....... </br></br>";
      echo '<div id="unless">
        <img on alt="a doodle a person with two hair buns, and a crystal ball, calm" src='. $img4 .' /></br>
        Unless...?</br>
        <img alt="a doodle a person with two hair buns, and a crystal ball, furrowed brow and apologetic" src='. $img5 .' /></br>
        You want a new one...?</br></br>
        <a class="lucky" href='. deleteNumber() . '>I want a new Number!!</a></br>
        </div>';
      echo "<footer>
        <p>For legal reasons, this is a joke. Do not take this seriously.</p>
      </footer>";
    }
    else {
      echo '<img alt="a doodle a person with two hair buns, and a crystal ball" src='. $img1 . ' /></br>';
      echo '<a class="lucky" href='. $luckylink . '>>Gimme a number!</a>';
      echo "</br>";
      echo "<footer>
        <p>For legal reasons, this is a joke. Do not take this seriously.</p>
      </footer>";
    }

    ?>

  </main>

</body>
</html>
