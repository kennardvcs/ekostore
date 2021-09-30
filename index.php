<?php
require("php/setting.php");
require("php/format.php");
require("php/apiConfig/userClient.php");
require("php/apiConfig/requestApi.php");
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
        if(@$_SESSION["user_id"] == null) {
            require("navbar/navbar.php");
        } else {
            require("navbar/navbarSession.php");
        }
    ?>
    
    <div class="container">
    <h2 id="rowheadline">Newest Products</h4>
    <div class="row productrow">
            <?php
             $result = get($dataDashboard);
             if($result -> value == 1) {
                 foreach ($result -> dataNew as $data ) {
            ?>
                    <div class="col-lg-3">
                        <div class="productbox">
                            <div class="productimage">
                                <img src="<?php echo $data -> product_img?>"></img>
                            </div>
                            <div class="productdesc">
                                <div class="productnamediv">
                                    <h1 class="productname"><?php echo $data -> product_name ?></h1>
                                </div>
                                <p class="productprice"><?php echo rupiah($data -> product_price);?> </p>
                            </div>
                                <div class="buybutton">
                                    <button class="buy btn">Buy</button>
                                </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <h2 id="rowheadline">Processors</h4>
        <div class="row productrow">
            <?php
            $result = get($dataDashboard);
            if($result -> value == 1) {
                foreach ($result -> dataCpu as $data ) {
            ?>
                    <div class="col-lg-3">
                        <div class="productbox">
                            <div class="productimage">
                                <img src="<?php echo $data -> product_img?>"></img>
                            </div>
                            <div class="productdesc">
                                <div class="productnamediv">
                                    <h1 class="productname"><?php echo $data -> product_name ?></h1>
                                </div>
                                <p class="productprice"><?php echo rupiah($data -> product_price);?> </p>
                            </div>
                                <div class="buybutton">
                                    <button class="buy btn">Buy</button>
                                </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </div>
        <h2 id="rowheadline">VGAs</h4>
        <div class="row productrow">
            <?php
             $result = get($dataDashboard);
             if($result -> value == 1) {
                 foreach ($result -> dataGpu as $data ) {
            ?>
                    <div class="col-lg-3">
                        <div class="productbox">
                            <div class="productimage">
                                <img src="<?php echo $data -> product_img?>"></img>
                            </div>
                            <div class="productdesc">
                                <div class="productnamediv">
                                    <h1 class="productname"><?php echo $data -> product_name ?></h1>
                                </div>
                                <p class="productprice"><?php echo rupiah($data -> product_price);?> </p>
                            </div>
                                <div class="buybutton">
                                    <button class="buy btn">Buy</button>
                                </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
</body>

</html>