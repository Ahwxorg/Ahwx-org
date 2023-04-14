<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ahwx >> Pictures >> Nature</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <center><h1>Pictures</h1></center>
      <br>
      <div class="imgWrapper"><center>
      <?php
      $imgDir = 'img/';
      $imgFiles = scandir($imgDir);
      
      foreach($imgFiles as $imgFile) {
        if(strpos($imgFile, '.jpeg') !== false) {
            echo "<img class='img' src='img/",$imgFile,"' alt='",$imgFile,"'>";
            echo "<br>";
            echo "<br>";
          }
        if(strpos($imgFile, '.jpg') !== false) {
            echo "<img class='img' src='img/",$imgFile,"' alt='",$imgFile,"'>";
            echo "<br>";
            echo "<br>";
          }
        if(strpos($imgFile, '.png') !== false) {
            echo "<img class='img' src='img/",$imgFile,"' alt='",$imgFile,"'>";
            echo "<br>";
            echo "<br>";
          }
      }
      
      ?>
      </div>
	</div>
  </body>
</html>
