<?php
include_once 'index.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link href="style.css" type="text/css" rel="stylesheet" />
  <script type="text/javascript" src="gen.js"></script>
</head>
<body>

  <main>
      <h1 id="num">
        <?php

        if ($LuckyNumber == 0) {
          LuckyGen();
          echo $LuckyNumber;
          setcookie("user", "visitor", $GLOBALS['expireDate'], "/",);
        } else {
          echo $LuckyNumber;
        }
        ?>
      </h1>


  </main>


</body>

</html>
