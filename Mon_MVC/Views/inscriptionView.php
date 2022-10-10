<?php ob_start() ?>

<!---------Header-------->
<h1>Formulaire d'inscription</h1>

<!---------Main---------->
<form action="">
    <fieldset>
        <legend>Vos coordonnées :</legend>
        <p class="para01">
            Complétez le formulaire. Les champs marqués par <em>*</em> sont<em> obligatoires</em>.
        </p>
        <br /><br />
        <!-- Titre du fieldset -->

        <label for="">Civilité<em>*</em> :</label>
        <input type="radio" name="css" id="mademoiselle" value="mademoiselle" />
        <label for="mademoiselle" class="inline">Mademoiselle</label>
        <input type="radio" name="css" id="madame" value="madame" />
        <label for="madame" class="inline">Madame</label>
        <input type="radio" name="css" id="monsieur" value="monsieur" />
        <label for="monsieur" class="inline">Monsieur</label><br />

        <label for="nom">Votre nom<em>*</em> :</label>
        <input type="text" name="nom" id="nom" />

        <label for="prenom">Votre prénom<em>*</em> :</label>
        <input type="text" name="prenom" id="prenom" /><br />

        <label for="telephone">Votre Numéro de téléphone<em>*</em> :</label>
        <input id="telephone" type="tel" placeholder="xxxxxxxxxx" pattern="[0-9]{10}" /><br />

        <label for="date">Date de Naissance<em>*</em> :</label>
        <input type="date" name="date" id="date" /><br />

        <label for="mail">Votre E-mail<em>*</em> :</label>
        <input type="email" name="mail" id="mail" placeholder="Entrez votre adresse mail" required="" pattern="[a-zA-Z]*.[a-zA-Z]*@" /><br />

        <label for="adresse">Votre adresse :</label>
        <input type="text" name="adresse" id="adresse" /><br />

        <label for="complement-adresse">Complément d'adresse :</label>
        <input type="text" name="complement-adresse" id="complement-adresse" /><br />

        <label for="code-postal">Votre Code Postal :</label>
        <input type="number" name="code-postal" id="code-postal" />

        <label for="ville">Votre Ville :</label>
        <input type="text" name="ville" id="ville" />

        <label for="pays">Votre Pays :</label>
        <input type="text" name="pays" id="pays" />
    </fieldset>

    <p><input type="submit" value="Soummettre" /></p>
</form>
<?php
$titre = "Page d'accueil";
$content = ob_get_clean();
require_once "template.php";
