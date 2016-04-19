<h1><?php echo ucfirst($this->controller); ?>s List</h1>
<?php if(!empty($this->variables)) { ?>
    <table style="width:100%"> 
        <tr>
            <?php
                $data = $this->getFieldsList($this->controller);
                if(!empty($data)) {
                    foreach ($data as $fields) {
                        echo '<td>'.$fields.'</td>';
                    }
                }
            ?>            
        </tr> 
        <?php foreach ($this->variables as $values) {  ?>
        <tr>      
            <?php
                if(!empty($data)) {
                    foreach ($data as $fields) {
                        echo '<td>'.$values[$fields].'</td>';
                    }
            ?>              
                <td><a href="<?php echo BASE_URL . "/$this->controller/edit?id=" . $values['id']; ?>">Edit</a></td>
                <td><a href="<?php echo BASE_URL . "/$this->controller/delete?id=" . $values['id']; ?>">Delete</a></td>                
            <?php } ?>
        </tr>
        <?php } ?>
    </table> <br/>    
<?php 
    } else {
        echo '<h1>No Record Found</h1>';
    }
?>   
<a href="<?php echo BASE_URL . "/$this->controller/add"; ?>">Add <?php echo ucfirst($this->controller); ?></a>