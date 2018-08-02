<?php
include_once ("../../resources/functions.php");
include_once ("../../resources/config.php");
?>

<?php
    session_destroy();
    redirect("../login.php");
?>