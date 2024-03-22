<?php
// update.php

// Include database connection
include('common/header.php');
include('common/connection.php');

// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Retrieve form data and sanitize
    $music_id = $_POST['music_id'];
    $Album_title = mysqli_real_escape_string($connection, $_POST['Album_title']);
    $Title = mysqli_real_escape_string($connection, $_POST['Title']);
    $Artist = mysqli_real_escape_string($connection, $_POST['Artist']);
    $Genre = mysqli_real_escape_string($connection, $_POST['Genre']);
    $Release_date = $_POST['Release_date'];
    $Length = $_POST['Song_length'];
    $Album_cover = mysqli_real_escape_string($connection, $_POST['Album_cover']);

    // Update query
    $query = "UPDATE music SET Album_title='$Album_title', Title='$Title', Artist='$Artist', Genre='$Genre', Release_date='$Release_date', Song_length='$Length', Album_cover='$Album_cover' WHERE music_id='$music_id'";

    // Execute query
    $result = mysqli_query($connection, $query);

    // Check if update was successful
    if($result) {
        // Redirect back to the page displaying the updated information
        header("Location: index.php?music_id=$music_id");
        exit();
    } else {
        // Log error instead of showing it to the user
        error_log("Error updating record: " . mysqli_error($connection));
        echo "An error occurred while updating the record. Please try again later.";
    }
}

// Close database connection
mysqli_close($connection);
?>
