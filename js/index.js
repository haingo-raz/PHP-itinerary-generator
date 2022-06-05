$(document).ready(function() {
    
    //add an item to the planner
    $(document).on('click', ".add-location", function(){

        var location =  $(this).siblings(".location").html(); 
        var activity = $(this).siblings(".activity").html();
        var duration = $(this).siblings(".duration").html();
        var price = $(this).siblings(".price").html();

        //send data
        $.ajax({
            url: "addDestination.php",
            type: "POST",
            data: {
                location: location,
                activity: activity,
                duration: duration,
                price: price
            },
            success: function(response) {
                alert("Destination succesfully added!");
            }
        });
    });

    //Delete an item from the planner
    $(document).on('click', ".close", function(){

        var location =  $(this).siblings().find(".addedLocation").html(); 
        var duration = $(this).siblings().find(".addedDuration").html();
        var activity = $(this).siblings().find(".addedActivity").html();
        var price = $(this).siblings().find(".addedPrice").html();

        //send data 
        $.ajax({
            url: "deleteDestination.php",
            type: "POST",
            data: {
                location: location,
                duration: duration,
                activity: activity,
                price: price
            },
            success: function(response) {
                alert("Destination successfully deleted");
            }
        });
        window.location.reload();
    });
});
    