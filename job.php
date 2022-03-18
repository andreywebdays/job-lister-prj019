<?php

include_once 'config/init.php';

?>

<?php
$job = new clsJob;

if (isset($_POST['del_id'])) 
{
    $del_id = $_POST['del_id'];

    if ($job->deleteJob($del_id)) 
    {
        redirect('index.php', 'Job Deleted', 'success');
    }
    else
    {
        redirect('index.php', 'Job Not Deleted', 'error');
    }
}

$template = new clsTemplate('templates/tmpJobSingle.php');

$job_id = isset($_GET['job']) ? $_GET['job'] : null;

$template->job = $job->getJob($job_id);

echo $template;