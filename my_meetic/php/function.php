<?php

function login_test($users)
{
    if(isset($_POST['email']) && isset($_POST['password'])) {
        foreach ($users as $user) {
            if ($user[2] === $_POST['email'] && password_verify($_POST['password'], $user[3])){
                $_SESSION['userFirstname'] = $user['firstname'];
                $_SESSION['userLastname'] = $user['lastname'];

                header('Location: main.php');
                die();
            }else{
                $GLOBALS['errorMsg'] = "<p class='login_error_msg'>Email or password is incorrect, please try again.</p>";
            }
        }
    }
}