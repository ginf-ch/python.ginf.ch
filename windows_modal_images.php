<?php
for ($i = 1; $i <= 8; $i++) {
    $prefix = "0$i";
    $postfix = $i;
    echo "
<div id='windows_step_$postfix' class='modal'>
<div class='modal-background'></div>

<div class='modal-content' >
    <figure class='image'>
        <img class='tutorial-img' src='images/windows/$prefix"."_python_windows.png' alt='windows_step_$postfix'>
    </figure>
</div>

<button class='modal-close is-large' aria-label='close'></button>
</div>";
}
