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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <title>MyHoliday</title>
</head>
<body>
    <header>
        <nav class="navbar bg-primary text-light">
            <a href="#" class="navbar-brand" id="nav-brand"><p class="text-light"><i class="bi bi-brightness-alt-high"></i> MyHoliday</p></a>
            <a class="text-light planner-link" href="planner.php">♡ MyPlanner</a>
        </nav>
    </header>
    <br>

    <div class="container">
  
        <div class="d-flex justify-content-center">
            <form action="" method="GET" class=" d-flex justify-content-center col-5">
                <input name="query" id="query" class="form-control mr-sm-2 col-6" type="text" placeholder="Search a destination/activity...">
                <button onclick="" class="btn btn-outline-primary my-2 my-sm-0 search-btn" type="button">Search</button>
            </form>
        </div>

        <div id ="resultsContainer" class="resultsContainer">
            <?php

                //Establish connection
                $conn = new mysqli("localhost", "root", "", "myholiday");

                if ($conn->connect_error){
                    die("Connection failed: ". $conn->connect_error);
                }

                //Get input from search
                $userInput = filter_input(INPUT_GET, 'query', FILTER_SANITIZE_STRING);

                if($userInput){
 
                    $sql = "SELECT * FROM destination WHERE country LIKE '%".$userInput."%' OR location LIKE '%".$userInput."%' OR activity LIKE '%".$userInput."%' ORDER BY price";
                    
                    $result = $conn->query($sql);

                    //error handling
                    if(!$result){
                        die("Invalid query: ".$conn->error);
                    }

                    if ($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            echo "  <div class='destination-container'>
                                            <a href='". $row['siteUrl']."'><img class='destination-img' src='". $row['imgUrl']."' alt=''></a>
                                            <div class='destination-info'>
                                                <p class='location'>". $row['location'].", ". $row['country']."</p>
                                                <p class='activity'>". $row['activity']."</p>
                                                <span class='duration'>". $row['duration']."</span><span> day(s)</span><br><br>
                                                </span>From $</span><span class='price'>". $row['price']." </span>
                                                <button class='btn btn-primary add-location'><i class='bi bi-plus-circle'></i> Add</button>
                                            </div>
                                    </div>";
                        }
                    } else {
                        echo "<p class='searchFeedback'>No corresponding results for <b>\" ".$userInput ."\"</b></p>";
                    }
                } else{
                    //blank
                }
            ?>
        </div>

      
        <div class="trending-title-container">
            <hr>
            <h5 class="text-center">Trending now</h5>
        </div>
    
        
        <div class="trending-destinations" id="trending-destinations">  
            <?php
                // Establish connection with database
                $conn = new mysqli("localhost", "root", "", "myholiday");

                if ($conn->connect_error){
                    die("Connection failed: ". $conn->connect_error);
                }

                //sql query 
                $sql = "SELECT * FROM destination LIMIT 4 OFFSET 2";
                $result = $conn->query($sql);

                //error handling
                if(!$result){
                    die("Invalid query: ".$conn->error);
                }

                while($row = $result->fetch_assoc()){
                    echo "  <div class='destination-container'>
                                <a href='". $row['siteUrl']."'><img class='destination-img' src='". $row['imgUrl']."' alt=''></a>
                                <div class='destination-info'>
                                    <p class='location'>". $row['location'].", ". $row['country']."</p>
                                    <p class='activity'>". $row['activity']."</p>
                                    <span class='duration'>". $row['duration']."</span><span> day(s)</span><br><br>
                                    </span>From $</span><span class='price'>". $row['price']." </span>
                                    <button class='btn btn-primary add-location'><i class='bi bi-plus-circle'></i> Add</button>
                                </div>
                            </div>";
                }
            ?>
        </div>
    </div>

    <footer>
        <div class="container my-5">
            <footer>
                <hr>
                <p class="text-center text-muted">MyHoliday Travel Itinerary</p>
                <p class="text-center text-muted"> Made with 💙 by HR</p>   
            </footer>
        </div>
    </footer>
    
</body>
</html>