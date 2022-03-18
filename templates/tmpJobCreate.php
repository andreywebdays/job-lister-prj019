<?php include_once '../includes/incHeader.php'; ?>

<h2 class="page-header">Create Job Listing</h2>
<form method="POST" action="create.php">
    <div class="form-group">
        <label>Company</label>
        <input type="text" class="form-control" name="job_company">
    </div>
    <div class="form-group">
        <label>Category</label>
        <select name="category" class="form-control">
            <option value="0">Choose Category</option>
            <?php foreach($categories as $category): ?>
                <option value="<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Job Title</label>
        <input type="text" class="form-control" name="job_title">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="job_desc"></textarea>
    </div>
    <div class="form-group">
        <label>Location</label>
        <input type="text" class="form-control" name="job_location">
    </div>
    <div class="form-group">
        <label>Salary</label>
        <input type="text" class="form-control" name="job_salary">
    </div>
    <div class="form-group">
        <label>Contact User</label>
        <input type="text" class="form-control" name="job_contact_user">
    </div>
    <div class="form-group">
        <label>Contact Email</label>
        <input type="text" class="form-control" name="job_contact_email">
    </div>
    <input type="submit" class="btn btn-default" value="Submit" name="submit">
    <br>
    <br>
</form>

<?php include_once '../includes/incFooter.php'; ?>