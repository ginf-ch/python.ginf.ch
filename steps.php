<?php
global $steps;
global $os;
$totalNumberOfSteps = count($steps);
$fading = ["fade-up", "fade-down", "fade-left", "fade-right"];
foreach ($steps as $stepKey => $stepValue) {
    $stepNumber = $stepKey + 1;
    $nextStepNumber = $stepNumber + 1;
    $imagePrefix = $stepNumber < 10 ? "0" . $stepNumber : $stepNumber;
    $description = $stepValue;
    $dataAosImg = $fading[array_rand($fading)];
    $dataAosDescription = $fading[array_rand($fading)];
    $bgCssClass = $stepNumber % 2 == 0 ? "" : " has-background-white-ter";
    ?>
    <section class="hero is-fullheight<?php echo $bgCssClass; ?>" id="<?php echo "$os-$stepNumber" ?>">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-offset-1-tablet is-5-tablet"
                         data-aos="<?php echo $dataAosImg; ?>" data-aos-anchor-placement="top-center">
                        <figure class="has-text-centered js-modal-trigger is-clickable"
                                data-target="<?php echo $os . "_step_" . $stepNumber; ?>">
                            <img class="tutorial-img"
                                 src="images/<?php echo $os ?>/<?php echo $imagePrefix; ?>_python_<?php echo $os ?>.png"
                                 alt="<?php echo $os . "_step_" . $stepNumber; ?>">
                        </figure>
                    </div>
                    <div class="column is-offset-1-tablet is-4-tablet"
                         data-aos="<?php echo $dataAosDescription; ?>">
                        <h1 class="title mb-6 is-size-1">
                            <span>Step <?php echo $stepNumber; ?></span>
                        </h1>
                        <h2 class="subtitle">
                            <?php
                            echo $description;
                            ?>
                        </h2>
                        <nav class="level">
                            <div class="level-left">
                                <div class="level-item">
                                    <a class="button is-primary"
                                        <?php
                                        $href = $nextStepNumber;
                                        if ($stepNumber == $totalNumberOfSteps) {
                                            $href = "comic";
                                        }
                                        ?>
                                       href="<?php echo "#$os-$href"; ?>">
                                        <?php
                                        if ($stepNumber == $totalNumberOfSteps) {
                                            echo "Comic?";
                                        } else {
                                            echo "Weiter";
                                        }
                                        ?>
                                    </a>
                                </div>
                            </div>

                            <div class="level-right">
                                <p class="level-item title is-size-6 has-text-grey-light">
                                    <?php echo $stepNumber; ?>/<?php echo $totalNumberOfSteps; ?>
                                </p>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>