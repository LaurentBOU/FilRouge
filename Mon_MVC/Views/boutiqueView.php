<?php ob_start() ?>

<!-------Main------->


<?php
$titre = "Page d'accueil";
$content = ob_get_clean();
require_once "Views/template.php";
