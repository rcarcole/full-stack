<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Fer la llista</title>
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145376060-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-145376060-2');
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body>

    <?php
    session_start();
    if(isset($_SESSION["login"])){
        require_once "llista.php";
        echo '<script type="text/javascript" src="app.js"></script>';
    }
    else{
        require_once "log-in.php";
    }
    ?>

</body>

</html>