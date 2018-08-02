<?php
include_once ("../../resources/functions.php");
include_once ("../../resources/config.php");
include_once ("users_actions.php");
include_once ("add_new_user.php");
?>

        <div id="page-wrapper">


            <?php
            include_once ("../../resources/Templates/Back/top_nav.php");
            ?>

            <?php
            include_once ("../../resources/Templates/Back/side_nav.php")
            ?>

            <div class="container-fluid">



                    <div class="col-lg-12">
                      

                        <h1 class="page-header">
                            Users
                         
                        </h1>
                          <p class="bg-success">
                        </p>
                        <form action="add_new_user.php" method="post">
                            <label>Enter the Username</label>
                            <input type="text" name="username_input">
                            <label>Enter the Password</label>
                            <input type="text" name="password_input">
                        <button type="submit" class="btn btn-primary" name="add_new_user">Add New User</button>
                        </form>

                        <div class="col-md-12">

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php get_admins(); ?>
                                    
                                </tbody>
                            </table> <!--End of Table-->
                        

                        </div>










                        
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
