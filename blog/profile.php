<?php
    require_once '../assets/db/functions.php';
    require_once '../assets/db/database.class.php';
    require_once '../assets/db/users/user.inc.php';
    require_once '../assets/db/users/userAction.inc.php';

    session_start();
    $selectedLink = "blog/profile";

    if(!isset($_SESSION['username'])) {
        header("Location: ../login.php");
    }

    if(isset($_GET['id'])) {
        $id = numhash($_GET['id']);
        $user = new userAction();
        $userdetails = $user->ShowUserDetails($id);
        $userposts = $user->ShowPostsOfUser($id);

        $username = $userdetails[0]['naam'];
        $level = $userdetails[0]['level'];
    }
?>
<html>
    <head>
        <title>MichelZuidema | Stage Blog</title>

        <!-- Meta Tags -->
        <meta charset="UTF-8">
        <meta name="description" content="Stage logboek van Michel Zuidema">
        <meta name="author" content="Michel Zuidema">
        <meta name="viewport" content="width=device-width">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/blog.css"
    </head>
    <body>
        <?php require_once '../assets/inc/header.php'?>

        <section id="banner">
            <div class="container">
                <h1>Profiel van <?php echo $username; ?></h1>
                <p>
                    <?php
                        if($level == 0) {
                            echo '<p class="light-gray profile_level">Bezoeker</p>';
                        } else if($level == 1) {
                            echo '<p class="light-gray profile_level">Medewerker Information Makers</p>';
                        } else if($level == 2) {
                            echo '<p class="light-gray profile_level">Admin</p>';
                        } else {
                            echo '<p class="light-gray profile_level">Er is iets misgegaan!</p>';
                        }
                    ?>
                </p>
            </div>
        </section>

        <main>
            <div class="container">
                <h1>Berichten van <i><?php echo $username ?></i>:</h1>
                <section id="post-grid">
                    <?php
                        foreach ($userposts as $id => $post) {
                            echo "<section class='post'>";
                            echo "<h2>" . $post['post_title'] . "</h2>";

                            if($post['created_date'] != $post['last_updated'] && !empty($post['last_updated'])) {
                                echo "<p class='p_time_author'>" . $post['created_date'] . ", <b>UPDATED AT " . $post['last_updated'] . "</b> <a href='profile.php?id=" . $author_id . "'>" . $author_name . "</a></p>";
                            } else {
                                echo "<p class='p_time_author'>" . $post['created_date'] . ", <a href='profile.php?id=" . $author_id . "'>" . $author_name . "</a></p>";
                            }

                            echo "<p class='content'>" . $post['post_content'] . "</p>";
                            echo "</section>";
                        }
                    ?>
                </section>
            </div>
        </main>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
        <script src="../assets/js/AjaxPosts.js"></script>
    </body>
</html>