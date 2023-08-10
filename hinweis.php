<?php
global $os;
global $fullOs;
global $browser;
global $osExample;
global $browserExample;
?>
<section class="hero is-fullheight" id="start">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-two-thirds-desktop has-text-centered">
                    <h1 class="title mb-6 is-1 has-text-black">
                        Hinweis
                    </h1>
                    <h2 class="subtitle">
                        Diese Anleitung wurde mit <b><?php echo $fullOs; ?></b> und <b><?php echo $browser; ?></b>
                        erstellt.
                    </h2>
                    <p class="content">
                        Sie können diese Anleitung auch für andere Betriebssysteme (z.B. <?php echo $osExample; ?>) und
                        Browser
                        (z.B. <?php echo $browserExample; ?>) verwenden, da die Vorgehensweise sehr ähnlich ist.
                    </p>
                    <a class="button is-primary" href="#<?php echo $os; ?>-1">
                        <span class="icon-text">
                            <span class="icon">
                                <i class="fa-solid fa-angles-down"></i>
                            </span>
                            <span>Anleitung</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>