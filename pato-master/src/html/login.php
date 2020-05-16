
<?php
session_start();
?>
<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="login.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
    <link rel="icon" type="image/jpg" href="images/icons/wazobia2.jpg" />
</head>

<body>
    <!-- main -->
    <div class="item-slick1 item3-slick1" style="background-image: url(images/master-slides-01.jpg);">
    <?php
            if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                echo '<h2 class="bg-danger text-white"> ' . $_SESSION['status'] . ' </h2>';
                unset($_SESSION['status']);
            }
            ?>
        <div class="main-w3layouts wrapper">
            <h1>Welcome Back</h1>
            <div class="main-agileinfo">
                <div class="agileits-top">
                    <form action="functions.php" method="post">
                        <br>
                        <input class="text email" type="email" name="email" placeholder="Email" required="">
                        <input class="text" type="password" name="password" placeholder="Password" required="">
                        <br>
                        <input type="submit" name="login" value="LOGIN">
                        <br>
                        <br>
                    </form>
                </div>
            </div>
            <br>
            <!-- copyright -->
            <div class="colorlibcopy-agile">
                <p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
            </div>
            <!-- //copyright -->
        </div>
        <!-- //main -->
</body>

</html>