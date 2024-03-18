<?php
include 'handle/database.php';

// Fetch tweets from the database
$sql = "SELECT * FROM posts ORDER BY post_date DESC"; // Assuming your table is named 'posts'
$result = $conn->query($sql); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Twitter Clone</title>
    <link rel="stylesheet" href="assets/css/home.css" />
  </head>

  <body>
    <header>
      <h1>Welcome to Twitter Clone</h1>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <section id="tweet-form">
        <h2>Compose Tweet</h2>
        <form action="tweet.php" method="post">
          <input
            type="text"
            name="tweet_text"
            placeholder="Enter your tweet"
          /><br />
          <input type="submit" value="Post Tweet" />
        </form>
      </section>

      <section id="tweets">
        <h2>Tweets</h2>
        <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='tweet'>";
                    echo "<p class='tweet-text'>" . $row["post_text"] . "</p>";
                    echo "<p class='tweet-date'>" . $row["post_date"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No tweets found</p>";
            }
            $conn->close();
            ?>
      </section>
    </main>
  </body>
</html>
