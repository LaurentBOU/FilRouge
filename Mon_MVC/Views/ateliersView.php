<?php ob_start() ?>

<!-------Main-------->
<div class="ateliers-container">
    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/DyfckhBMWC8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<?php
$titre = "Page d'accueil";
$content = ob_get_clean();
require_once "Views/template.php";
