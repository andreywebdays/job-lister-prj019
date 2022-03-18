<?php

include_once 'config/init.php';

?>

<?php
$job = new clsJob;

$template = new clsTemplate('templates/tmpFrontpage.php');

$template->title = 'Latest Jobs';
$template->jobs = $job->getAllJobs();

echo $template;