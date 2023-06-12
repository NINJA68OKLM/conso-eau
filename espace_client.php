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
    <title>Espace client</title>
</head>
<style>
    table, tr, td, th {
        border: 1px solid #000000;
    }
    table {
        max-width: 757px;
    }
</style>
<body>
<?php include("assets/header_client.php"); ?>
    <main class="client">
        <table>
            <?php
            include("bdd/connection.php");
            include("bdd/table.php");
            // $mysqli->close();
            ?>
        </table>
    </main>
</body>
</html>