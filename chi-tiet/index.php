<?php 
    include "../db.php";
    $id = $_GET['id'];
    $product = mysqli_query($conn,"SELECT * FROM  product WHERE id=$id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../img/all.css">
    <link rel="stylesheet" href="../framework/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <a href="" class="navbar-brand font-weight-bold brand-color"><img src="../img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="toggle navigation">
                <span>Menu</span>
            </button>
            <!-- <div class="search-box">
                <form action="" method="get">
                    <input class="search-txt" type="text" name="keyword" placeholder="Search...">
                    <a href="#" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></a>
                </form>
            </div> -->
            
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="../index1.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Services</a>
                    </li>
                    <li class="d-none d-xl-block">
                        <li class="nav-item">
                            <a href="../login/index.php" class="nav-link">
                                <i class="fas fa-user"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </a>
                        </li>
                    </li>
                </ul>
            </div>
        </div >
    </nav>

    <!-- END OF NAVBAR -->

    <!-- BANNER -->
    <section>
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <h2 class="first-tittle">Let turn on Otaku'S mode!</h2>
                        <h1>We are the TITAN'S</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF BANNER -->

    <!-- INFO PRODUCT -->
    <section>
        <div class="info">
            <div class="container">
                <?php 
                    while($row = mysqli_fetch_array($product)) {
                ?>
                <p class="tittle"><?php echo $row['title'] ?></p>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="../<?php echo $row['Image']?>" alt="" width="500" height="cover">
                    </div>
                    <div class="col-lg-6">
                        <p>Character : <?php echo $row['Name'] ?></p>
                        <p>Description : <?php echo $row['Description'] ?></p>
                        <button type="button" class="btn btn-outline-primary"><?php echo number_format($row['Price'],0,",",".") ?>¥</button>
                    </div>
                </div>
                    <?php } ?>
            </div>
        </div>   
    </section>
        
    <!-- END OF INFO PRODUCT -->

    <!-- FOOTER -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h3>E-Commerce</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt possimus quia mollitia esse praesentium veritatis nam harum eligendi voluptatum asperiores.</p>
                    </div>
                </div>
                <div class="row footer-newsletter justify-content-center">
                    <div class="col-lg-6">
                        <form action="">
                            <input type="email" name="email" id="" placeholder="Your Email...">
                            <input type="submit" value="Subcribe">
                        </form>
                    </div>
                </div>
                <div class="social-links">
                    <a href="" class="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="" class="facebook"><i class="fab fa-facebook"></i></a>
                    <a href="" class="instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- END OF FOOTER -->

</body>
</html>