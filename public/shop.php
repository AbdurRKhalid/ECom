<?php
require_once ("../resources/config.php");
require_once ("../resources/functions.php");
?>


<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
    <header>
       <h1>
           SHOP
       </h1>
    </header>

    <?php include (TEMPLATE_FRONT .DS. "header.php")?>


    <hr>

    <!-- Title -->
    <!-- /.row -->

    <!-- Page Features -->
    <div class="row text-center">

        <?php getProducts_in_shop_page(); ?>

    </div>
</div>
<!-- /.row -->
<?php include ("../resources/Templates/Front/footer.php"); ?>

</body>

</html>
