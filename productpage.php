<?php
require("php/setting.php");
require("php/format.php");
require("php/apiConfig/userClient.php");
require("php/apiConfig/requestApi.php");
require("php/controller/userController.php");
require("php/model/userModel.php");
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <meta charset="utf-8">
    <title>Tester</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    session_start();
    if (@$_SESSION["user_id"] == null) {
        require("navbar/navbar.php");
    } else {
        require("navbar/navbarSession.php");
    }
    ?>

    <?php
    if(isset($_POST["product_id"])) {
        $product_id = $_POST["product_id"];
        echo $product_id;
    } else {
        echo "data tidak ada";
    }
    ?>

    <div class="container">
        <div class="row productpagerow">
            <div class="col-lg-8">

            </div>
            <div class="col-lg-4">
                <h1 class="productnameheadline">Product Name</h1>
                <p class="productdesc">Product description | Product description |
                    Product description | Product description | Product description |
                    Product description | Product description | Product description | Product description |
                    Product description | Product description | Product description | Product description |
                </p>
                <div class="addtocart">

                    <form action="">
                        <button class="form-control addtocart">Add To Cart</button>
                        <div class="row">
                            <div class="col-lg">
                                <div class="row">
                                    <div class="col-lg">
                                        <p ID="txtquantity">Quantity</p>
                                    </div>
                                    <div class="col-lg">
                                        <input type="number" id="quantity" name="quantity" min="1" max="5" class="form-control" id="quantityfield" value="1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>