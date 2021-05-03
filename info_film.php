<?php include 'inc/header.php'; ?>


    <nav class="title_page">
        <a href="selection.php">Revenir à la séléction de films</a>
    </nav>


    <img class="film_poster_spe" src="images/affiche/portrait_de_la_jeune_fille_en_feu.jpg"
         alt="portrait_de_la_jeune_fille_en_feu">
    <section class="block_movie">
        <h3 class="title_general">Portrait de la jeune fille en feu</h3>
        <p class="synopsis">Synopsis :1770. Marianne est peintre et doit réaliser le portrait de mariage d’Héloïse, une
            jeune femme
            qui
            vient de quitter le couvent. Héloïse résiste à son destin d’épouse en refusant de poser. Marianne va
            devoir
            la peindre en secret. Introduite auprès d’elle en tant que dame de compagnie, elle la regarde. </p>
        <p class="real_act"> De : Céliane Sciamma <br>
            Avec : Noémie Merlant, Adèle Haenel, Luàna Bajrami <br>
            Nationalité : Français <br> Récompense : César de la meilleure photographie</p>
        <h2 class="title_reservation">Réservez votre seance!</h2>
        <form method="post" action="page.php">
            <p class="reservation_date">
                <label for="session">Choix de votre séance</label>
                <select name="session" id="session">
                    <option value="first_session">6 août - 18h</option>
                    <option value="second_session">7 août - 20h</option>
                </select>
            </p>
            <input class="button" type="submit" value="Réservez !"/>
        </form>
    </section>


<?php include 'inc/footer.php'; ?>