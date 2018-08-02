<?php
include_once ("../../resources/functions.php");
include_once ("../../resources/config.php");
?>

<?php
    if (isset($_POST['add_new_user'])) {
        $username = $_POST['username_input'];
        $password = $_POST['password_input'];
        $execution_result = query("INSERT INTO users(username, password) VALUES ('$username', '$password')");
        confirm($execution_result);
        if ($execution_result) {
            $_SESSION['user_added'] = "The User has been added Successfully.";
            redirect("users.php");
        }else{
            $_SESSION['user_added'] = "The User has not been Added.";
            redirect("users.php");
        }
    }
?>