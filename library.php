<?php
  //Include username and password
  include 'info.php';

  // Retrieve input from user
  $input = $_POST["query"];
  // Create connection
  $Library = new mysqli("localhost", $username, $password);
  // Check connection
  if ($Library->connect_error) {
    die("Connection failed: " . $Library->connect_error);
  }
  //Insert security here
  $invalidResponse = "This program only allows 'Select' statements. "
  ."You will be redirected back to the main page in 5 seconds to try again.";
  /*
  if(strpos($input, 'text we don/'t want') !== false){
    echo $invalidResponse;
    sleep(5);
    header("Location: https://hopper.csustan.edu/~ssuarez/index.html")
  } elseif (condition) {
    # code...
  } elseif (condition) {
    # code...
  }
  */
  //End security

  //Query below using cleaned input
  //Queries are case insensitive so it is fine to use toupper or something like
  //that


  //$result = $mysqli->query();
  //$row = $result->fetch_assoc();
  //echo htmlentities($row['_message']);

?>
