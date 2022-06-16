<?php

include("config.php");

if (!isset($_SESSION["uname"])) {
    header("Location: login.php");
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">

    <title>BOUN RMS</title>

    <style>


        .container1 {
            box-shadow: 10px 5px 9px 0px rgba(111, 128, 108, 0.78);
            background-color: #E8F6EF;
            margin-top: 20px;
            position: relative;
            top: 100px;
            left: 100px;
            width: 300px;
            height: 100px;
            border-radius: 50px;
        }



        .std {
            padding-top: 30px;
            text-align: center !important;
        }

        .bottom {
            border: 1px dotted #E8F6EF;
            background-color: #E8F6EF;
            text-align: center;
            position: fixed;
            margin: 30px;
            left: 0px;
            right: 0px;
            bottom: 0px;
        }

        a {
            text-decoration: none !important;
            color: black !important;
        }

        a:hover {
            color: darkslategrey !important;
        }

        @import url('https://fonts.googleapis.com/css?family=Poppins');

        /* BASIC */


        body {
            font-family: "Poppins", sans-serif;
            height: 100vh;
        }

        a {
            color: #92badd;
            display:inline-block;
            text-decoration: none;
            font-weight: 400;
        }

        h2 {
            text-align: center;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            display:inline-block;
            margin: 40px 8px 10px 8px;
            color: #cccccc;
        }



        /* STRUCTURE */

        .wrapper {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            min-height: 100%;
            padding: 20px;
        }

        #formContent {
            -webkit-border-radius: 10px 10px 10px 10px;
            border-radius: 10px 10px 10px 10px;
            background: #fff;
            padding: 30px;
            width: 90%;
            max-width: 450px;
            position: relative;
            padding: 0px;
            -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            text-align: center;
        }

        #formFooter {
            background-color: #f6f6f6;
            border-top: 1px solid #dce8f1;
            padding: 25px;
            text-align: center;
            -webkit-border-radius: 0 0 10px 10px;
            border-radius: 0 0 10px 10px;
        }



        /* TABS */

        h2.inactive {
            color: #cccccc;
        }

        h2.active {
            color: #0d0d0d;
            border-bottom: 2px solid #5fbae9;
        }



        /* FORM TYPOGRAPHY*/

        input[type=button], input[type=submit], input[type=reset]  {
            background-color: #56baed;
            border: none;
            color: white;
            padding: 15px 80px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            text-transform: uppercase;
            font-size: 13px;
            -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
            box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
            margin: 5px 20px 40px 20px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
            background-color: #39ace7;
        }

        input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
            -moz-transform: scale(0.95);
            -webkit-transform: scale(0.95);
            -o-transform: scale(0.95);
            -ms-transform: scale(0.95);
            transform: scale(0.95);
        }

        input[type=text] {
            background-color: #f6f6f6;
            border: none;
            color: #0d0d0d;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            width: 85%;
            border: 2px solid #f6f6f6;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
        }

        input[type=text]:focus {
            background-color: #fff;
            border-bottom: 2px solid #5fbae9;
        }

        input[type=text]:placeholder {
            color: #cccccc;
        }


        input[type=password] {
            background-color: #f6f6f6;
            border: none;
            color: #0d0d0d;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            width: 85%;
            border: 2px solid #f6f6f6;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
        }

        input[type=password]:focus {
            background-color: #fff;
            border-bottom: 2px solid #5fbae9;
        }

        input[type=password]:placeholder {
            color: #cccccc;
        }


        /* ANIMATIONS */

        /* Simple CSS3 Fade-in-down Animation */
        .fadeInDown {
            -webkit-animation-name: fadeInDown;
            animation-name: fadeInDown;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        @-webkit-keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        /* Simple CSS3 Fade-in Animation */
        @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
        @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
        @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

        .fadeIn {
            opacity:0;
            -webkit-animation:fadeIn ease-in 1;
            -moz-animation:fadeIn ease-in 1;
            animation:fadeIn ease-in 1;

            -webkit-animation-fill-mode:forwards;
            -moz-animation-fill-mode:forwards;
            animation-fill-mode:forwards;

            -webkit-animation-duration:1s;
            -moz-animation-duration:1s;
            animation-duration:1s;
        }

        .fadeIn.first {
            -webkit-animation-delay: 0.4s;
            -moz-animation-delay: 0.4s;
            animation-delay: 0.4s;
        }

        .fadeIn.second {
            -webkit-animation-delay: 0.6s;
            -moz-animation-delay: 0.6s;
            animation-delay: 0.6s;
        }

        .fadeIn.third {
            -webkit-animation-delay: 0.8s;
            -moz-animation-delay: 0.8s;
            animation-delay: 0.8s;
        }

        .fadeIn.fourth {
            -webkit-animation-delay: 1s;
            -moz-animation-delay: 1s;
            animation-delay: 1s;
        }

        /* Simple CSS3 Fade-in Animation */
        .underlineHover:after {
            display: block;
            left: 0;
            bottom: -10px;
            width: 0;
            height: 2px;
            background-color: #56baed;
            content: "";
            transition: width 0.2s;
        }

        .underlineHover:hover {
            color: #0d0d0d;
        }

        .underlineHover:hover:after{
            width: 100%;
        }



        /* OTHERS */

        *:focus {
            outline: none;
        }

        #icon {
            width:60%;
        }

        * {
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<?php
include("header.php");
?>
<div class="row">
    <div class="col-lg-6">
    <?php
        include("navbar.php");
    ?>
    </div>
    <div class="col-lg-6">
        <?php
            if (isset($_POST['add-new-course'])){

                $name = $_POST['name'];
                $description = $_POST['description'];
                $quota = $_POST['quota'];
                $final_date = $_POST['final_date'];
                $credits = $_POST['credits'];
                $inst_id = $_POST['inst_id'];
                $consent = $_POST['consent'];

                if (empty($name)){
                    echo "<div class='alert alert-danger'>Please input the name</div>";
                }elseif (empty($description)){
                    echo "<div class='alert alert-danger'>Please input the description</div>";
                }elseif (empty($quota)){
                    echo "<div class='alert alert-danger'>Please input the quota</div>";
                }elseif (empty($final_date)){
                    echo "<div class='alert alert-danger'>Please input the final date</div>";
                }elseif (empty($credits)){
                    echo "<div class='alert alert-danger'>Please input the credits</div>";
                }elseif (empty($credits)){
                    echo "<div class='alert alert-danger'>Please input the inst id</div>";
                }else {

                    $add_new_course = $db->prepare("INSERT INTO courses SET 
                        c_name = :c_name,
                        c_description = :c_description,
                        c_quota = :c_quota,
                        c_final_date = :c_final_date,
                        c_credits = :c_credits,
                        inst_id = :inst_id,
                        consent = :consent");
                    $result = $add_new_course->execute([
                        'c_name' => $name,
                        'c_description' => $description,
                        'c_quota' => $quota,
                        'c_final_date' => $final_date,
                        'c_credits' => $credits,
                        'inst_id' => $inst_id,
                        'consent' => $consent
                    ]);

                    if ($result){
                        echo "<div class='alert alert-success'>Success</div>";
                    }else {
                        echo "<div class='alert alert-danger'>Danger</div>";
                    }

                }

            }
        ?>
        <h2 class="active" style="margin-top: 10rem;"> Add New Course </h2>
        <form action="" method="post">
            <input type="text" id="login" class="fadeIn second" name="name" placeholder="Name">
            <input type="text" id="password" class="fadeIn third" name="description" placeholder="Description">
            <input type="text" id="type" class="fadeIn third" name="quota" placeholder="Quota">
            <input type="date" id="type" class="form-control" name="final_date" placeholder="Final Date" style="width: 800px;">
            <br>
            <input type="number" id="type" class="form-control" name="credits" placeholder="Credits" style="width: 800px;">
            <br>
            <select name="inst_id" class="form-control" style="width: 800px;">
                <option value="">Lütfen seçiniz</option>
                <?php
                    $professor_control = $db->prepare("SELECT * FROM users WHERE utype = :utype");
                    $professor_control->execute([
                        'utype' => 'professor'
                    ]);

                    if ($professor_control->rowCount()){

                        $professors = $professor_control->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($professors as $professor):
                ?>
                <option value="<?=$professor['uid'] ?>"><?=$professor['fname'] . " " . $professor['surname'] ?></option>
                <?php
                        endforeach;

                    }
                ?>
            </select>
            <br>
            <select name="consent" class="form-control" style="width: 800px;">
                <option value="">Please Select</option>
                <option value="1">Requires Consent</option>
                <option value="0">Doesn't Require Consent</option>
            </select>
            <br>
            <button name="add-new-course" class="btn btn-success btn-lg text-center">Add</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>