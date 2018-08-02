<?php
include_once ("../../resources/functions.php");
include_once ("../../resources/config.php");
?>


<?php

    if (isset($_POST['publish'])) {
        $product_title = $_POST['product_title'];
        $product_description = $_POST['product_description'];
        $product_price = $_POST['product_price'];
        $product_category = $_POST['product_category'];
        $product_quantity = $_POST['product_quantity'];

        $execution_result = query("INSERT INTO products(product_title, product_category_id, product_price, prouct_quantity,
        product_description, product_image) VALUES ('$product_title', $product_category, $product_price, $product_quantity, '$product_description','')");
        confirm($execution_result);
        if ($execution_result) {
            redirect("products.php");
        } else {
            redirect("products.php");
        }
    }


?>