<!--
* General list page for listing of 
* course, student and teacher
-->
<?php if($this->controller == 'course') { ?>
<!--Courses list--> 
    <h1>Courses List</h1>
    <?php if(!empty($this->variables)) { ?>
        <table style="width:100%">
            <tr>
                <td>id</td>
                <td>Course Name</td>
            </tr>                
            <?php foreach ($this->variables as $value) {  ?>
                    <tr>
                        <td><?php echo $value['id']; ?></td>
                        <td><?php echo $value['course_name']; ?></td>
                        <td><a href="<?php echo BASE_URL . '/course/edit?id=' . $value['id']; ?>">Edit</a></td>
                        <td><a href="<?php echo BASE_URL . '/course/delete?id=' . $value['id']; ?>">Delete</a></td>
                    </tr>
            <?php } ?>
        </table> <br/>    
    <?php 
        } else {
            echo '<h1>No Record Found</h1>';
        } 
    ?>    
<?php } elseif ($this->controller == 'student') { ?>   
<!--Student list-->         
    <h1>Student List</h1>
    <?php if(!empty($this->variables)) { ?>
        <table style="width:100%">
            <tr>
                <td>id</td>
                <td>Student Name</td>
            </tr>                
            <?php foreach ($this->variables as $value) {  ?>
                    <tr>
                        <td><?php echo $value['id']; ?></td>
                        <td><?php echo $value['student_name']; ?></td>
                        <td><a href="<?php echo BASE_URL . '/student/edit?id=' . $value['id']; ?>">Edit</a></td>
                        <td><a href="<?php echo BASE_URL . '/student/delete?id=' . $value['id']; ?>">Delete</a></td>
                    </tr>
            <?php } ?>
        </table> <br/>    
    <?php 
        } else {
            echo '<h1>No Record Found</h1>';
        } 
    ?>   
<?php } elseif ($this->controller == 'teacher') { ?>   
<!--Teacher list-->         
    <h1>Teacher List</h1>
    <?php if(!empty($this->variables)) { ?>
        <table style="width:100%">
            <tr>
                <td>id</td>
                <td>Teacher Name</td>
            </tr>                
            <?php foreach ($this->variables as $value) {  ?>
                    <tr>
                        <td><?php echo $value['id']; ?></td>
                        <td><?php echo $value['teacher_name']; ?></td>
                        <td><a href="<?php echo BASE_URL . '/teacher/edit?id=' . $value['id']; ?>">Edit</a></td>
                        <td><a href="<?php echo BASE_URL . '/teacher/delete?id=' . $value['id']; ?>">Delete</a></td>
                    </tr>
            <?php } ?>
        </table> <br/>    
    <?php 
        } else {
            echo '<h1>No Record Found</h1>';
        } 
    ?>         
<?php } ?>     
<a href="<?php echo BASE_URL . "/$this->controller/add"; ?>">Add <?php echo ucfirst($this->controller); ?></a>