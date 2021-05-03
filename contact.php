<?php include 'inc/header.php'; ?>



<h2 class="title_page">Besoin d'un renseignement ?</h2>

<section class="practicle_informations">
    <h3>Localisation</h3>

    <p>Le festival se déroulera dans la parc Monceau, situé dans le 8ème arrondissement de Paris, plus précisément dans
        le
        quartier de l'Europe.
        Ce parc est accessible via la ligne 2 du métro (arrêt Monceau), mais également par des lignes de bus, notamment
        la
        ligne 20.</p>

    <h3>Horaires</h3>

    <p>Les films commencent tout à les jours à 18h30, les dernières projections se terminent à 00h.</p>

    <h3>Tarifs</h3>

    <p>Notre festival est accessible à tous, l'ensemble des projections sont gratuites.</p>

    <h3>Pré-inscription</h3>

    <p>La seule limite de notre évènement est le nombre de place !
        Il est donc impératif de sélectionner et de réserver votre place <a href="selection.php">ici</a></p>

    <h3>Programmation</h3>

    <p>Tout les détails concernant le programme sont disponible sur cette <a href="selection.php">page.</a></p>


</section>

<h2 class="title_general">Pour plus d'informations, contactez nous via ce formulaire !</h2>

<form method="post" action="page.php">
    <div class="form_organization">
        <div class="info_contact">

            <label for="lastname">
                <input type="text" name="lastname" id="lastname" placeholder="Nom">
            </label>

            <label for="firstname">
                <input type="text" name="firstname" id="firstname" placeholder="Prénom">
            </label>

            <label for="email">
                <input type="email" name="email" id="email" placeholder="Adresse e-mail">
            </label>


            <label for="phone_number">
                <input type="number" name="phone_number" id="phone_number" placeholder="Numéro de téléphone" min="10"
                       max="10">
            </label>
            <p class="indication">* sous la forme 0000000000</p>

        </div>


        <label for="message" class="message">
            <textarea name="message" id="message" rows="6" cols="35">Votre message ! </textarea>
        </label>


    </div>

    <input class="button" type="submit" value="Envoyez !"/>


</form>

<?php include 'inc/footer.php'; ?>

						