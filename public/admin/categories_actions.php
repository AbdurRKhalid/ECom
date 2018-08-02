<?php
include_once ("../../resources/functions.php");
include_once ("../../resources/config.php");
?>

<?php

    if(isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $execution_result = query("DELETE FROM categories WHERE cat_id=".$id);
        if ($execution_result) {
            redirect("categories.php");
        } else {
            redirect("categories.php");
        }
    }



?>