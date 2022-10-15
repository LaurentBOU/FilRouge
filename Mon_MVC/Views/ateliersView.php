<?php ob_start() ?>

<!-------Main-------->
<div class="ateliers-container">
    <h1>
        <img src="<?= URL ?>Public/Assets/img/Page-en-construction.jpg" class="buildPage" />
    </h1>
</div>

<?php
$titre = "Page d'accueil";
$content = ob_get_clean();
require_once "Views/template.php";
