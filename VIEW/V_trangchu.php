<!doctype html>
<html lang="en">
  <head>
    <title>shopping</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="img/all.css">
<link rel="stylesheet" href="framework/bootstrap/css/bootstrap.css">
<script src="main.js" lang="javascript"></script>
    </head>
    <body>
    
    <!-- PHP  -->
    <?php 
        // $product = mysqli_query($conn,"SELECT * FROM product ORDER BY id ASC");

    // if (isset($_GET['keyword'])) {
    //         $keyword = $_GET['keyword'];
    //         $product = mysqli_query($conn,"SELECT * FROM product WHERE Name LIKE '%$keyword%'");
    //     } else {
    //         $product = mysqli_query($conn,"SELECT * FROM product ORDER BY id ASC");
    //         // echo"khong tim co ket qua nao";
    //     }
        ?>
            
    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <a href="" class="navbar-brand font-weight-bold brand-color"><img src="img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="toggle navigation">
                <span>Menu</span>
            </button>
            <div class="search-box">
                <form action="" method="get">
                    <input class="search-txt" type="text" name="keyword" placeholder="Search...">
                    <a href="#" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></a>
                </form>
            </div>
            
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="?controller=about_us" class="nav-link">Services</a>
                    </li>
                    <li class="d-none d-xl-block">
                        <li class="nav-item">
                            <a href="?controller=login" class="nav-link">
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

        <!-- END NAVBAR -->

      <!-- BANNER -->
    <section>
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto order-md-2 align-self-start">
                        <div class="banner-content">
                            <h2 class="first-tittle">Let turn on Otaku'S mode!</h2>
                            <h1>We are the TITAN'S</h1>
                            <p></p>
                            <a href="" class="btn btn-hero">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-md-6 order-1 align-self-end">
                        <img src="img/sinon2.jpg" style="height: fit-content;" alt="#" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!-- END OF BANNER -->

      <!-- CATEGORIES -->
    <section>
        <div class="categories-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="categories-alone">
                            <img src="img/law.jpg" alt="" class="img-fluid">
                            <div class="inner">
                                <h4>One Piece</h4>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-lg-4">
                        <div class="categories-alone">
                            <img src="img/madara2.jpg" alt="" class="img-fluid">
                            <div class="inner">
                                <h4>Naruto</h4>
                            </div>
                        </div>
                    </div>
                    <!--   -->
                    <div class="col-lg-4">
                        <div class="categories-alone">
                            <img src="img/levi.jpg" alt="" class="img-fluid" style="height:cover;">
                            <div class="inner">
                                <h4>Attack on Titan</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!-- END OF CATEGORIES -->

    <!-- PRODUCTS SECTION -->
    <section>
        <div class="product-panel">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2 class="text-center">Trending-item</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-detail">
                            <div class="nav-main">
                                <!---Tab Sec-->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab"href="#sneakers" role="tab">Figure SVC</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab"href="#heels" role="tab">Figure Action</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab"href="#kids" role="tab">Nendoroid/Chibi</a>
                                    </li>
                               </ul>
                            </div>
                            <!--End of Tabs-->
                            <div class="tab-content" id="myTabContent">
                                <!--Single Tab-->
        <div class="tab-pane fade show active"id="sneakers"role="tabpanel">
            <div class="tab-single">
                <div class="row">
                    
                    <?php
                        foreach ($product as $key => $row) {
                    ?>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="./chi-tiet/index.php?id=<?php echo $row['id'] ?>">
                                    <img src="<?=$row['Image']?>" class="main-img" alt="#" height="250">
                                </a>
                                <div class="button-head">
                                    <div class="action-button">
                                        <a data-toggle="modal" data-target="#exampleModal"
                                        title="Quick view" href="#">
                                        <i class="far fa-eye"></i><span>Quick Shop</span>
                                        </a>
                                        <a title="Wishlist"href="#"><i class="far fa-heart"></i>
                                        <span>Add to Wishlist</span></a>
                                        <a title="shopping"href="#"><i class="fas fa-shopping-bag"></i>
                                            <span>Buy Now</span></a>

                                    </div>
                                    <div class="button-low">
                                        <a title="Add to cart" href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-title">
                                <h3><a href=""><?=$row['Name'] ?></a></h3>
                                <div class="product-price">
                                    <span><?=number_format($row['Price'],0,",",".")?>¥</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                    </div>
                </div>
            </div>
            <!--End of Single Tab-->
            <!---2nd tab Start-->
            <div class="tab-pane fade"id="heels"role="tab-panel">
                <div class="tab-single">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/banner-1.png" class="main-img"
                                        alt="">
                                    </a>
                                    <div class="button-head">
                                        <div class="action-button">
                            <a data-toggle="modal"data-target="#exampleModal"title="Quick view"
                            href="#"><i class="far fa-eye"></i>
                        <span>Quick View</span>
                        </a>
                        <a title="wishlist" href="#">
                            <i class="far fa-heart"></i><span>Add to wish list</span>
                        </a>
                        <a title="wishlist" href="#">
                            <i class="far fa-heart"></i><span>Add to wish list</span>
                        </a>
                        <a title="shopping" href="#">
                            <i class="fas fa-shopping-bag"></i><span>Buy Now</span>
                        </a>
                                        </div>
                                        <div class="button-low">
                                        <a title="Add to cart" href="#">Add to cart</a>
                                    </div>
                                </div>
                                    </div>
                                    <div class="product-title">
                                    <h3><a href="">Lorem Ipsum</a></h3>
                                    <div class="product-price">
                                        <span>$25-00</span>
                                    </div>
                                </div>

                                </div>
                            </div>
                          <!---->
                            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/banner-1.png" class="main-img"
                                        alt="">
                                    </a>
                                    <div class="button-head">
                                        <div class="action-button">
                                <a data-toggle="modal"data-target="#exampleModal"title="Quick view"
                                href="#"><i class="far fa-eye"></i>
                            <span>Quick View</span>
                            </a>
                            <a title="wishlist" href="#">
                                <i class="far fa-heart"></i><span>Add to wish list</span>
                            </a>
                            <a title="wishlist" href="#">
                                <i class="far fa-heart"></i><span>Add to wish list</span>
                            </a>
                            <a title="shopping" href="#">
                                <i class="fas fa-shopping-bag"></i><span>Buy Now</span>
                            </a>
                                        </div>
                                        <div class="button-low">
                                            <a title="Add to cart" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="product-title">
                                        <h3><a href="">Lorem Ipsum</a></h3>
                                        <div class="product-price">
                                            <span>$25-00</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!---->
                            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/banner-1.png" class="main-img"
                                            alt="">
                                        </a>
                                        <div class="button-head">
                                            <div class="action-button">
                                    <a data-toggle="modal"data-target="#exampleModal"title="Quick view"
                                    href="#"><i class="far fa-eye"></i>
                                <span>Quick View</span>
                                </a>
                                <a title="wishlist" href="#">
                                    <i class="far fa-heart"></i><span>Add to wish list</span>
                                </a>
                                <a title="wishlist" href="#">
                                    <i class="far fa-heart"></i><span>Add to wish list</span>
                                </a>
                                <a title="shopping" href="#">
                                    <i class="fas fa-shopping-bag"></i><span>Buy Now</span>
                                </a>
                                            </div>
                                            <div class="button-low">
                                                <a title="Add to cart" href="#">Add to cart</a>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="product-title">
                                            <h3><a href="">Lorem Ipsum</a></h3>
                                            <div class="product-price">
                                                <span>$25-00</span>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                                <!---->
                                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="img/banner-1.png" class="main-img"
                                                alt="">
                                            </a>
                                            <div class="button-head">
                                                <div class="action-button">
                                        <a data-toggle="modal"data-target="#exampleModal"title="Quick view"
                                        href="#"><i class="far fa-eye"></i>
                                    <span>Quick View</span>
                                    </a>
                                    <a title="wishlist" href="#">
                                        <i class="far fa-heart"></i><span>Add to wish list</span>
                                    </a>
                                    <a title="wishlist" href="#">
                                        <i class="far fa-heart"></i><span>Add to wish list</span>
                                    </a>
                                    <a title="shopping" href="#">
                                        <i class="fas fa-shopping-bag"></i><span>Buy Now</span>
                                    </a>
                                                </div>
                                                <div class="button-low">
                                                    <a title="Add to cart" href="#">Add to cart</a>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="product-title">
                                                <h3><a href="">Lorem Ipsum</a></h3>
                                                <div class="product-price">
                                                    <span>$25-00</span>
                                                </div>
                                            </div>
            
                                        </div>
                                    </div>
                                    <!---->
                        </div>
                    </div>
                </div>

            <!--End of 2nd Tab-->

            <!---3th tab Start-->

                <div class="tab-pane fade"id="kids"role="tab-panel">
                    <div class="tab-single">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/banner-1.png" class="main-img"
                                            alt="">
                                        </a>
                                        <div class="button-head">
                                            <div class="action-button">
                                <a data-toggle="modal"data-target="#exampleModal"title="Quick view"
                                href="#"><i class="far fa-eye"></i>
                            <span>Quick View</span>
                            </a>
                            <a title="wishlist" href="#">
                                <i class="far fa-heart"></i><span>Add to wish list</span>
                            </a>
                            <a title="wishlist" href="#">
                                <i class="far fa-heart"></i><span>Add to wish list</span>
                            </a>
                            <a title="shopping" href="#">
                                <i class="fas fa-shopping-bag"></i><span>Buy Now</span>
                            </a>
                                            </div>
                                            <div class="button-low">
                                            <a title="Add to cart" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                        </div>
                                        <div class="product-title">
                                        <h3><a href="">Lorem Ipsum</a></h3>
                                        <div class="product-price">
                                            <span>$25-00</span>
                                        </div>
                                    </div>
    
                                    </div>
                                </div>
                                <!---->
                                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/banner-1.png" class="main-img"
                                            alt="">
                                        </a>
                                        <div class="button-head">
                                            <div class="action-button">
                                <a data-toggle="modal"data-target="#exampleModal"title="Quick view"
                                href="#"><i class="far fa-eye"></i>
                            <span>Quick View</span>
                            </a>
                            <a title="wishlist" href="#">
                                <i class="far fa-heart"></i><span>Add to wish list</span>
                            </a>
                            <a title="wishlist" href="#">
                                <i class="far fa-heart"></i><span>Add to wish list</span>
                            </a>
                            <a title="shopping" href="#">
                                <i class="fas fa-shopping-bag"></i><span>Buy Now</span>
                            </a>
                                            </div>
                                            <div class="button-low">
                                            <a title="Add to cart" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                        </div>
                                        <div class="product-title">
                                        <h3><a href="">Lorem Ipsum</a></h3>
                                        <div class="product-price">
                                            <span>$25-00</span>
                                        </div>
                                    </div>
    
                                    </div>
                                </div>
                                <!---->
                                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="img/banner-1.png" class="main-img"
                                                alt="">
                                            </a>
                                            <div class="button-head">
                                                <div class="action-button">
                                    <a data-toggle="modal"data-target="#exampleModal"title="Quick view"
                                    href="#"><i class="far fa-eye"></i>
                                <span>Quick View</span>
                                </a>
                                <a title="wishlist" href="#">
                                    <i class="far fa-heart"></i><span>Add to wish list</span>
                                </a>
                                <a title="wishlist" href="#">
                                    <i class="far fa-heart"></i><span>Add to wish list</span>
                                </a>
                                <a title="shopping" href="#">
                                    <i class="fas fa-shopping-bag"></i><span>Buy Now</span>
                                </a>
                                                </div>
                                                <div class="button-low">
                                                <a title="Add to cart" href="#">Add to cart</a>
                                            </div>
                                        </div>
                                            </div>
                                            <div class="product-title">
                                            <h3><a href="">Lorem Ipsum</a></h3>
                                            <div class="product-price">
                                                <span>$25-00</span>
                                            </div>
                                        </div>
        
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/banner-1.png" class="main-img"
                                                    alt="">
                                                </a>
                                                <div class="button-head">
                                                    <div class="action-button">
                                        <a data-toggle="modal"data-target="#exampleModal"title="Quick view"
                                        href="#"><i class="far fa-eye"></i>
                                    <span>Quick View</span>
                                    </a>
                                    <a title="wishlist" href="#">
                                        <i class="far fa-heart"></i><span>Add to wish list</span>
                                    </a>
                                    <a title="wishlist" href="#">
                                        <i class="far fa-heart"></i><span>Add to wish list</span>
                                    </a>
                                    <a title="shopping" href="#">
                                        <i class="fas fa-shopping-bag"></i><span>Buy Now</span>
                                    </a>
                                                    </div>
                                                    <div class="button-low">
                                                    <a title="Add to cart" href="#">Add to cart</a>
                                                </div>
                                            </div>
                                                </div>
                                                <div class="product-title">
                                                <h3><a href="">Lorem Ipsum</a></h3>
                                                <div class="product-price">
                                                    <span>$25-00</span>
                                                </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- END OF PRODUCT -->
    <!-- SERVICES -->
    <section class="service-intro m-3">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4 d-flex">
                    <div class="intro d-lg-flex">
                        <div class="icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="text">
                            <h2>Online Support 24/7</h2>
                            <p>If you’ve talked to your seller and the issue still isn’t resolved after three business days, contact us.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="intro color-1 d-lg-flex">
                        <div class="icon">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <div class="text">
                            <h2>Money Back Guarantee</h2>
                            <p>You can count on hearing from us within 48 hours.</p>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-md-4 d-flex">
                    <div class="intro color-2 d-lg-flex">
                        <div class="icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="text">
                            <h2>Free Delivery</h2>
                            <p>Free shipping on all orders over $99 within Australia</p>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

    </section>

<!-- END OF SERVICES -->
<!-- ABOUT US -->
    <section class="m-3">
        <div class="about-area p-30">
            <div class="container">
                <div class="row align-item-center justify-content-between p-130">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-details mb-40">
                            <h2>What is TITAN'S ?</h2>
                            <p>TITAN'S SHOP shares with the world the latest Japanese pop culture news through its Facebook page, which has over 20 million likes, and sells products related to Japanese anime, manga, games, music, and fashion through its website, the Tokyo Otaku Mode Shop. TITAN'S strives to be the fastest source for delivering world-famous Japanese pop culture content around the globe. That is TITAN'S mission.</p>
                            <a href="#" class="btn btn-about">Click Here</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="about-img mb-40" >
                            <img src="img/2B-2.jpg" alt="" class="img-fluid" >
                        </div>
                    </div>
                </div>
                <div class="row align-item-center justify-content-between">
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="about-img mb-40">
                            <img src="img/ace.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="about-details mb-40">
                            <h2>TITAN'S Shop Promise</h2>
                            <H3>Fans Come First</H3>
                            <p>All of our decisions are driven by the desire to deliver happiness to fans. We constantly strive to provide rare and exclusive products and satisfy the requests of fans of all genres. We also aim to provide a variety of shipping methods to cater to the needs of fans around the world.</p>
                            <a href="#" class="btn btn-about">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- END OF ABOUT US -->
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





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="/framework/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>