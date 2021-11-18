<?php
require("php/setting.php");
require("php/format.php");
require("php/apiConfig/userClient.php");
require("php/apiConfig/requestApi.php");
require("php/controller/userController.php");
require("php/model/userModel.php");
$page = "login.php?message=";


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
        if(@$_SESSION["user_id"] == null) {
            require("navbar/navbar.php");
        } else {
            require("navbar/navbarSession.php");
        }
    ?>

    <div class="container">
        <div class="myaccounthead">
            <h1>Account Name</h1>
            <h4>Email</h4>

        </div>
        <div class="myaccountorders">
            <div class="ongoingorders">
                <div class="ongoingorders-title">
                    <h3>Ongoing</h3>
                </div>
                <div class="ongoingorders-details">
                    <h4>Order ID #XXXX</h4>
                    <h4>Order Date DDMMYYYY</h4>
                    <h4>Order Total</h4>
                </div>
            </div>
        </div>
    </div>
</body>


</html>