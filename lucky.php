<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link href="style.css" type="text/css" rel="stylesheet" />
  <script type="text/javascript" src="gen.js"></script>
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
        <?php

        echo "string";

        if ($LuckyNumber == 0) {
          LuckyGen();
        } else {
          echo $LuckyNumber;
        }
        ?>

  </main>

  <footer>
    <p>This is a joke, do not take this seriously.</p>
  </footer>

</body>

</html>
