<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../framework/bootstrap/css/bootstrap.css">
</head>
<body>
        <?php 
        include "db.php";

            // if (isset($_GET['keyword'])) {
            //     $keyword = $_GET['keyword'];
            //     $product = mysqli_query($conn,"SELECT * FROM product WHERE Name LIKE '%$keyword%'");
            //     header('Location: /figure-svc/index.php')
            // } else {
            //     // $product = mysqli_query($conn,"SELECT * FROM product ORDER BY id ASC");
            //     header('Location: /figure-svc/index.php')
            //     echo"khong tim co ket qua nao";
            // }
    ?>

        <?php
        while($row=mysqli_fetch_array($product)) {
    ?>

        <div class="row mt-3">
            <form action="" method="get" class="form-inline">
                <input type="search" name="keyword" class="form-control" id="" placeholder="name...">
                <button class="btn btn-primary form-control">asdfasdf</button>
            </form>
        </div>
    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
        <div class="single-product">
            <div class="product-img">
                <a href="chi-tiet.php?id=<?php echo $row['id'] ?>">
                    <img src="../<?=$row['Image']?>" class="main-img" alt="#" height="200" >
                </a>
                </div>
            </div>
            <div class="product-title">
                <h3><a href=""><?=$row['Name'] ?></a></h3>
                <div class="product-price">
                    <span><?=number_format($row['Price'],0,",",".")?>$</span>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</body>
</html>