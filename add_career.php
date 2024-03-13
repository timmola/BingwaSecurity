<?php
// Include database configuration
include_once 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the connection is established
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Escape user inputs to prevent SQL injection
    $title = mysqli_real_escape_string($link, $_POST['title']);
    $description = mysqli_real_escape_string($link, $_POST['description']);

    // Attempt to insert career into database
    $sql = "INSERT INTO careers (title, description) VALUES ('$title', '$description')";

    if (mysqli_query($link, $sql)) {
        echo "Career added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }
}

// Close database connection
mysqli_close($link);
?>
