<?php include_once '../includes/incHeader.php'; ?>

<h2 class="page-header"><?php echo $job->job_title; ?> (<?php echo $job->job_location; ?>)</h2>
<small>Posted By <?php echo $job->job_post_date; ?> on <?php echo $job->job_contact_user; ?></small>
<hr>
<p class="lead"><?php echo $job->job_desc; ?></p>
<ul class="list-group">
    <li class="list-group-item"><strong>Company:</strong> <?php echo $job->job_company; ?></li>
    <li class="list-group-item"><strong>Salary:</strong> <?php echo $job->job_salary; ?></li>
    <li class="list-group-item"><strong>Contact Email:</strong> <?php echo $job->job_contact_email; ?></li>
</ul>
<br>
<br>
<a href="index.php">Go Back</a>
<br>
<br>

<?php include_once '../includes/incFooter.php'; ?>