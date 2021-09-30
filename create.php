<?php
require("php/setting.php");
require("php/format.php");
require("php/apiConfig/userClient.php");
require("php/apiConfig/requestApi.php");
require("php/controller/userController.php");
require("php/model/userModel.php");
$page = "create.php?message=";
// $sukses = '<script> window.location = "' . $page . '"; </script>';
// $gagal = '<script> window.location = "' . $page . '"; </script>';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
</head>

<body>

    <div class="container">
        <div class="loginbox">
            <div class="row">
                <div class="col-lg createcol2">
                    <h1>Create New Account</h1>
                    <form method="POST" action="create.php">
                        <input name="user_email_new" class="form-control newemailinput accountform" type="email" placeholder="Email Address" required />
                        <input name="user_password_new" class="form-control newpasswordinput accountform" type="password" placeholder=" Password" required />
                        <input name="user_firstname_new" class="form-control firstname accountform" type="text" placeholder="First Name" required />
                        <input name="user_lastname_new" class="form-control lastname accountform" type="text" placeholder=" Last Name" required />
                        <input name="create" class="btn createaccbtn" type="submit" value="Create Account" />
                    </form>
                </div>
                <div class="col-lg logincol2">
                    <h1>Already have an account?</h1>
                    <p>Directly log in to enjoy shopping!</P>
                    <button class='btn loginredirectbtn' onclick="window.location.href='login.php'">Log In</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
</body>
<script>
    <?php
    if (isset($_POST["create"])) {
        $user_email = $_POST["user_email_new"];
        $user_password = $_POST["user_password_new"];
        $user_firstname = $_POST["user_firstname_new"];
        $user_lastname = $_POST["user_lastname_new"];
        $result = insert($register, registerUser_model(
            $user_email,
            $user_password,
            $user_firstname,
            $user_lastname
        ));

        $page = $page . $result->message;
        if ($result->value == 0) { ?>
            Swal.fire({
                type: 'Success',
                title: 'Success',
                text: '<?php echo $result->message; ?>'
            });

        <?php } else { ?>
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