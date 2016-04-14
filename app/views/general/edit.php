<!--
* General add page of add form for 
* course, student and teacher
-->
<?php
    $data = $this->variables[0];
    if($this->controller == 'course') {
?>
    <h1>Edit Course</h1>
    <form class="register" action='<?php echo BASE_URL; ?>/course/edit' method='post'>
        <input type="text" name="course_name" value="<?php echo $data['course_name']; ?>" placeholder="Course Name"><br /><br />
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <input type="submit" value="Update">
    </form>
<?php } elseif ($this->controller == 'student') { ?>   
    <h1>Edit Student</h1>
    <form class="register" action='<?php echo BASE_URL; ?>/student/edit' method='post'>
        <input type="text" name="student_name" value="<?php echo $data['student_name']; ?>" placeholder="Student Name"><br /><br />
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <input type="submit" value="Update">
    </form>  
<?php } elseif ($this->controller == 'teacher') { ?>   
    <h1>Edit Teacher</h1>
    <form class="register" action='<?php echo BASE_URL; ?>/teacher/edit' method='post'>
        <input type="text" name="teacher_name" value="<?php echo $data['teacher_name']; ?>" placeholder="Teacher Name"><br /><br />
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <input type="submit" value="Update">
    </form>  
<?php } ?>      
