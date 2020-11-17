<?php 

    require_once ("./MODEL/M_db.php");
    session_start();
    if (isset($_GET['controller'])) {
        $controller = $_GET['controller'];
    } else {
        $controller = 'trangchu';
    }

    switch ($controller) {
        case 'trangchu':
            require_once('./CONTROLLER/C_trangchu.php');
            break;
        case 'login':
            require_once('./CONTROLLER/C_login.php');
            break;
        case 'signup':
            require_once('./CONTROLLER/C_signup.php');
            break;
        case 'reg_success':
            require_once('./CONTROLLER/C_reg_success.php');
            break;
        case 'about_us':
            require_once('./CONTROLLER/C_about_us.php');
            break;
        default:
            echo "trang loi";
            break;
    }
?>