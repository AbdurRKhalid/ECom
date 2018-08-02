<?php
include_once ("../../resources/functions.php");
include_once ("../../resources/config.php");
include_once ("product_update.php");
?>
        <div id="page-wrapper">


            <?php
            include_once ("../../resources/Templates/Back/top_nav.php");
            ?>

            <?php
            include_once ("../../resources/Templates/Back/side_nav.php")
            ?>

            <div class="container-fluid">

             <div class="row">

<h1 class="page-header">
   All Products

</h1>
<table class="table table-hover">


    <thead>

      <tr>
           <th>Id</th>
           <th>Title</th>
           <th>Category Number</th>
           <th>Price</th>
      </tr>
    </thead>
    <tbody>

        <?php get_products_admin(); ?>

  </tbody>
</table>















             </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->







    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
