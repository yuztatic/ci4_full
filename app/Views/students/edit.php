<?php

$this->extend('layout/main');
$this->section('body');
?>
<h1>
   Edit. Student
</h1>

<form action="/students/update/<?= $student['id']; ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="studentName">Student Name</label>
        <input type="text" class="form-control" name="student_name" value="<?= $student['student_name']; ?>">
    </div>

    <div class="form-group">
        <label for="studentNumber">Student Number</label>
        <input type="text" class="form-control" name="student_number" value="<?= $student['student_id']; ?>" readonly>
    </div>

    <div class="form-group">
        <label for="studentSection">Section</label>
        <select class="form-control" name="student_section">
            <option><?= $student['student_section']; ?></option>
            <option>Select Section</option>

            <option>Section 1</option>
            <option>Section 2</option>
            <option>Section 3</option>
        </select>
    </div>

    <div class="form-group">
        <label for="studentCourse">Student Course</label>
        <input type="text" class="form-control" name="student_course" value="<?= $student['student_course']; ?>">
    </div>

    <div class="form-group">
        <label for="studentBatch">Student Batch</label>
        <input type="text" class="form-control" name="student_batch" value="<?= $student['student_batch']; ?>">
    </div>

    <div class="form-group">
        <label for="studentGradeLevel">Student Grade Level</label>
        <input type="text" class="form-control" name="student_grade_level" value="<?= $student['student_grade_level']; ?>">
    </div>

    <div class="form-group">
        <label for="studentProfile">Student Profile</label>
        <input type="file" class="form-control" name="student_profile">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>






</form>

<?php
$this->endSection();

?>