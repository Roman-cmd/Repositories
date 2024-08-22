<?php
function arrSort($arr)
{
    do{

        $counter = false;
        for($i = 0, $size = count($arr); $i < $size - 1; $i++){
                if($arr[$i] > $arr[$i + 1]){
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$i + 1];
                    $arr[$i + 1] = $temp;

                    $counter = true;
                }
            }

    }while($counter);
    return $arr;
}
print_r(arrSort([1, 3, 2, 7, 4, 8]));


