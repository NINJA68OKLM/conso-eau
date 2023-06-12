<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script src="assets/js/jquery-cookie-master/src/jquery.cookie.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Espace client</title>
</head>
<body>
<?php include("assets/header_client.php"); ?>
    <main>
        <table>
            <?php
            include("bdd/connection.php");
            include("bdd/consos_journ.php");
            // $mysqli->close();
            ?>
        </table>
    </main>
</body>
</html>