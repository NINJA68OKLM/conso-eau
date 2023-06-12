<?php
session_start();
session_id();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>Connexion</title>
</head>

<body>
    <?php include("assets/header.php"); ?>
    <section>
        <main>
            <div class="part1">
                <h1>Connectez vous</h1>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="text" name="name" id="name" placeholder="Votre nom" value="<?php if (!empty($_POST['name'])) {
                    echo $_POST['name'];
                    } ?>"> <br>
                    <input type="text" name="firstname" id="firstname" placeholder="Votre prénom" value="<?php if (!empty($_POST['firstname'])) {
                    echo $_POST['firstname'];
                    } ?>"> <br>
                    <input type="text" name="postalcode" id="postalcode" placeholder="Votre code postal" value="<?php if (!empty($_POST['postalcode'])) {
                    echo $_POST['postalcode'];
                    } ?>"> <br>
                    <input type="submit" name="ok" id="submit">
                </form>

                <?php
                if (isset($_POST['ok'])) {
                    $ok = $_POST['ok'];
                    $name = $_POST['name'];
                    $firstname = $_POST['firstname'];
                    $postalcode = $_POST['postalcode'];
                    if (empty($name) | empty($firstname) | empty($postalcode)) {
                        echo "Remplissez tous les champs du formulaire !";
                    }
                    if (!empty($name) && !empty($firstname) && !empty($postalcode)) {
                        setcookie("nom", $name, time() + 3600);
                        setcookie("prenom", $firstname, time() + 3600);
                        setcookie("code_postal", $postalcode, time() + 3600);
                        $_SESSION['nom'] = $name;
                        $_SESSION['prenom'] = $firstname;
                        $_SESSION['code_postal'] = $postalcode;
                        include("bdd/connection.php");
                        include("bdd/connection_bdd.php");
                    }
                }
                ?>
            </div>
            <div class="part2">
                <img src="assets/img/eau.jpeg" alt="glouglou">
            </div>
        </main>
    </section>
</body>

</html>