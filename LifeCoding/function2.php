<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>function</title>
</head>
<body>
  <h1>Function</h1>
  <h2>Basic</h2>
  <?php
    function basic() {
      print('Lorem ipsum dolor1<br>');
      print('Lorem ipsum dolor2<br>');
    }
    basic();
  ?>
  <h2>parameter &amp; argument</h2>
  <?php 
  function sum($left, $right) {
    print($left+$right);
    print('<br>');
  }

    sum(2,4);
    sum(4,6);
  ?>
  
</body>
</html>