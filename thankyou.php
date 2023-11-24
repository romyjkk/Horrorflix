<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank you!</title>
    <link rel="icon" type="image/x-icon" href="static/images/favicon.png">
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<main>
    <section class="follow-up">
        <h1>Thank you for joining our giveaway, <span><?=$_POST["name"];?></span>!</h1>
        <h2>Make sure to check the provided email, <span><?=$_POST["email"];?></span>, for updates!</h2>
        <p>We will contact you when the dark Lord is ready for your sacrifice, uh, when we choose a winner!</p>

        <img class="gif" src="static/images/pale-man.gif" alt="Pale man from Pan's Labyrinth gif">

        <a id="button" href="index.php">Go back</a>
    </section>
</main>

<script src="static/js/script.js"></script>
</body>
</html>