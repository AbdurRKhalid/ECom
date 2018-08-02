<?php
include_once ("../../resources/functions.php");
include_once ("../../resources/config.php");
?>

<?php

    if (isset($_GET['delete'])) {
        $execution_result = query("DELETE FROM products WHERE product_id=".$_GET['delete']);
        confirm($execution_result);
        if ($execution_result) {
            redirect("products.php");
        } else {
            redirect("products.php");
        }
    }

?>