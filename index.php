<?php

include_once 'config/init.php';

?>

<?php
$job = new clsJob;

$template = new clsTemplate('templates/tmpFrontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if ($category) 
{
    $template->title = 'Jobs in ' . $job->getCategory($category)->category_name;
    $template->jobs = $job->getByCategory($category);
}
else
{
    $template->title = 'Latest Jobs';
    $template->jobs = $job->getAllJobs();
}

$template->categories = $job->getCategories();

echo $template;