<?php

include_once 'config/init.php';

?>

<?php
$job = new clsJob;

$template = new clsTemplate('templates/tmpJobSingle.php');

$job_id = isset($_GET['job']) ? $_GET['job'] : null;

$template->job = $job->getJob($job_id);

echo $template;