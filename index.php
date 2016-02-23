<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet/main.css">
    <link rel="icon" type="image/png" href="resources/favicon.png" />
    <title>8INF830 - Tim Burton</title>
</head>

<body>
    <header>
        <nav>
            <h2>Timothy Walter Button</h2>
            <span class="glyphicon glyphicon-log-in" aria-hidden="true"><b> Connexion</b></span>
        </nav>
    </header>

    <div id="main">
        <section>
            <?php
                include_once "pages/admin_connection.php";
            ?>
        </section>
    </div>

    <footer>
        <p>
            Copyright © 2016
        </p>
    </footer>
</body>

</html>

<script>
    var ban = document.querySelector("header");
    window.onscroll = function() {
        if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
            ban.style.backgroundPosition = "bottom";
        } else {
            ban.style.backgroundPosition = "top";
        }
    };
</script>
