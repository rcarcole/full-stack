<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Fer la llista</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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

<body class="text-center">>
<div class="jumbotron"> <!--style="background:red"-->
    <div class="container">
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
    </div>
</div>
</body>

</html>