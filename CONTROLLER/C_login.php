<?php
    require_once ("./MODEL/M_db.php");
    if (isset($_POST['btnlogin'])) {
        if ($_POST['email'] == null) {
            echo "";
        }
        else {
            $email = $_POST['email'];
        }

        if ($_POST['pass'] == null) {
            echo "";
        }
        else {
            $pass = $_POST['pass'];
        }

        if (!$_POST['email'] == null && !$_POST['pass'] == null /* && $user && $pass */) {
            include "db.php";
            $sql = "select * from account login where username='".$email."' and pass='".$pass."'";
            $query = mysqli_query($conn, $sql);
            if (mysqli_num_rows($query) == 0) {
                echo "cc";
            }
            else {
                echo "Dang nhap thanh cong";
                header('Location: ?controller=trangchu');
                $row = mysqli_fetch_array($query);
                session_start();
                $_SESSION['email'] = $row['username'];
                $_SESSION['pass'] = $row['pass'];
            }

        }
    } 
    require_once("./VIEW/V_login.php");
?> 