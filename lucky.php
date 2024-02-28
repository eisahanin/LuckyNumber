<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link href="style.css" type="text/css" rel="stylesheet" />
  <script type="text/javascript" src="gen2.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>



<body>
  <div class="overlay">
    <img src="src/load.gif" />
  </div>


  <header>
    <nav>
      <a id="home" href="index.php">Home</a>
      <p id="cookienotice">This Project use one (1) essential Cookie! It will self-destruct at midnight. :)</p>
    </nav>
  </header>
  </br>
  <main>
    <img alt="a doodle a person with two hair buns, and a crystal ball, happy" src="src\2.png" />
  </br>
        <?php

        if ($LuckyNumber == 0) {
          LuckyGen();
          echo "</br>";
          echo "<footer>
            <p>For legal reasons, this is a joke. Do not take this seriously.</p>
          </footer>";
        } else {
          echo $LuckyNumber;
          echo "</br>";
          echo "<footer>
            <p>For legal reasons, this is a joke. Do not take this seriously.</p>
          </footer>";
        }
        ?>

  </main>

</body>
</html>
