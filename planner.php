<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="assets/logo.svg">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
   <title>Itinerary planner</title>
</head>
<body>
    <header>
        <nav class="navbar bg-primary text-light">
            <a href="index.php" class="navbar-brand" id="nav-brand" href="#"><p class="text-light"><i class="bi bi-brightness-alt-high"></i> MyHoliday</p></a>
        </nav>
    </header>

    <div class="container planner" id="planner">           
        <h4 class="text-center">Oh all the places we will go!</h4>
        <hr>
        <?php
            //Establish connection
            $conn = new mysqli("localhost", "root", "", "myholiday");

            if ($conn->connect_error){
                die("Connection failed: ". $conn->connect_error);
            }

            //sql query 
            $sql = "SELECT SUM(addedPrice) as totalPrice, SUM(addedDuration) as totalDuration FROM addedDestination";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();

            //error handling
            if(!$result){
                die("Invalid query: ".$conn->error);
            }

            echo " <div class='planner-info'>
                        <p><b>Approximate duration:</b> <span id='total-days'>".$row['totalDuration']."</span> day(s)</p>
                        <p><b>Approximate total price:</b> $<span id='total-price'>".$row['totalPrice']."</span></p>
                    </div>";
        ?>

        <div class="all-added-destinations" id="all-added-destinations">
            <?php

                //Establish connection
                $conn = new mysqli("localhost", "root", "", "myholiday");

                if ($conn->connect_error){
                    die("Connection failed: ". $conn->connect_error);
                }

                //sql query 
                $sql = "SELECT * FROM addedDestination";
                $result = $conn->query($sql);

                //error handling
                if(!$result){
                    die("Invalid query: ".$conn->error);
                }

                $count = 1;

                while($row = $result->fetch_assoc()){

                    echo "
                        <div class='added-destination'>
                            <div class='number-container'>
                                <p class='number'>". $count++ ."</p>
                            </div>
                            <div>
                                <span class='close'>X</span>
                                <p class='destination-name'><b>Destination: </b><span class='addedLocation'>". $row['addedLocation']."</span></p>
                                <p><b>Duration: </b><span class='addedDuration'>". $row['addedDuration']."</span> days</p>
                                <p><b>Activities: </b><span class='addedActivity'>".$row['addedActivity']."</span></p>
                                <p><b>Price: </b>As from $<span class='addedPrice'>". $row['addedPrice']."</span></p>
                            </div>
                        </div>";
                }
            ?>
        </div>

        </div>
            <button onclick="window.print()" class="btn btn-primary btn-print"><i class="bi bi-printer"></i> Print</button> 
        </div>
    </div>
</body>
</html>