<?php

include_once 'config/init.php';

?>

<?php

$template = new clsTemplate('templates/tmpFrontpage.php');

$template->title = 'Latest Jobs';

echo $template;