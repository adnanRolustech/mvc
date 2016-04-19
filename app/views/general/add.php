<h1>Add <?php echo ucfirst($this->controller); ?></h1>
<form class="register" action='<?php echo BASE_URL . '/' . $this->controller; ?>/add' method='post'>
    <?php
        $data = $this->getTableFields($this->controller);
        if(!empty($data)) {
            foreach ($data as $fields) {
                echo $fields;
            }
    ?>
    <br /><br /><input type="submit" value="Add <?php echo ucfirst($this->controller); ?>">
    <?php } ?>    
</form>      