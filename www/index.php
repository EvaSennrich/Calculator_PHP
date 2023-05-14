<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Link php/css file -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

<form action= "index.php" method="get" class="form">
Enter Number <input type="text" name= "number1">
<br>
<br>
Enter Number <input type="text" name= "number2">
<br>
<br>
<select name="operator" >
  <option >None</option>
  <option >Add</option>
  <option >Subtract</option>
  <option >Multiply</option>
  <option >Divide</option>
</select>
<br>
<br>
<button type= "submit" name="submit" value="submit" >Submit</button>


</form>

  <p>The answer is: </p>

<?php 

  if(isset($_GET["submit"])) {
    $result1 = $_GET["number1"];
    $result2 = $_GET["number2"];
    $operator = $_GET["operator"];

      switch($operator) {
          case "None": 
          echo "Enter Number Please";
        break;
        case "Add": 
          echo $result1 + $result2;
        break;
        case "Subtract": 
          echo $result1 - $result2;
        break;
        case "Multiply": 
          echo $result1 * $result2;
        break;
        case "Divide": 
          echo $result1 / $result2;
        break;

      }
    }

?>


</body>
</html>