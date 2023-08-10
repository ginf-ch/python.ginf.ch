<?php
$os = $_GET["os"];
if (isset($os)) {
    if ($os != "macos" and $os != "windows") {
        header('Location: https://ide.ginf.ch/#', true, "303");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Python Installationsanleitung | python.ginf.ch</title>
    <?php
    include("head.php");
    ?>
</head>
<body>
<header>
    <?php
    include("header.html");
    ?>
</header>
<main>
    <?php
    if (!isset($os)) {
        include("os.html");
    } else {
        if ($os == "macos") {
            include("macos.php");
            $title = "An Apple a Day";
            $href = "https://xkcd.com/2161/";
            $src = "an_apple_a_day_2x.png";
            $alt = "xkcd_an_apple_a_day_2x";
            $imgTitle = "Even the powerful, tart Granny Smith cultivar is proving ineffective against new Gran-negative doctors.";
        } else {
            include("windows.php");
            $title = "Estimation";
            $href = "https://xkcd.com/612/";
            $src = "estimation.png";
            $alt = "xkcd_estimation";
            $imgTitle = "They could say &quot;the connection is probably lost,&quot; but it's more fun to do naive time-averaging to give you hope that if you wait around for 1,163 hours, it will finally finish.";
        }
        include("comics.php");
    }
    ?>
</main>
<footer class="footer">
    <?php
    include("footer.php");
    ?>
</footer>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<?php
include("modal_images.php");
?>
</body>
</html>