<?php
    include_once ("../../resources/functions.php");
    include_once ("../../resources/config.php");
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->

        <div id="page-wrapper">

            <?php
            include_once ("../../resources/Templates/Back/top_nav.php");
            ?>

            <?php
            include_once ("../../resources/Templates/Back/side_nav.php")
            ?>

            <div class="container-fluid">


                


        <div class="col-md-12">
<div class="row">
<h1 class="page-header">
   All Orders

</h1>
</div>

<div class="row">
<table class="table table-hover">
    <thead>

      <tr>
           <th>Total Price</th>
           <th>Total Items</th>
           <th>Receipt Number</th>
      </tr>
    </thead>
    <tbody>
        <?php get_orders(); ?>
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
