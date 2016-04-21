<h1>Add <?php echo ucfirst($this->variables['controller']); ?></h1>
<form class="register" action='<?php echo BASE_URL . '/' . $this->variables['controller']; ?>/add' method='post'>
    <?php
        $data = $this->getTableFields($this->variables['controller']);
        if(!empty($data)) {
            foreach ($data as $fields) {
                echo $fields;
            }
    ?>
    <br /><br /><input type="submit" value="Add <?php echo ucfirst($this->variables['controller']); ?>">
    <?php } ?>    
</form>      