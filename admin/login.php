<?php
session_start();
const USERNAME = "admin";
const PASSWORD = "admin";

if (isset($_POST['login'])) {
    if ($_POST['username'] == USERNAME && $_POST['password'] == PASSWORD) {
        $_SESSION['login'] = true;
        header("Location: home.php");
    } else {
        header("Location: login.php?error=1");
    }
}

if (isset($_GET['error'])) {
    echo "<p style='color: red'>Nespravne meno alebo heslo</p><br>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gotto Online Job Portal</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/bootstrap-icons.css" rel="stylesheet">

    <link href="../css/owl.carousel.min.css" rel="stylesheet">

    <link href="../css/owl.theme.default.min.css" rel="stylesheet">

    <link href="../css/tooplate-gotto-job.css" rel="stylesheet">

    <!--

Tooplate 2134 Gotto Job

https://www.tooplate.com/view/2134-gotto-job

Bootstrap 5 HTML CSS Template

-->
</head>

<body id="top">

    <main>

        <section class="hero-section d-flex justify-content-center align-items-center">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row">
                    <div>
                        <form class="custom-form hero-form" action="" method="post">
                            <h3 class="text-white mb-3" style="text-align: center;">Prihlasit</h3>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi-person custom-icon"></i></span>
                                        <input type="text" name="username" value="" placeholder="Username" class="form-control"><br>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2"><i class="bi-geo-alt custom-icon"></i></span>
                                        <input type="password" name="password" value="" placeholder="Password" class="form-control"><br>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <button type="submit" name="login" value="Prihlasit" class="form-control">
                                        Prihlasit
                                    </button>
                                </div>
                            </div>
                            </br>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/custom.js"></script>

</body>

</html>