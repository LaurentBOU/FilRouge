<?php ob_start() ?>

<!---------Header-------->
<h1 class="inscriptionForm">Formulaire d'inscription</h1>

<!---------Main---------->
<form action="">
    <fieldset>
        <legend>Vos coordonnées :</legend>
        <p class="para01">
            Complétez le formulaire. Les champs marqués par <em>*</em> sont <em>obligatoires</em>.
        </p>
        <br /><br />
        <!-- Titre du fieldset -->

        <label for="avatar">Avatar :</label>
        <input type="image" name="avatar" id="avatar" /><img src="..." class="rounded-circle border border-dark" alt="avatar"><br>
        <strong>Image en jpg,jpeg,png,svg,webp,gif. Pas plus de 1Mo</strong><br>

        <label for="civilite">Civilité<em>*</em> :</label>
        <input type="radio" name="civilite" id="mademoiselle" value="mademoiselle" />
        <label for="mademoiselle" class="inline">Mademoiselle</label>
        <input type="radio" name="civilite" id="madame" value="madame" />
        <label for="madame" class="inline">Madame</label>
        <input type="radio" name="civilite" id="monsieur" value="monsieur" />
        <label for="monsieur" class="inline">Monsieur</label><br />

        <label for="nom">Votre nom<em>*</em> :</label>
        <input type="text" name="nom" id="nom" />

        <label for="prenom">Votre prénom<em>*</em> :</label>
        <input type="text" name="prenom" id="prenom" /><br />

        <label for="date_naissance">Date de Naissance<em>*</em> :</label>
        <input type="date" name="date_naissance" id="date_naissance" /><br />

        <label for="tel">Votre Numéro de téléphone<em>*</em> :</label>
        <input id="tel" type="tel" placeholder="xxxxxxxxxx" pattern="[0-9]{10}" /><br />

        <label for="mail">Votre E-mail<em>*</em> :</label>
        <input type="email" name="mail" id="mail" placeholder="Entrez votre adresse mail" required="" pattern="[a-zA-Z]*.[a-zA-Z]*@" /><br />

        <label for="adresse">Votre adresse :</label>
        <input type="text" name="adresse" id="adresse" /><br />

        <label for="complement_adresse">Complément d'adresse :</label>
        <input type="text" name="complement_adresse" id="complement_adresse" /><br />

        <label for="code_postal">Votre Code Postal :</label>
        <input type="number" name="code_postal" id="code_postal" />

        <label for="ville">Votre Ville :</label>
        <input type="text" name="ville" id="ville" />

        <label for="pays">Votre Pays :</label>
        <input type="text" name="pays" id="pays" /><br><br>
    </fieldset>
    <fieldset>
        <legend>Paramètres de Connexion :</legend>

        <label for="pseudo">Votre pseudo<em>*</em> :</label>
        <input type="text" name="pseudo" id="pseudo" />

        <label for="password">Votre mot de passe<em>*</em> :</label>
        <input type="text" name="password" id="password" placeholder="Entrez votre mot de passe" required />

    </fieldset>
    <p><input type="submit" value="Soumettre" /></p>
</form>

<?php
$titre = "Page d'accueil";
$content = ob_get_clean();
require_once "Views/template.php";
