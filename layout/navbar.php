<?php
    $file1;
    if (explode("/", $_SERVER['REQUEST_URI'])[2] == "main.php") {
        $file1 = "#height";
    } else {
        $file1 = "main.php#height";
    }

    $file2;
    if (explode("/", $_SERVER['REQUEST_URI'])[2] == "main.php") {
        $file2 = "#rec";
    } else {
        $file2 = "main.php#rec";
    }

    $file3;
    if (explode("/", $_SERVER['REQUEST_URI'])[2] == "main.php") {
        $file3 = "#welcome";
    } else {
        $file3 = "main.php#welcome";
    }

?>

<div class="navbar">
    <nav>
        <div class="nav-logo">
            <a href="">
                <h1>Pesonaindo</h1>
            </a>
        </div>

        <div class="nav-menu">
            <ul>
                <a class="menu home" href="<?= $file3 ?>">
                    <li>Home</li>
                </a>
                 <a class="menu rec" href="<?= $file2 ?>">
                    <li>Recommed</li>
                </a>
                <a class="menu about" href="<?= $file1 ?>">
                    <li>About</li>
                </a>
                <a class="menu tour" href="tour.php">
                    <li>Tour</li>
                </a>
                <a class="menu contact" href="">
                    <li>Contact</li>
                </a>
            </ul>
        </div>

        <div class="profile">
            <!-- <span>Pain</span> -->
            <img src="asset\img\bromo.jpg" alt="" />
            <a href="index.php"><i class="fa-solid fa-door-open fa-xl" style="color: #000;"></i></a>
        </div>
    </nav>
</div>