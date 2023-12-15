<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <style>
        body {
            font-family: 'League Spartan', sans-serif;
        }

        main {
            padding: 20px;
        }

        .job-section {
            background-color: #f8f9fa;
            border-radius: 10px;
            margin-top: 20px;
            padding: 30px;
        }

        form {
            max-width: 600px;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body id="top">
    <main>
        <section class="job-section job-featured-section section-padding" id="job-section">
            <div class="container">
                <div class="row">
                    <form id="contact-form" action="insert_job.php" method="post">
                        <input type="hidden" name="id" value="">
                        
                        <div class="col-lg-12">
                            <label for="image">Image source</label>
                            <input type="text" required="required" name="image" value="" placeholder="Image source"><br>
                        </div>
                        
                        <div class="col-lg-12">
                            <label for="urldetails">Url for details</label>
                            <input type="text" required="required" name="urldetails" value="" placeholder="Url for details"><br>
                        </div>

                        <div class="col-lg-12">
                            <label for="name">Title</label>
                            <input type="text" required="required" min="1" name="name" value="" placeholder="Title"><br>
                        </div>

                        <div class="col-lg-12">
                            <label for="location">Location</label>
                            <input type="text" required="required" name="location" value="" placeholder="Location"><br>
                        </div>

                        <div class="col-lg-12">
                            <label for="posted">Posted</label>
                            <input type="text" required="required" min="1" name="posted" value="" placeholder="Posted"><br>
                        </div>

                        <div class="col-lg-12">
                            <label for="pay">Pay</label>
                            <input type="text" required="required" min="1" name="pay" value="" placeholder="Pay"><br>
                        </div>

                        <div class="col-lg-12">
                            <label for="jobposition">Job Position</label>
                            <input type="text" required="required" min="1" name="jobposition" value="" placeholder="Job Position"><br>
                        </div>

                        <div class="col-lg-12">
                            <label for="jobtype">Job Type</label>
                            <input type="text" required="required" min="0" name="jobtype" value="" placeholder="Job Type"><br>
                        </div>

                        <div class="col-lg-12">
                            <label for="urllistings">Url for listings</label>
                            <input type="text" required="required" min="0" name="urllistings" value="" placeholder="Url for listings"><br>
                        </div>

                        <div class="col-lg-12">
                            <input type="submit" name="submit" value="Insert">
                        </div>
                    </form>
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
