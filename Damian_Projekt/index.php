<?php
require 'connection.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $age = $_POST["age"];
  $country = $_POST["country"];
  $gender = $_POST["gender"];

  $languages = $_POST["languages"];
  $language = "";
  foreach($languages as $row){
    $language .= $row . ",";
  }

  $query = "INSERT INTO tb_data VALUES('', '$name', '$age', '$country', '$gender', '$language')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <style media="screen">
    label{
      display: block;
    }
  </style>
  <body>
    <form class="" action="" method="post" autocomplete="off">
      <label for="">Name</label>
      <input type="text" name="name" required value="">
      <label for="">Age</label>
      <input type="number" name="age" required value="">
      <label for="">Country</label>
      <select class="" name="country" required>
        <option value="" selected hidden>Select Country</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
        <option value="LT">LT</option>
      </select>
      <label for="">Gender</label>
      <input type="radio" name="gender" value="Male" required> Male
      <input type="radio" name="gender" value="Female"> Female
      <label for="">Languages</label>
      <input type="checkbox" name="languages[]" value="English">English
      <input type="checkbox" name="languages[]" value="Chinese">Chinese
      <input type="checkbox" name="languages[]" value="Lithuanian">Spanish
      <br>
      <button type="submit" name="submit">Submit</button>
    </form>
  </body>
</html>
