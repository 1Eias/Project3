<?php require_once("header.php"); ?>

<body>

    <?php
    if (isset($_POST["btn_add_post"])) {
        $Post_Text = $_POST['post_text'];

        if ($Post_Text != "") {

            $sql = "INSERT INTO posts (post_text,post_date) VALUES(`$Post_Text`, now())";
            $result = mysqli_query($con, $sql);
        }
    }
    ?>

<div class="grid-container">
    <div class="main">
        <p class="page_title">Home</p>

        <div class="tweet_box_tweet_add">
            <div class="tweet_left">
                <img src="images/avatar.png" alt="">
            </div>
        </div>
    </div>
</div>