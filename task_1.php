<?php
function isEven($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i + 1 . " ";
    }
}
isEven(1, 20, 2);
?>