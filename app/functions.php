<?php
$nameErr = $emailErr = $phoneErr = "";
$name = $email = $phone = "";

if (isset($_POST["submit"])) {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["phone"])) {
    $phoneErr = " Valid phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if phone only contains numbers
    if (!preg_match("/^[0-9]{10}*$/", $name)) {
      $phoneErr = "Only numbers and dash space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
