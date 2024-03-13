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

                <div class="tweet_body">
                    <form method="post" enctype="multipart/form-data">
                        <textarea name="post_text" id="" cols="100%" rows="3"
                            placeholder="What's happening?"></textarea>
                        <div class="tweet_icons_wrapper">
                            <div class="tweet icons add">
                                <i class="far fa-image"></i>
                                <i class="fa fa-chart-bar"></i>
                                <i class="far fa-smile"></i>
                                <i class="far fa-calendar-alt"></i>
                            </div>
                            <button class="button_tweet" type="submit" name="btn_add_post">Tweet</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php require_once "tweet.php"; ?>
        </div>
    </div>