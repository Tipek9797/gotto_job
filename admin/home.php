<?php

use PO\Lib\DB;

session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
require_once '../lib/DB.php';

$dbInstance = new DB();

$getJobs = $dbInstance->getJobs();

if (isset($_GET['status'])) {
    if ($_GET['status'] == 1) {
        echo "<div id='alert' class='alert alert-success'>Úspešne vložená položka</div>";
    } elseif ($_GET['status'] == 2) {
        echo "<div id='alert' class='alert alert-danger'>Položka sa nevložila</div>";
    } elseif ($_GET['status'] == 3) {
        echo "<div id='alert' class='alert alert-success'>Úspešne vymazaná položka</div>";
    } elseif ($_GET['status'] == 4) {
        echo "<div id='alert' class='alert alert-danger'>Položka sa nezmazala</div>";
    } elseif ($_GET['status'] == 5) {
        echo "<div id='alert' class='alert alert-success'>Úspešne aktualizovaná položka</div>";
    } elseif ($_GET['status'] == 6) {
        echo "<div id='alert' class='alert alert-danger'>Položka sa neaktualizovala</div>";
    }
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
        <section class="job-section job-featured-section section-padding" id="job-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <a href="insert.php" class="logout-icon">
                            <div class="nav-link custom-btn btn">
                                Insert
                            </div>
                        </a>
                        </br>
                        <?php foreach ($getJobs as $job) : ?>
                            <div class="job-thumb d-flex">
                                <div class="job-image-wrap bg-white shadow-lg">
                                    <img src="../<?php echo $job['image']; ?>" class="job-image img-fluid" alt="">
                                </div>
                                <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                                    <div class="mb-3">
                                        <h4 class="job-title mb-lg-0">
                                            <a href="<?php echo htmlspecialchars($job['urldetails']); ?>" class="job-title-link"><?php echo $job['name']; ?></a>
                                        </h4>

                                        <div class="d-flex flex-wrap align-items-center">
                                            <p class="job-location mb-0">
                                                <i class="custom-icon bi-geo-alt me-1"></i>
                                                <?php echo $job['location']; ?>
                                            </p>

                                            <p class="job-date mb-0">
                                                <i class="custom-icon bi-clock me-1"></i>
                                                <?php echo $job['posted']; ?>
                                            </p>

                                            <p class="job-price mb-0">
                                                <i class="custom-icon bi-cash me-1"></i>
                                                <?php echo $job['pay']; ?>
                                            </p>

                                            <div class="d-flex">
                                                <p class="mb-0">
                                                    <a href="<?php echo htmlspecialchars($job['urllistings']); ?>" class="badge badge-level"><?php echo $job['jobposition']; ?></a>
                                                </p>

                                                <p class="mb-0">
                                                    <a href="<?php echo htmlspecialchars($job['urllistings']); ?>" class="badge"><?php echo $job['jobtype']; ?></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-section-btn-wrap">
                                        <a href="<?php echo htmlspecialchars($job['urldetails']); ?>" class="custom-btn btn">Apply now</a>
                                    </div>

                                    <div class="d-flex">
                                        <p class="mb-0">
                                            <a href='edit.php?id=<?php echo $job['id']; ?>' class="badge badge-level">Edit</a>
                                        </p>

                                        <p class="mb-0">
                                            <a href='delete.php?id=<?php echo $job['id']; ?>' class="badge">Delete</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <a href="logout.php" class="logout-icon">
                            <div class="nav-link custom-btn btn">
                                Logout
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>