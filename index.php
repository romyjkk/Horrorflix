<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horrorflix</title>
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
    <section>
        <form id="form" method="post" action="thankyou.php">
            <h1>Welcome to <span>Horrorflix!</span>
            <img class="pennywise" src="static/images/pennywise.png" alt="Pennywise from IT"></h1>

            <legend>
                Tell us about your favourite horror movie(s) and win a
                <span>free*</span>
                subscription!
                <div class="popup">*No money involved, you just have to pay with your soul!</div>
            </legend>

            <fieldset>
                <div class="form-field">
                    <label for="name">What's your full name?</label>
                    <input type="text" name="name" class="field">
                </div>

                <div class="form-field">
                    <label for="email">What's your email address?</label>
                    <input type="text" name="email" class="field">
                </div>

                <div class="form-field">
                    <label for="age">What's your date of birth?</label>
                    <input type="date" name="age" class="field" pattern="\d{4}-\d{2}-\d{2}">
                </div>

                <div class="form-field">
                    <label for="description">Tell us all about your favorite movie(s)!</label>
                    <textarea type="text" name="description" placeholder="Max 500 characters." maxlength="500" class="field"></textarea>
                </div>

                <input type="submit" id="button" value="submit" action="thankyou.php">
            </fieldset>
        </form>

    </section>

        <img class="cube" src="static/images/hellraiser-cube.png" alt="Puzzle cube from Hellraiser">
        <img class="pinhead" src="static/images/pinhead.png" alt="Pinhead from Hellraiser">

    <img class="alien" src="static/images/xenomorph.png" alt="Xenomorph from the Alien movies">
    <img class="valak" src="static/images/valak.png" alt="Valak from the Conjuring/the Nun">
</main>

<script src="static/js/script.js"></script>
<script src="static/js/music.js"></script>
</body>
</html>