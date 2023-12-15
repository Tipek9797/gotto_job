<?php
include_once "./lib/DB.php";

use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "gottojob");
?>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="images/logo.png" class="img-fluid logo-image">

            <div class="d-flex flex-column">
                <strong class="logo-text">Gotto</strong>
                <small class="logo-slogan">Online Job Portal</small>
            </div>
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-center ms-lg-5">
                <?php
                $menu = $db->getMenuItems();

                foreach ($menu as $menuName => $menuUrl) {
                    if ($menuName == "Job Listings" || $menuName == "Job Details") {
                        echo '<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
    
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">';

                        echo '<li><a class="dropdown-item" href="' . $menuUrl . '">' . $menuName . '</a>';
                        echo '</ul>
                    </li>';
                    } else if ($menuName == "Register") {
                        echo '<li class="nav-item ms-lg-auto">';
                        echo '<a class="nav-link" href="' . $menuUrl . '">' . $menuName . '</a>';
                        echo '</li>';
                    } else if ($menuName == "Login") {
                        echo '<li class="nav-item">';
                        echo '<a class="nav-link custom-btn btn" href="' . $menuUrl . '">' . $menuName . '</a>';
                        echo '</li>';
                    } else {
                        echo '<li class="nav-item">';

                        echo '<a class="nav-link" href="' . $menuUrl . '">' . $menuName . '</a>';

                        echo '</li>';
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</nav>