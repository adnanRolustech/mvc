<!--
* General add page of add form for 
* course, student and teacher
-->
<?php if($this->controller == 'course') { ?>
    <h1>Add Course</h1>
    <form class="register" action='<?php echo BASE_URL; ?>/course/add' method='post'>
        <input type="text" name="course_name" placeholder="Course Name"><br /><br />
        <input type="submit" value="Add Course">
    </form>
<?php } elseif ($this->controller == 'student') { ?>   
    <h1>Add Student</h1>
    <form class="register" action='<?php echo BASE_URL; ?>/student/add' method='post'>
        <input type="text" name="student_name" placeholder="Student Name"><br /><br />
        <input type="submit" value="Add Student">
    </form>    
<?php } elseif ($this->controller == 'teacher') { ?>   
    <h1>Add Teacher</h1>
    <form class="register" action='<?php echo BASE_URL; ?>/teacher/add' method='post'>
        <input type="text" name="teacher_name" placeholder="Teacher Name"><br /><br />
        <input type="submit" value="Add Teacher">
    </form>    
<?php } ?>       