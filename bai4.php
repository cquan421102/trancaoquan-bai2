<?php
function checksonguyen($n){
    $uc = 1;
    if ($n <2) {
        return true;
    } 
    else {
        for($i = 2; $i < $n; $i ++) {
            if($n%$i==0)
                return false;
        }
    }
    return true;
}
    $n = 10;
    echo ("Cac so nguyen nho hon $n la: <br>");
    if ($n >= 2) {
        echo "2";
    }
    for ($i = 3; $i < $n; $i+=2) {
        if (checksonguyen($i)) {
            echo (" " . $i);
        }
    }
?>