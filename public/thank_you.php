<?php
require_once ("../resources/config.php");
require_once ("../resources/functions.php");
require_once ("cart.php")
?>
<?php include (TEMPLATE_FRONT .DS. "header.php")?>




<div class="container">
    <h1 class="text-center">
        Thank You For Shopping!
    </h1>
    <p class="text-center">Your Ordered Items Will Be Shipped to the Destination within Seven Working Days.</p>
</div>

<?php
$total_items_ready = (int) $_SESSION['total_products'];
$total_of_products = (float) $_SESSION['total_of_products'];
$executed = query("INSERT INTO orders(tprice,titems) 
                    VALUES ($total_of_products, $total_items_ready)");
                    confirm($executed);
                    session_destroy();
?>






<?php include ("../resources/Templates/Front/footer.php"); ?>