<?php

function zeventienproef($a) {



    $arr = str_split($a);
    $sum = 0;
    $size= sizeof($arr);

    for ($i = 0; $i < sizeof($arr) ; $i++) {
        $sum += $arr[$i] * $size;
        $size--;

    }



    $sum /= 17;


    if (is_int($sum) && $sum > 0) {

        echo "nummer is geldig";

    }else{

        echo "nummer is niet geldig";

    }


}

?>