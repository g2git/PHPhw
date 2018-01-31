
<?php

function zeventienproef($a) {



    $arr = str_split($a);
    $sum = 0;
    $count = 17;

    for ($i = 0; $i < 17; $i++) {
        $sum += $arr[$i] * $count;
        $count--;
    }



    $sum /= 17;


    if (is_int($sum) && $sum > 0) {

        echo "number is geldig";

    }else{

        echo "number is niet geldig";

    }


}

zeventienproef(92651109849427955);

?>