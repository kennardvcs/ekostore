<?php
require("php/setting.php");
require("php/format.php");
require("php/apiConfig/userClient.php");
require("php/apiConfig/requestApi.php");
require("php/controller/userController.php");
require("php/model/userModel.php");
$page = "login.php?message=";

    session_start();
    if(@$_SESSION["user_id"] != null) {
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
            <li><a href="login.php">Log In</a></li>
            <li><a href="#">Inquiries</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="loginbox">
            <div class="row">
                <div class="col-lg logincol">
                    <h1>Log In</h1>
                    <form method="POST" action="login.php">
                        <input name="user_email" class="form-control emailinput accountform" type="email" placeholder="Email Address" required />
                        <input name="user_password" class="form-control passwordinput accountform" type="password" placeholder=" Password" required />
                        <input name="login" class="btn loginbtn" type="submit" value="Log In" />
                    </form>
                </div>
                <div class="col-lg createcol">
                    <h1>New Here?</h1>
                    <p>Create a new account to shop and receive discount and offers!</p>
                    <button class='btn newaccountredirectbtn' onclick="window.location.href='create.php'">Create New Account</button>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<script>
    <?php
    if (isset($_POST["login"])) {
        $user_email = $_POST["user_email"];
        $user_password = $_POST["user_password"];
        $result = login($login, loginUser_model(
            $user_email,
            $user_password
        ));

        $page = $page . $result->message;
        if ($result->value == 0) { ?>
            Swal.fire({
                type: 'Success',
                title: 'Success',
                text: '<?php echo $result->message; ?>'
            });

        <?php 
            session_start();
            $_SESSION['user_id'] = $result -> user_id;
            header("location: index.php");
        } else { ?>
            Swal.fire({
                type: 'Error',
                title: 'Error',
                text: '<?php echo $result->message; ?>'
            });
    <?php }
    }
    ?>
</script>

</html>