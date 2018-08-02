<?php
    require_once ("../resources/config.php");
    require_once ("../resources/functions.php");
    require_once ("cart.php");
?>
<?php include (TEMPLATE_FRONT .DS. "header.php")?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <?php include (TEMPLATE_FRONT .DS. "side_nav.php")?>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <?php include (TEMPLATE_FRONT .DS. "slider.php")?>
                    </div>

                </div>

                <div class="row">

                    <?php getProducts();
                    ?>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->
    <?php include ("../resources/Templates/Front/footer.php"); ?>

</body>

</html>
