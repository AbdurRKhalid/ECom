<?php
include_once ("../../resources/functions.php");
include_once ("../../resources/config.php");
?>


<?php
    if (isset($_GET['delete'])) {
            $executed_query = query("DELETE FROM users WHERE user_id=".$_GET['delete']);
            confirm($executed_query);
            redirect("users.php");
    }
?>