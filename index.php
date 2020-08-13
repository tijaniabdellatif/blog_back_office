<?php

include 'functions/main.php';

$pages = scandir("pages/");
if (isset($_GET['page']) && !empty($_GET['page'])) {
    // var_dump($page);
    $page = $_GET['page'];
    if (in_array($page . '.php', $pages)) {
        $page = $_GET['page'];
    } else {
        $page = '404';
    }
} else {

    $page = 'home';
}

//chargement des fichiers

$func = scandir('functions/');

if (in_array($page . '.func.php', $func)) {
    include 'functions/' . $page . '.func.php';
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <div class="container">

        <?php include 'pages/' . $page . '.php'; ?>

    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>