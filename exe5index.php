<?php

    $loop = 4;

    while($loop < 30) {
        echo ($loop += 2);
        echo "<br>";
    if ($loop == 24) {
        break;
    }
}

?>