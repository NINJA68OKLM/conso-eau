<header>
    <a href="index.php">Se déconnecter</a>
    <a href="espace_client.php">Espace client</a>
    <a href="consos_journ.php">Consommations journalières</a>
</header>

<script>
    let host = window.location.hostname;
    document.querySelectorAll("a").forEach(e => {
        e.href = "http://"+host+"/conso-eau-final/"+e.getAttribute("href");
    });
</script>