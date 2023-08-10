<?php
global $os;
global $title;
global $href;
global $src;
global $alt;
global $imgTitle;
global $numberOfSteps;
$bgClass = "has-background-white-ter";
if ($numberOfSteps % 2 != 0) {
    $bgClass = "";
}
?>
<section class="hero is-fullheight <?php echo $bgClass; ?>" id="<?php echo $os;?>-comic">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-two-thirds has-text-centered">
                    <h1 class="title is-size-1 is-size-4-mobile is-uppercase"><?php echo $title; ?></h1>
                    <a href="<?php echo $href; ?>">
                        <img src="images/<?php echo $src; ?>" alt="<?php echo $alt; ?>"
                             title="<?php echo $imgTitle; ?>"
                        >
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>