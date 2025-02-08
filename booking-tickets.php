<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbanme = "booking-tickets";
$conn = new mysqli($servername,$username,$password,$dbanme);

if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);

}
//Handle form submission
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $ticket = $_POST["ticket"];
    $people = $_POST["people"];
    $date = $_POST["date"];

    //prepare and execute the database insertion
    $sql = "INSERT INTO `booking-tickets`(`name`, `email`, `ticket`, `people`, `date`) 
    VALUES ('$name','$email','$ticket','$people','$date')";

    if($conn->query($sql) == TRUE){
        echo "Booking Successfully";
    }else{
        echo "Errot: " .$sql . "<br>" .$conn->error;
    }
}
$conn->close();
?>