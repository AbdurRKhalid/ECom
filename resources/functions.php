<?php


        function set_login_error_message($login_error) {
            if (!empty($login_error)) {
                $_SESSION['login error message'] = $login_error;
            } else {
                $_SESSION['login error message'] = "";
            }
        }

        function display_login_error_message() {
            if (isset($_SESSION['login error message'])) {
                echo $_SESSION['login error message'];
                unset($_SESSION['login error message']);
            }
        }

        function set_admin_welcome_message($welcome_admin) {
            if (!empty($welcome_admin)) {
                $_SESSION['admin welcome password'] = $welcome_admin;
            }else {
                $_SESSION['admin welcome password'] = "";
            }
        }

        function display_admin_welcome_message() {
            if (isset($_SESSION['admin welcome password'])) {
                echo $_SESSION['admin welcome password'];
                unset($_SESSION['admin welcome password']);
            }
        }

/**
 * @param $location
 */
function redirect($location) {
            header("Location:$location");
        }

        function query($sql) {
            global $connection;
            return mysqli_query($connection, $sql);
        }

        function confirm($result) {
            global $connection;
            if (!$result) {
                die("Query Failed". mysqli_errno($connection));
            }
        }

        function escape_string($string) {
            global $connection;
            return mysqli_escape_string($connection,$string);
        }

        function fetch_result($result) {
            return mysqli_fetch_array($result);
        }


        function getProducts() {
            $Execution_Result = query("SELECT * FROM products");
            confirm($Execution_Result);
            while ($Data_Received = fetch_result($Execution_Result)) {
                $products_information = <<<PRODUCTS
                                        <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="item.php?id={$Data_Received['product_id']}"><img src="http://placehold.it/320x150" alt=""></a>
                            <div class="caption">
                                <h4 class="pull-right">{$Data_Received['product_price']}&#36</h4>
                                <h4><a href="item.php?id={$Data_Received['product_id']}">{$Data_Received['product_title']}</a>
                                </h4>
                                <p>{$Data_Received['product_description']}</p>
                                <a class="btn btn-primary" target="_blank" href="cart.php?add={$Data_Received['product_id']}">Add To Cart</a>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
PRODUCTS;
                echo $products_information;

            }
        }

        function getCategories () {
            $Execution_Result = query("SELECT * FROM categories");
            confirm($Execution_Result);
            while ($Data = fetch_result($Execution_Result)) {
                $products_links = <<<CAT
                <a href="category.php?id={$Data['cat_id']}" class="list-group-item">{$Data['cat_title']}</a>
CAT;
            echo $products_links;
            }
        }



    function getProducts_in_cat_page() {
    $Execution_Result = query("SELECT * FROM products WHERE product_category_id=".$_GET['id']."");
    confirm($Execution_Result);
    while ($Data_Received = fetch_result($Execution_Result)) {
        $products_information = <<<PRODUCTS
                                        <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="item.php?id={$Data_Received['product_id']}"><img src="http://placehold.it/320x150" alt=""></a>
                            <div class="caption">
                                <h4 class="pull-right">{$Data_Received['product_price']}&#36</h4>
                                <h4><a href="item.php?id={$Data_Received['product_id']}">{$Data_Received['product_title']}</a>
                                </h4>
                                <p>{$Data_Received['product_description']}</p>
                                <a class="btn btn-primary" target="_blank" href="cart.php?add={$Data_Received['product_id']}">Add To Cart</a> 
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
PRODUCTS;
        echo $products_information;

    }
}

    function getProducts_in_shop_page() {
    $Execution_Result = query("SELECT * FROM products");
    confirm($Execution_Result);
    while ($Data_Received = fetch_result($Execution_Result)) {
        $products_information = <<<PRODUCTS
                                        <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="item.php?id={$Data_Received['product_id']}"><img src="http://placehold.it/320x150" alt=""></a>
                            <div class="caption">
                                <h4 class="pull-right">{$Data_Received['product_price']}&#36</h4>
                                <h4><a href="item.php?id={$Data_Received['product_id']}">{$Data_Received['product_title']}</a>
                                </h4>
                                <p>{$Data_Received['product_description']}</p>
                                <a class="btn btn-primary" target="_blank" href="cart.php?add={$Data_Received['product_id']}">Add To Cart</a> 
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
PRODUCTS;
        echo $products_information;

    }

}

    function login_user() {
            if (isset($_POST['submit'])) {
                $username = escape_string($_POST['username']);
                $password = escape_string($_POST['password']);
                $query = query("SELECT * FROM users WHERE username='{$username}' AND password='{$password}'");
                confirm($query);
                $numberToGet = mysqli_num_rows($query);
                if ($numberToGet == 0) {
                    set_login_error_message("You have Entered Wrong Username or Password. Kindly Enter Again!");
                    $_SESSION['admin_name'] = "Error";
                    redirect("login.php");
                } else {
                    set_admin_welcome_message("Welcome Dear Admin {$username}.");
                    display_admin_welcome_message();
                    $_SESSION['admin_name'] = "$username";
                    redirect("admin");
                }
            }
    }

    function send_message() {
            if (isset($_POST['Send'])) {
                $to = "abdur.r.khalid@gmail.com";
                $from_name = $_POST['name'];
                $subject = $_POST['subject'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                $header = "From: {$from_name} {$email}";
                $respond = mail($to, $subject, $message, $header);
                if ($respond) {
                    set_admin_welcome_message("The Message has been sent!");
                }else{
                    set_admin_welcome_message("Sorry, Your Message has not been sent due to some reason!");
                }
            }
    }

    function get_orders() {
    $execution_result = query("SELECT * FROM orders");
    confirm($execution_result);
    while ($Data_Received = fetch_result($execution_result)) {
        $orders = <<<ORDERS
        <tr>
            <td>{$Data_Received['tprice']}</td>
            <td>{$Data_Received['titems']}</td>
            <td>{$Data_Received['id']}</td>
        </tr>
ORDERS;
        echo $orders;
    }
    }

    function get_products_admin() {
        $execution_result = query("SELECT * FROM products");
        confirm($execution_result);
        while ($Data = fetch_result($execution_result)) {
            $products = <<<PRODUCTS
            <tr>
            <td>{$Data['product_id']}</td>
            <td>{$Data['product_title']}</td>
            <td>{$Data['product_category_id']}</td>
            <td>{$Data['product_price']}</td>
            <td><a href="product_update.php?update={$Data['product_id']}" class="btn btn-warning">Update</a></td>
             <td><a href="product_delete.php?delete={$Data['product_id']}" class="btn btn-danger">Delete</a></td>
        </tr>
PRODUCTS;
            echo $products;
        }
    }


    function get_categories_admin() {
        $execution_result = query("SELECT * FROM categories");
        confirm($execution_result);
        while ($Data = fetch_result($execution_result)) {
            $categories = <<<CAT
        <tr>
            <td>{$Data['cat_id']}</td>
            <td>{$Data['cat_title']}</td>
            <td><a href="categories_actions.php?delete={$Data['cat_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>
CAT;
        echo $categories;
        }
    }

    function get_admins() {
        $execution_result = query("SELECT * FROM users");
        confirm($execution_result);
        while ($Data = fetch_result($execution_result)) {
            $admins = <<< ADMIN

                                     <tr>
                                        <td>{$Data['user_id']}</td>
                                        <td>{$Data['username']}</td>
                                       <td>{$Data['password']}</td>
                                       <td><a href="users_actions.php?delete={$Data['user_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
                                    </tr>
ADMIN;
        echo $admins;
        }
    }



?>