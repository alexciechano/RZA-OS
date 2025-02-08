<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbanme = "bookings";
$conn = new mysqli($servername,$username,$password,$dbanme);

if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);

}
//Handle form submission
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $room = $_POST["room"];
    $people = $_POST["people"];
    $date_from = $_POST["date-from"];
    $date_to = $_POST["date-to"];

    //prepare and execute the database insertion
    $sql = "INSERT INTO `booking`(`name`, `email`, `room`, `people`, `date_from`, `date_to`) 
    VALUES ('$name','$email','$room','$people','$date_from','$date_to')";

    if($conn->query($sql) == TRUE){
        echo "Booking Successfully";
    }else{
        echo "Errot: " .$sql . "<br>" .$conn->error;
    }
}
$conn->close();
?>