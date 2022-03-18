<?php include_once 'config/init.php'; ?>

<?php
$job = new clsJob;

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

    if ($job->createJob($data)) 
    {
        redirect('index.php', 'Your job has been listed', 'success');
    }
    else
    {
        redirect('index.php', 'Something went wrong', 'error');
    }
}

$template = new clsTemplate('templates/tmpJobCreate.php');

$template->categories = $job->getCategories();

echo $template;