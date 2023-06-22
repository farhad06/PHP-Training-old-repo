<?php session_start(); ?>
<?php include('header.php'); ?>
<header class="modal-header">
    <h2>Education Details</h2>
</header>

<form action="language.php" method='post'>
    <div class="form-group">
        <label for="">Education</label>
        <select name="education[]" id="" multiple class="form-control">
            <!-- <option value="">Select</option> -->
            <option value="10">10<sup>th</sup></option>
            <option value="12">12<sup>th</sup></option>
            <option value="Graduation">Graduation</option>
            <option value="Post Graduation">Post Graduation</option>
        </select>
    </div>
    <div class="form-group">
        <button class="btn btn-sm btn-outline-primary">Next <span>&raquo;</span></button>
    </div>

</form>
<div class="row">
    <div class="col-md-12">
        <a href="index.php" class="btn btn-sm btn-outline-info">Back</a>
    </div>
</div>
<?php
$edulist = implode(',', $_POST['education']);
$_SESSION['education_list'] = $edulist;
?>
<?php include('footer.php'); ?>