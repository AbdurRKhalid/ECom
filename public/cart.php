<?php
require_once ("../resources/config.php");
require_once ("../resources/functions.php");
?>

<?php

    if (isset($_GET['add'])) {
        $queryResult = query("SELECT * FROM products WHERE product_id=".escape_string($_GET['add']));
        confirm($queryResult);
        while ($Data = fetch_result($queryResult)) {
            if ($Data['prouct_quantity']!=$_SESSION['product_' . $_GET['add']]) {
                $_SESSION['product_' . $_GET['add']] +=1;
                redirect("checkout.php");
            } else {
                echo "Sorry, We have only" . "{$Data['prouct_quantity']}" . "products";
                redirect("checkout.php");
            }
        }
    }

    if (isset($_GET['remove'])) {
        $_SESSION['product_' . $_GET['remove']]--;
        redirect("checkout.php");
        if ($_SESSION['product_'.$_GET['remove']] < 1) {
            redirect("checkout.php");
        } else {
            redirect("checkout.php");
        }
    }

    if (isset($_GET['delete'])) {
        $_SESSION['product_'.$_GET['delete']] = 0;
        redirect("checkout.php");
    }

    function cart() {
        $dataHandler = 0;
        $items_handler = 0;
        foreach ($_SESSION as $name => $value) {
            if ($value > 0 ) {
                if (substr($name, 0, 8) == "product_"){

                   $numbers = substr($name,8);
                    $query = query("SELECT * FROM products WHERE product_id=".escape_string($numbers));
                    confirm($query);

                    while ($Data_Received = fetch_result($query)) {
                        $total_products_price = $Data_Received['product_price'] * $value;
                        $products_to_cart = <<< Products
                    <tr>
                    
            <td>{$Data_Received['product_title']}</td>
            <td>{$Data_Received['product_price']}&#36</td>
            <td>{$value}</td>
            <td>{$total_products_price}&#36</td>
            <td>
                 <a class="btn btn-warnig" href="cart.php?remove={$Data_Received['product_id']}"><span class="glyphicon glyphicon-minus"></span></a>
                 <a class="btn btn-success" href="cart.php?add={$Data_Received['product_id']}"><span class="glyphicon glyphicon-plus"></span></a>
                 <a class="btn btn-danger" href="cart.php?delete={$Data_Received['product_id']}"><span class="glyphicon glyphicon-remove"></span></a>   
            </td>
        </tr>
Products;
                        echo $products_to_cart;
                        $dataHandler = $dataHandler + $total_products_price;
                        $items_handler = $items_handler + $value;
                        $_SESSION['actual_total'] = $dataHandler;
                        $_SESSION['total_items'] = $items_handler;
                    }
                }

            }

          }
        }






?>
