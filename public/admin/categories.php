<?php
include_once ("../../resources/functions.php");
include_once ("../../resources/config.php");
include "categories_actions.php";
include "add_category.php";
?>

        <div id="page-wrapper">
            <?php
            include_once ("../../resources/Templates/Back/top_nav.php");
            ?>

            <?php
            include_once ("../../resources/Templates/Back/side_nav.php")
            ?>
            <div class="container-fluid">

            

            

<h1 class="page-header">
  Product Categories
</h1>


<div class="col-md-4">
    
    <form action="add_category.php" method="post">
    
        <div class="form-group">
            <label for="category-title">Title</label>
            <input type="text" class="form-control" name="cat_title">
        </div>

        <div class="form-group">
            
            <input type="submit" class="btn btn-primary" value="Add Category" name="add_cat">
        </div>      


    </form>


</div>


<div class="col-md-8">

    <table class="table">
            <thead>

        <tr>
            <th>id</th>
            <th>Title</th>
        </tr>
            </thead>


    <tbody>
        <?php get_categories_admin(); ?>
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
