<?php
require("php/setting.php");
require("php/format.php");
require("php/apiConfig/userClient.php");
require("php/apiConfig/requestApi.php");
require("php/controller/userController.php");
require("php/model/userModel.php");
$page = "collection.php?message=";

// session_start();
// if (@$_SESSION["user_id"] != null) {
//     header("location:index.php");
// }

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
    <?php
    session_start();
    if (@$_SESSION["user_id"] == null) {
        require("navbar/navbar.php");
    } else {
        require("navbar/navbarSession.php");
    }
    ?>
    <!-- tes -->
    <div class="container">
        <div class="row">
            <div class="col-lg-9 collection-col">
                <div class="row collection-row">
                    <?php
                    $result = get($allProduct);
                    if ($result->value == 0) {

                        @$filterVGA = $_GET['filterVGA'];
                        
                        if (@$filterVGA == 'true') {
                            
                            foreach ($result->data as $data) {
                               
                                if ($data->product_type == "GPU") {
                            

                    ?>
                                    <div class="col-lg-3">
                                        <div class="productbox">
                                            <div class="productimage">
                                                <img src="<?php echo $data->product_img ?>"></img>
                                            </div>
                                            <div class="productdesc">
                                                <div class="productnamediv">
                                                    <h1 class="productname"><?php echo $data->product_name ?></h1>
                                                </div><br>
                                                <p class="productprice"><?php echo rupiah($data->product_price); ?> </p>
                                            </div>
                                            <div class="buybutton">
                                                <button class="buy btn">Buy</button>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                            }
                        } 
                        @$filterProcessor = $_GET['filterProcessor'];
                        if (@$filterProcessor == 'true') {
                            
                            foreach ($result->data as $data) {
                               
                                if ($data->product_type == "Processor") {
                            

                    ?>
                                    <div class="col-lg-3">
                                        <div class="productbox">
                                            <div class="productimage">
                                                <img src="<?php echo $data->product_img ?>"></img>
                                            </div>
                                            <div class="productdesc">
                                                <div class="productnamediv">
                                                    <h1 class="productname"><?php echo $data->product_name ?></h1>
                                                </div><br>
                                                <p class="productprice"><?php echo rupiah($data->product_price); ?> </p>
                                            </div>
                                            <div class="buybutton">
                                                <button class="buy btn">Buy</button>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                            }
                        }
                        @$filterPC = $_GET['filterPC'];
                        if (@$filterPC == 'true') {
                            
                            foreach ($result->data as $data) {
                               
                                if ($data->product_type == "PC") {
                            

                    ?>
                                    <div class="col-lg-3">
                                        <div class="productbox">
                                            <div class="productimage">
                                                <img src="<?php echo $data->product_img ?>"></img>
                                            </div>
                                            <div class="productdesc">
                                                <div class="productnamediv">
                                                    <h1 class="productname"><?php echo $data->product_name ?></h1>
                                                </div><br>
                                                <p class="productprice"><?php echo rupiah($data->product_price); ?> </p>
                                            </div>
                                            <div class="buybutton">
                                                <button class="buy btn">Buy</button>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                            }
                        }else {
                            foreach ($result->data as $data) {




                                ?>
                                <div class="col-lg-3">
                                    <div class="productbox">
                                        <div class="productimage">
                                            <img src="<?php echo $data->product_img ?>"></img>
                                        </div>
                                        <div class="productdesc">
                                            <div class="productnamediv">
                                                <h1 class="productname"><?php echo $data->product_name ?></h1>
                                            </div><br>
                                            <p class="productprice"><?php echo rupiah($data->product_price); ?> </p>
                                        </div>
                                        <div class="buybutton">
                                            <button class="buy btn">Buy</button>
                                        </div>
                                    </div>
                                </div>
                    <?php

                            }
                        }
                    }
                    ?>

                </div>
            </div>
            <div class="col-lg-3 filter-col">
                <div class="filter-box">
                    <div class="filter-buttons">
                        <h3>Filters</h3>
                        <input class="form-check-input filter-radio" type="checkbox" name="typevga" id="vgaradiobutton" onclick="filterVGA()">
                        <label class="form-check-label" for="vgaradiobutton">
                            VGAs
                        </label><br>
                        <input class="form-check-input filter-radio" type="checkbox" name="typeprocessors" id="processorsradiobutton" onclick="filterProcessor()">
                        <label class="form-check-label" for="processorsradiobutton">
                            Processors
                        </label><br>
                        <input class="form-check-input filter-radio" type="checkbox" name="typepc" id="pcradiobutton" onclick="filterPC()">
                        <label class="form-check-label" for="pcradiobutton">
                            PCs
                        </label>
                    </div>
                </div>
            </div>


        </div>
    </div>


</body>
<script>
    var VGA = "<?php @$vga = $_GET["filterVGA"];
                echo $vga; ?>";
    if (VGA == "true") {
        document.getElementById("vgaradiobutton").checked = true;
    }

    var processor = "<?php @$processor = $_GET["filterProcessor"];
                echo $processor; ?>";
    if (processor == "true") {
        document.getElementById("processorsradiobutton").checked = true;
    }

    var PC = "<?php @$pc = $_GET["filterPC"];
                echo $pc; ?>";
    if (PC == "true") {
        document.getElementById("pcradiobutton").checked = true;
    }
</script>
<script>
    function filterVGA() {
        var VGA = document.getElementById("vgaradiobutton").checked;
        // alert(VGA);
        var currentUrl;

        if (VGA == true) {
            currentUrl = "http://localhost/projects/testing2/collection.php?filterVGA=true";
        } else {

            currentUrl = "http://localhost/projects/testing2/collection.php";
        }

        location.replace(currentUrl);


        
    }

    function filterProcessor() {
        var processor = document.getElementById("processorsradiobutton").checked;
        // alert(VGA);
        var currentUrl;

        if (processor == true) {
            currentUrl = "http://localhost/projects/testing2/collection.php?filterProcessor=true";
        } else {

            currentUrl = "http://localhost/projects/testing2/collection.php";
        }

        location.replace(currentUrl);

    }

    function filterPC() {
        var PC = document.getElementById("pcradiobutton").checked;
        // alert(VGA);
        var currentUrl;

        if (PC == true) {
            currentUrl = "http://localhost/projects/testing2/collection.php?filterPC=true";
        } else {

            currentUrl = "http://localhost/projects/testing2/collection.php";
        }

        location.replace(currentUrl);

    }
</script>

</html>