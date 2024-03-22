<?php
// update.php

// Include database connection
include('common/header.php');
include('common/connection.php');

// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Retrieve form data and sanitize

    // var_dump($_POST);
    
    $Album_title = mysqli_real_escape_string($connection, $_POST['Album_title']);
    $Title = mysqli_real_escape_string($connection, $_POST['Title']);
    $Artist = mysqli_real_escape_string($connection, $_POST['Artist']);
    $Genre = mysqli_real_escape_string($connection, $_POST['Genre']);
    $Release_date = $_POST['Release_date'];
    $Song_length = $_POST['Song_length'];
    $Album_cover = mysqli_real_escape_string($connection, $_POST['Album_cover']);



    // Add query
    $query = "INSERT INTO music (Album_title, 
                                Title, 
                                Artist, 
                                Genre, 
                                Release_date, 
                                Song_length, 
                                Album_cover) 
                    VALUES ('$Album_title', 
                    '$Title', 
                    '$Artist',
                    '$Genre', 
                    '$Release_date', 
                    '$Song_length', 
                    '$Album_cover')";

    // Execute query
    $result = mysqli_query($connection, $query);

    // Check if update was successful
    if($result) {
        // Redirect back to the page displaying the updated information
        header("Location: index.php?music_id=$music_id");
        exit();
    } else {
        // Log error instead of showing it to the user
        echo("Error updating record: " . mysqli_error($connection));
        echo "An error occurred while updating the record. Please try again later.";
    }
}

// Close database connection
mysqli_close($connection);
?>
