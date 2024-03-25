<?php
include 'database.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tweetText = mysqli_real_escape_string($conn, $_POST['tweet_text']);

    // Insert tweet into database
    $sql = "INSERT INTO posts (post_text, post_date) VALUES ('$tweetText', NOW())";
    if ($conn->query($sql) === TRUE) {
        echo "Tweet posted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>