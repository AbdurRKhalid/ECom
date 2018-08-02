<?php
include_once ("../../resources/functions.php");
include_once ("../../resources/config.php");
?>

<?php
    if (isset($_POST['update'])) {
        $title = $_POST['title_input'];
        $price = $_POST['price_input'];
        $description = $_POST['description_input'];
        $quantity = $_POST['quantity_input'];
        $category_id = $_POST['category_id_input'];
        $image = $_POST['image'];
        $execution_result = query("UPDATE products SET product_title='$title',
        product_category_id=$category_id, product_price=$price, prouct_quantity=$quantity,
        product_description='$description'");
        if ($execution_result) {
            redirect("products.php");
        } else {
            redirect("products.php");
        }
    }
?>