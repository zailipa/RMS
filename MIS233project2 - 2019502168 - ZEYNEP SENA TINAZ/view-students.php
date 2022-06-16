<?php

include("config.php");

if (!isset($_SESSION["uname"])) {
    header("Location: login.php");
}

if (empty($_GET['c_id'])){
    header('Location:view.php');
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
            if (isset($_POST['submit'])){

                $grades = $_POST['grade'];

                foreach ($grades as $grade){

                    $grade_ss = explode('-', $grade); /* tireden parçalar */
                    $grade = $grade_ss[0];
                    $id = $grade_ss[1];
                    $u_id = $grade_ss[2];

                    $update = $db->prepare("UPDATE st_course SET
                        grade = :grade WHERE id = :id AND u_id = :u_id");
                    $result = $update->execute([
                        'grade' => $grade,
                        'id' => $id,
                        'u_id' => $u_id
                    ]);

                    if ($result){
                        echo "<div class='alert alert-success'>Success!</div>";
                    }else {
                        echo "<div class='alert alert-danger'>Something went wrong!</div>";
                    }


                }

            }
        ?>
        <form action="" method="post">
            <table class="table" style="margin-top: 10rem;">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Course Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $course_search = $db->prepare("SELECT * FROM st_course WHERE c_id = :c_id");
                    $course_search->execute([
                        'c_id' => $_GET['c_id']
                    ]);

                    $courses = $course_search->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($courses as $course):

                        $user_control = $db->prepare("SELECT * FROM users WHERE uid = :uid");
                        $user_control->execute([
                            'uid' => $course['u_id']
                        ]);

                        $user_row = $user_control->fetch(PDO::FETCH_ASSOC);

                        $course_control = $db->prepare("SELECT * FROM courses WHERE c_id = :c_id");
                        $course_control->execute([
                            'c_id' => $course['c_id']
                        ]);

                        $course_row = $course_control->fetch(PDO::FETCH_ASSOC);

                ?>
                <tr>
                    <td><?=$user_row['fname'] ?></td>
                    <td><?=$user_row['surname'] ?></td>
                    <td><?=$course_row['c_name'] . " - " . $course_row['c_description'] ?></td>
                    <td>
                        <select name="grade[]" class="form-control">
                            <option value="Not Submitted-<?=$course['id'] ?>-<?=$user_row['uid'] ?>"<?=$course['grade'] == "Not Submitted" ? ' selected' : null ?>>Not Submitted</option>
                            <option value="P-<?=$course['id'] ?>-<?=$user_row['uid'] ?>"<?=$course['grade'] == "P" ? ' selected' : null ?>>P</option>
                            <option value="F-<?=$course['id'] ?>-<?=$user_row['uid'] ?>"<?=$course['grade'] == "F" ? ' selected' : null ?>>F</option>
                        </select>
                    </td>
                </tr>
                <?php
                    endforeach;
                ?>
                </tbody>
            </table>
            <?php
                if ($course_search->rowCount()):
            ?>
            <button name="submit" type="submit" class="btn btn-success">Submit</button>
            <?php
                endif;
            ?>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>