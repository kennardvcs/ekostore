<?php
require("php/setting.php");
require("php/format.php");
require("php/apiConfig/userClient.php");
require("php/apiConfig/requestApi.php");
require("php/controller/userController.php");
require("php/model/userModel.php");
$page = "collection.php?message=";

session_start();
if (@$_SESSION["user_id"] != null) {
    header("location:index.php");
}

?>
<html>

<head>
    <meta charset="utf-8">
    <title>Tester</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
</head>

<body>
    <nav>
        <div class="navlogo">
            <h1>ekogamestore</h1>

        </div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Collection</a></li>
            <li><a href="#">Inquiries</a></li>
        </ul>
    </nav>
<!-- tes -->
    <div class="container">
        <div class="row">
            <div class="col-lg-9 collection-col">
                <div class="row collection-row">
                    <div class="col-lg-3">
                        <div class="productbox">
                            <div class="productimage">
                                <img src="img/ryzen7-5800x.jpg"></img>
                            </div>
                            <div class="productdesc">
                                <div class="productnamediv">
                                    <h1 class="productname">AMD Ryzen 7 5800X 3.8 GHz Eight-Core AM4 Processor</h1>
                                </div><br>
                                <p class="productprice"><?php echo rupiah(5800000); ?> </p>
                            </div>
                            <div class="buybutton">
                                <button class="buy btn">Buy</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="productbox">
                            <div class="productimage">
                                <img src="img/ryzen7-5800x.jpg"></img>
                            </div>
                            <div class="productdesc">
                                <div class="productnamediv">
                                    <h1 class="productname">AMD Ryzen 7 5800X 3.8 GHz Eight-Core AM4 Processor</h1>
                                </div><br>
                                <p class="productprice"><?php echo rupiah(5800000); ?> </p>
                            </div>
                            <div class="buybutton">
                                <button class="buy btn">Buy</button>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-lg-3 filter-col">
                <div class="filter-box">
                    <div class="filter-buttons">
                        <h3>Filters</h3>
                        <input class="form-check-input filter-radio" type="radio" name="typevga" id="vgaradiobutton">
                        <label class="form-check-label" for="vgaradiobutton">
                            VGAs
                        </label><br>
                        <input class="form-check-input filter-radio" type="radio" name="typeprocessors" id="processorsradiobutton">
                        <label class="form-check-label" for="processorsradiobutton">
                            Processors
                        </label><br>
                        <input class="form-check-input filter-radio" type="radio" name="typepc" id="pcradiobutton">
                        <label class="form-check-label" for="pcradiobutton">
                            PCs
                        </label>
                    </div>
                </div>
            </div>


        </div>
    </div>


</body>


</html>