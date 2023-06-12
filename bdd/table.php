<?php
$requete= "SELECT * FROM consommation";
$result = $conn->query($requete);

echo "<br>";

if ($result) {
    $tableau = mysqli_fetch_assoc($result);

    echo "<tr style='background: #D6D6D6;'>";
    echo "<th>Date</th>";
    echo "<th>Jour dans la semaine</th>";
    echo "<th>Début relève</th>";
    echo "<th>Nombre de la relève</th>";
    echo "<th>Fin relève</th>";
    echo "<th>Conso init</th>";
    echo "<th>Conso final</th>";
    echo "<th>Consommation journalière</th>";
    echo "</tr>";

    $dreleve = false;
    $freleve = false;
    $releve = false;

    while ($tableau = mysqli_fetch_assoc($result)) {

        $d = strtotime($tableau['debut']);
        $f = strtotime($tableau['fin']);

        if ($f > strtotime("23:30:00")) {
            $dreleve = true;
        } else {
            $dreleve = false;
        }

        if ($d < strtotime("00:30:00")) {
            $freleve = true;
        } else {
            $freleve = false;
        }

        if ($dreleve == true && $freleve == true) {
            $releve = true;
        } else {
            $releve = false;
        }


        echo "<tr class='row'>";
        foreach($tableau as $cle => $val) {

            // echo "<td class='$cle' style=''>$val</td>";
            ?>
            <td class="<?= $cle ?> <?php if (!$releve) { echo "sub-orange"; } ?>"> <?= $val ?> </td>
            <?php
        }
        echo "</tr>";
    }
}
else {
    echo "Aucun tableau n'a été trouvé pour votre situation !";
}


?>

<script defer>
    document.querySelectorAll(".Column_8").forEach(e => {
        e.className = "conso_journ";
    });

    // Création du tableau des consommations journalières
    let consos_journ = [];
    // Affichage de la consommation journalière
    document.querySelectorAll("tr.row").forEach(e => {

        let conso_init = parseInt(e.children[5].innerText);
        let conso_final = parseInt(e.children[6].innerText);
        let conso_journ = (conso_final - conso_init);

        e.children[7].innerText = conso_journ;

        // Stockage de la consommation journalière dans un tableau
        let jour = e.children[1].innerText;
        // consos_journ.push(conso_journ);
        // consos_journ[jour] = conso_journ;
        // consos_journ.push(jour);
        consos_journ[jour] = conso_journ;
    });
    console.log(consos_journ);
    // consos_journ = JSON.stringify(consos_journ);
    $.cookie("consos_journ", consos_journ);
    // console.log(consos_journ);
    console.log($.cookie("consos_journ"));

    let suivant = document.querySelector(".Date");
    // let dates = Array.from(document.querySelectorAll(".Date"));
    let dates = [];
    document.querySelectorAll(".Date").forEach((e, i) => {
        e.setAttribute("id", i);
        // Changement de l'heure affiché en format anglaise au format français
        let date = e.innerText;
        datee = new Date(date);
        dates.push(datee);
        date = date.split("/");
        date = `${date[1]}/${date[0]}/${date[2]}`;
        e.innerText = date;

        let ii = i++;
    });

    // Attribution de la classe "orange" au parent des colonnes concernés
    document.querySelectorAll(".Date.sub-orange").forEach(e => {
        e.parentElement.className += " orange";
    });

    // DTEs
    dates.forEach((e, i) => {
        let day = e.getDate();
        let month = e.getMonth();
        let j = i+1;
        const joursuivant = dates[i+1];
        if ((joursuivant.getDate()) !== (day+1)) {

            if (((joursuivant.getDate()) == 1 && (day == 30 || day == 31))) {
                // ((joursuivant.getDate()) == 1 && (day == 28 || day == 29) && (month == 3))
            } else {
                const isuivant = i + 1;
                document.querySelector(".Date[id='"+isuivant+"']").parentElement.classList.add("joursaute");
            }
        }
    });


</script>