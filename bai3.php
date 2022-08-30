<?php
function giaithua($n){
    $giai_thua = 1;
    if ($n == 0 || $n == 1) {
        return $giai_thua;
    } else {
        for($i = 2; $i <= $n; $i ++) {
            $giai_thua =$giai_thua* $i;
        }
        return $giai_thua;
    }
}
    $n=5;
    echo"$n!= ".giaithua($n);
?>
