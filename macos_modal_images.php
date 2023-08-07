<?php
for ($i = 1; $i <= 16; $i++) {
    $prefix = $i <= 9 ? "0$i" : "$i";
    $postfix = $i;
    echo "
<div id='macos_step_$postfix' class='modal'>
<div class='modal-background'></div>

<div class='modal-content' >
    <figure class='image'>
        <img class='tutorial-img' src='images/macos/$prefix" . "_python_macos.png' alt='macos_step_$postfix'>
    </figure>
</div>

<button class='modal-close is-large' aria-label='close'></button>
</div>";
}