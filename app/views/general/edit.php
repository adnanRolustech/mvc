<?php

/**
 * General edit file for edit view.
 */

/**
 * General edit file of edit form for course, student and teacher.
 */
$dataArray = array_shift($this->variables['data']);
?>
<h1>Edit <?php echo ucfirst($this->variables['controller']); ?></h1>
<form class="register" action='<?php echo BASE_URL . '/' . $this->variables['controller']; ?>/edit' method='post'>    
    <?php
        $data = $this->getTableFields($this->variables['controller'], $dataArray);
        if (!empty($data)) {
            foreach ($data as $fields) {
                echo $fields;
            }
    ?>
        <br /><br /><input type="submit" value="Update <?php echo ucfirst($this->variables['controller']); ?>">
    <?php } ?>     
</form>    
