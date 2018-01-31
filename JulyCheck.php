<?php
/**
 * Created by PhpStorm.
 * User: gimmy
 * Date: 31-1-18
 * Time: 12:15
 */

function julyCheck($month){

    if (strtolower($month) == "july")
    {
       echo "It's July, so it can get really hot.";

    }else{
        echo "It’s not July, so at least we’re not in the peak of the heat.";
    }


}




function julyCheck2(){
    $month = date("F");

    if (strtolower($month) == "july")
    {
        echo "It's July, so it can get really hot.";

    }else{
        echo "It’s not July, so at least we’re not in the peak of the heat.";
    }


}

?>