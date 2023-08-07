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
    include("os.html");
    ?>
    <div id="macos" style="display: none;">
        <?php
        include("macos.html");
        include("macos_comics.html");
        ?>
    </div>
    <div id="windows" style="display: none;">
        <?php
        include("windows.html");
        include("windows_comics.html");
        ?>
    </div>
</main>
<footer class="footer">
    <?php
    include("footer.html");
    ?>
</footer>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<?php
include("macos_modal_images.php");
?>
<?php
include("windows_modal_images.php");
?>
</body>
</html>