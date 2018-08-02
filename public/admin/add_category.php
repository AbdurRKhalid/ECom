<?php
include_once ("../../resources/functions.php");
include_once ("../../resources/config.php");
?>



<?php


if (isset($_POST['add_cat'])) {
    $catTitle = $_POST['cat_title'];
    $query_result = query("INSERT INTO categories (cat_title) VALUES ('$catTitle')");
    if ($query_result) {
        redirect("categories.php");
    } else {
        redirect("categories.php");
    }

}


?>