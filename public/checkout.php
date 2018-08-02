<?php
require_once ("../resources/config.php");
require_once ("../resources/functions.php");
require_once ("cart.php")
?>
<?php include (TEMPLATE_FRONT .DS. "header.php")?>

    <!-- Page Content -->
    <div class="container">

<!-- /.row --> 

<div class="row">

      <h1>Checkout</h1>

<form action="">
    <table class="table table-striped">
        <thead>
          <tr>
           <th>Product</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Sub-total</th>

          </tr>
        </thead>
        <tbody>
          <?php cart(); ?>
        </tbody>
    </table>
</form>
</div>



<!--  ***********CART TOTALS*************-->
            
<div class="col-xs-4 pull-right ">
<h2>Cart Totals</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount"><?php echo $_SESSION['total_items']; ?></span></td>
</tr>
<tr class="shipping">
<th>Shipping and Handling</th>
<td>Free Shipping</td>
</tr>

<tr class="order-total">
<th>Order Total</th>
<td><strong><span class="amount"><?php echo $_SESSION['actual_total'];?></span></strong></td>
    <?php

        $_SESSION['total_products'] = $_SESSION['total_items'];
        $_SESSION['total_of_products'] = $_SESSION['actual_total'];
    ?>
</tr>
</tbody>
</table>

    <a class="btn btn-primary" href="thank_you.php">Check Out!</a>

</div><!-- CART TOTALS-->


 </div><!--Main Content-->


           <hr>

        <!-- Footer -->
        <?php include ("../resources/Templates/Front/footer.php"); ?>
    <!-- /.container -->

</body>

</html>
