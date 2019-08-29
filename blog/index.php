<?php
    session_start();
    $selectedLink = "blog/home";

    if(!isset($_SESSION['username'])) {
        header("Location: ../login.php");
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
        <link rel="stylesheet" href="../assets/css/blog.css">
    </head>
    <body onload="ShowPosts()">
        <?php require_once '../assets/inc/header.php'?>

        <section id="banner">
            <div class="container">
                <h1>Stageblog Michel Zuidema</h1>
                <p>Welkom op mijn stageverslag website, op deze website kan je mijn documentatie zien van elke dag die ik beleef bij het bedrijf 'Information Makers' te Alblasserdam. Om deze documentatie / blogs te zien, moet je rechtsboven inloggen.</p>
            </div>
        </section>

        <main>
            <div class="container">
                <section id="post-grid">
                    <!-- Data will be put in here by Javascript -->
                </section>
            </div>
        </main>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
        <script src="../assets/js/AjaxPosts.js"></script>
        <script src="../assets/js/main.js"></script>
    </body>
</html>