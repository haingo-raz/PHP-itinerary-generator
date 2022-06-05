<?php

    //Establish connection
    $conn = new mysqli("localhost", "root", "", "myholiday");

    if ($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
    }

    //get the variables from the client side
    $location = $_POST['location'];
    $activity = $_POST['activity'];
    $duration = $_POST['duration'];
    $price = $_POST['price'];

    //sql query 
    $sql = "DELETE FROM addedDestination WHERE addedActivity = '".$activity."'";
    $result = $conn->query($sql);

    //error handling
    if(!$result){
        die("Invalid query: ".$conn->error);
    }

?>