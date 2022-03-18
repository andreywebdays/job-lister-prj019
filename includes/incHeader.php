<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/bootswatch.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <title>Job Lister</title>
</head>
<body>
    <div class="container">
        <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation"><a href="index.php">Home</a></li>
                <li role="presentation"><a href="create.php">Create Listing</a></li>
            </ul>
        </nav>
        <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>
    </div>

<?php showMessage(); ?>