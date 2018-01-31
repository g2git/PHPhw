<?php

function zeventienproef($a) {

    $arr = str_split($a);
    $sum = 0;

    for ($i = 1 ; $i <= sizeof($arr) ; $i++) {
        $sum += $arr[sizeof($arr)-$i] * $i;
    }

    $sum /= 17;

    if (is_int($sum) && $sum > 0) {

        echo "nummer is geldig";

    }else{

        echo "nummer is niet geldig";

    }

}

?>