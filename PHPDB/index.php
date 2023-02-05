<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <title></title>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a>HOME</a></li>
        <li><a>ABOUT</a></li>
        <li><a>BOOKING</a></li>
        <li><a>CONTACT</a></li>
      </ul>
    </nav>
  </header>

  <form class="user-details" action="#">
    <label for="firstName">First name:</label>
    <input type="text" name="name" id="firstName">
    <label for="lastName">Last name:</label>
    <input type="text" name="lastname" id="lastName">
    <label for="age">Age:</label>
    <input type="text" name="age" id="age">

    <label for="terms">Terms & Conditions</label>
    <input type="checkbox" name="terms" id="terms">

    <input type="submit" id="submit" value="Submit">
    <!-- <button>submit</button> -->
  </form>

  <div id="output" value=""></div>

<?php

  function getArray() {
    return array("Volvo", "BMW", "Toyota");
  };


  $firstElement = getArray()[1];

  $cars = [
    "Volvo", "BMW", "Toyota"
  ];

  if (getArray() == $cars) {
    echo "This is the same make";
  } else {
    echo "This is not the same make";
  }

  echo "";
  echo "</br>";
  var_dump($cars);
?>
</body>

</html>