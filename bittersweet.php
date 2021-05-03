<?php include 'inc/header.php'; ?>


<nav class="title_page">
    <a href="selection.php">Revenir à la séléction de films</a>
</nav>


<body>
<img class="film_poster_spe" src="images/affiche/bittersweet_life.jpg" alt="portrait_de_la_jeune_fille_en_feu">
<section class="block_movie">
    <h3 class="title_general">A bittersweet life</h3>
    <p class="synopsis">Synopsis :Un chef de gang suspecte sa petite amie Hee Su d'avoir une liaison avec un autre
        homme. Il demande à
        son bras droit, Sun Woo, de suivre Hee Su et de l'éliminer s'il la surprend en galante compagnie.</p>
    <p class="real_act">De : Jee-Woon Kim <br>
        Avec : Lee Byung-Hun, Jung-Min Hwang, Yu-mi Jeong<br>
        Nationalité : Sud-coréen<br>
        Récompenses et séléctions : Séléction officiel du festival de Cannes 2005</p>
    <h2 class="title_reservation">Réservez votre seance!</h2>
    <form method="post" action="page.php">
        <p class="reservation_date">
            <label for="session">Choix de votre séance</label>
            <select name="session" id="session">
                <option value="first_session">5 août - 18h</option>
                <option value="second_session">8 août - 20h</option>
            </select>
        </p>
        <input class="button" type="submit" value="Réservez!"/>
    </form>
</section>


<?php include 'inc/footer.php'; ?>
