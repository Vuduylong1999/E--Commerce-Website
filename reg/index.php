<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../img/all.css">
    <link rel="stylesheet" href="../framework/bootstrap/css/bootstrap.css">
  </head>
  <body>
    <?php 
        include "db.php";
        if (isset($_POST['btnlogin'])) {
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            if ($email == "" || $pass == "") {
                echo "";
            } else {
                $sql = "insert into account(username,pass) values ('$email','$pass')";
                mysqli_query($conn,$sql);
                header('Location: reg-success.php');
        }
    }
        
    ?>    

    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6 px-5 pt-5">
                    <h1 class="font-weight-bold  mb-5">Register</h1>
                    <form action="" method="post">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" name="email" placeholder="Email-Address..." id="" class="form-control my-2 p-2" Required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="pass" placeholder="Password..." id=""class="form-control my-2 p-2" Required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="rpass" placeholder="Repeat Password..." id=""class="form-control my-2 p-2" Required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="submit" class="btn1 mt-3 mb-5" name="btnlogin" value="Register">
                            </div>
                        </div>
                        <a href="#">Forgot Password?</a>
                        <p>You have been an account? <a href="../login/index.php">Login   here</a></p>
                    </form>
                </div>
                <div class="col-lg-6">
                    <img src="../img/sugu.jpg" alt="" style="width:100%" >
                </div>
            </div>
        </div>
    </section>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>