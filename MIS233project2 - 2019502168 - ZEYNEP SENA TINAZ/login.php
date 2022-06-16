<?php

    include("config.php");

    if (isset($_SESSION['uname'])){
        header('Location:index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>
    <link rel="stylesheet" href="login.css">

</head>
<body>
<?php

    if (isset($_POST["submit"])) {

        $uname = $_POST["uname"];
        $upass = $_POST["upass"];
        $captcha = $_POST['captcha'];

        $user_control = $db->prepare("SELECT * FROM users WHERE uname = :uname AND upass = :upass");
        $user_control->execute([
            'uname' => $uname,
            'upass' => $upass
        ]);

        if ($user_control->rowCount()){

            if ($captcha == $_SESSION['code']) {
                $_SESSION["uname"] = $uname;
                header('Location:index.php');
            } else {
                echo "Verification failed.";
            }

        }else {
            echo "username or password is wrong!";
        }

    }

?>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <h2 class="active"> BOUN Registration Management System </h2><br>
        <h2 class="active"> Sign In </h2>
        <form action="login.php" method="post">
            <input type="text" id="login" class="fadeIn second" name="uname" placeholder="login">
            <input type="password" id="password" class="fadeIn third" name="upass" placeholder="password">
            <img src="captcha.php" width="15%" style="margin-top: 0.5rem;">
            <input type="text" name="captcha" placeholder="enter the code">
            <input type="submit" class="fadeIn fourth" name="submit" value="Log In">
        </form>
    </div>
</div>
</body>
</html>