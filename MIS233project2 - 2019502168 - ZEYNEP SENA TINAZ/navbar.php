<?php
    if (user_detail('utype') == "student"):
?>
<br>
<br>
<br>
<br>
<br>
<div class="row mt-4">
    <div class="col-lg-4 text-center">
        <a class="btn btn-custom btn-lg" href="change-password.php?type=student">Change Password</a>
    </div>
</div>
<div class="row mt-4">
    <div class="col-lg-4 text-center">
        <a class="btn btn-custom btn-lg" href="add-course.php">Add Course</a>
    </div>
</div>
<div class="row mt-4">
    <div class="col-lg-4 text-center">
        <a class="btn btn-custom btn-lg" href="view-course.php">View Course List</a>
    </div>
</div>
<div class="row mt-4">
    <div class="col-lg-4 text-center">
        <a class="btn btn-custom btn-lg" href="grades.php">Grades</a>
    </div>
</div>
<?php
    endif;
    if (user_detail('utype') == "professor"):
?>
<br>
<br>
<br>
<br>
<br>
<div class="row mt-4">
    <div class="col-lg-4 text-center">
        <a class="btn btn-custom btn-lg" href="change-password.php?type=professor">Change Password</a>
    </div>
</div>
<div class="row mt-4">
    <div class="col-lg-4 text-center">
        <a class="btn btn-custom btn-lg" href="consent-requests.php">View/Process Consent Requests</a>
    </div>
</div>
<div class="row mt-4">
    <div class="col-lg-4 text-center">
        <a class="btn btn-custom btn-lg" href="view.php">View Course List</a>
    </div>
</div>
<?php
    endif;
    if (user_detail('utype') == "administrator"):
?>
<br>
<br>
<br>
<br>
<br>
<div class="row mt-4">
    <div class="col-lg-4 text-center">
        <a class="btn btn-custom btn-lg" href="manage-users.php">Manage Users</a>
    </div>
</div>
<div class="row mt-4">
    <div class="col-lg-4 text-center">
        <a class="btn btn-custom btn-lg" href="manage-courses.php">Manage Courses</a>
    </div>
</div>
<?php
    endif;
?>