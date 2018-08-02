<?php
include_once ("../../resources/functions.php");
include_once ("../../resources/config.php");
?>


            <?php
                    if (isset($_GET['update'])){
                    $execution = query("SELECT * FROM products WHERE product_id=".$_GET['update']);
                    confirm($execution);
                    while ($Data = fetch_result($execution)) {

                        ?>
                        <div class="container">
                            <form action="update_original.php" method="post">
                                <label class="form-control">Title of the Product</label>
                                <br>
                                <input value="<?php echo $Data['product_title']; ?>" name="title_input">
                                <br>
                                <label>Price of the Product</label>
                                <br>
                                <input value="<?php echo $Data['product_price']; ?>" name="price_input">
                                <br>
                                <label>Description of Product</label>
                                <br>
                                <input value="<?php echo $Data['product_description']; ?>" name="description_input">
                                <br>
                                <label>Quantity of Product</label>
                                <br>
                                <input value="<?php echo $Data['prouct_quantity']; ?>" name="quantity_input">
                                <br>
                                <label>Id of the Category</label>
                                <br>
                                <input value="<?php echo $Data['product_category_id']; ?>" name="category_id_input">
                                <br>
                                <label>Add Image</label>
                                <input type="file" name="image">
                                <br>
                                <input type="submit" name="update" value="UPDATE">
                            </form>
                        </div>

                        <?php
                    }
                    }?>