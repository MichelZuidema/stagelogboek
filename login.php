<?php
    $selectedLink = "login";
    session_start();

    if($_SESSION['errormsg']) {
        echo "ERROR";
        echo $_SESSION['errormsg'];
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
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body>
        <?php require_once 'assets/inc/header.php'?>

        <section id="banner">
            <div class="container">
                <h1>Login / Registreer</h1>
                <p>Welkom op mijn stageverslag website, op deze website kan je mijn documentatie zien van elke dag die ik beleef bij het bedrijf 'Information Makers' te Alblasserdam. Om deze documentatie / blogs te zien, moet je rechtsboven inloggen.</p>
            </div>
        </section>

        <form action="assets/db/loginProcess.php" method="POST">
            <input type="text" name="inputUsername">
            <input type="password" name="inputPassword">
            <input type="submit" value="Submit" name="submit">
        </form>
    </body>
</html>