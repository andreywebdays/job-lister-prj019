<?php include_once 'config/init.php'; ?>

<?php
$job = new clsJob;

$job_id = isset($_GET['job']) ? $_GET['job'] : null;

if (isset($_POST['submit'])) 
{
    // create data array
    $data = array();
    $data['job_title'] = $_POST['job_title'];
    $data['job_company'] = $_POST['job_company'];
    $data['category_id'] = $_POST['category'];
    $data['job_desc'] = $_POST['job_desc'];
    $data['job_location'] = $_POST['job_location'];
    $data['job_salary'] = $_POST['job_salary'];
    $data['job_contact_user'] = $_POST['job_contact_user'];
    $data['job_contact_email'] = $_POST['job_contact_email'];

    if ($job->updateJob($job_id, $data)) 
    {
        redirect('index.php', 'Your job has been updated', 'success');
    }
    else
    {
        redirect('index.php', 'Something went wrong', 'error');
    }
}

$template = new clsTemplate('templates/tmpJobEdit.php');

$template->job = $job->getJob($job_id);

$template->categories = $job->getCategories();

echo $template;