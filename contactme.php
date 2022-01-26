<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "contactus";

    $connection = mysqli_connect($host, $user, $pass, $database);

    if ($connection){
        echo "sucessfully Connected";
    }else{
        die("could not connect");
    }
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $review = $_POST['review'];
  $sql = "INSERT INTO message (firstname, lastname, email, phone, review) VALUES('$firstname', '$lastname','$email','$phone', '$review')";
  if(mysqli_query($connection, $sql)){
      header("Location: contact.html");
  }else{
      echo "record not found";
  }
    mysqli_close($connection);