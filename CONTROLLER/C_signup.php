<?php 
        if (isset($_POST['btnreg'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $username = $_POST['name'];
            if (empty($username) || empty($password) || empty($email)) {
                echo"yeu cau nhap du cac o";
            } else {
                $user = get('account',array('username' => $email));
                if (!empty($user)) {
                    echo"tai khoan da ton tai";
                } else {
                $check = insert('account',array(
                    'username' => $email,
                    'pass' => $password,
                    'name' => $username
                ));
                if ($check == true) {
                    header ('location: ?controller=reg_success');
                } else {
                    echo("khong them nhan vien duoc");
                }
    
            }
                
        }
            
    }
        require_once ("./VIEW/V_signup.php");
?>  