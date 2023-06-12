<header>
    <a href="inscription.php">S'inscrire</a>
    <a href="index.php">Se connecter</a>
    
</header>
<style>
    header a {
    text-decoration: none;
    color: white;
    font-size: 20px;
    padding: 20px;
    background-color: black;
    transition: 0.5s;
}

header a:hover {
    background-color: white;
    color: black;
    transition: 0.5s;
}

header {
    display: flex;
    background-color: black;
}

body {
    margin: 0px;
    box-sizing: border-box;
}
</style>
<script>
    let host = window.location.hostname;
    document.querySelectorAll("a").forEach(e => {
        console.log(e);
        e.href = "http://"+host+"/conso-eau-final/"+e.getAttribute("href");
    });
</script>