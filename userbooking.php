<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "bookingform";

    $connection = mysqli_connect($host, $user, $pass, $database);

    if ($connection){
        echo "sucessfully Connected";
    }else{
        die("could not connect");
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $time = $_POST['time'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $package = $_POST['package'];
    $photographer = $_POST['photographer'];
    $com = $_POST['com'];
    $wed = $_POST['wed'];
    $photo = $_POST['photo'];
  $sql = "INSERT INTO info2 (name, email, address, time, startdate, enddate, package, photographer, com, wed, photo) VALUES('$name','$email','$address','$time','$startdate','$enddate','$package', '$photographer', '$com','$wed','$photo')";
  if(mysqli_query($connection, $sql)){
    header("Location: last.html");
  }else{
      echo "record not found";
  }
    mysqli_close($connection);