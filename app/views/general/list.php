<h1><?php
print_r($this->variables); die;
echo ucfirst($this->variables['controller']); ?>s List</h1>
<?php if(!empty($this->variables['data'])) { ?>
    <table style="width:100%"> 
        <tr>
            <?php
                $data = $this->getFieldsList($this->variables['controller']);
                if(!empty($data)) {
                    foreach ($data as $fields) {
                        echo '<td>'.$fields.'</td>';
                    }
                }
            ?>            
        </tr> 
        <?php foreach ($this->variables['data'] as $values) {  ?>
        <tr>      
            <?php
                if(!empty($data)) {
                    foreach ($data as $fields) {
                        echo '<td>'.$values[$fields].'</td>';
                    }
            ?>              
                <td><a href="<?php echo BASE_URL . "/".$this->variables['controller']."/edit?id=" . $values['id']; ?>">Edit</a></td>
                <td><a href="<?php echo BASE_URL . "/".$this->variables['controller']."/delete?id=" . $values['id']; ?>">Delete</a></td>                
            <?php } ?>
        </tr>
        <?php } ?>
    </table> <br/>    
<?php 
    } else {
        echo '<h1>No Record Found</h1>';
    }
?>   
<a href="<?php echo BASE_URL . "/".$this->variables['controller']."/add"; ?>">Add <?php echo ucfirst($this->variables['controller']); ?></a>