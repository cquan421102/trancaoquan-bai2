<?php
$n = 0;
if (isset ( $_POST ['n'] )) {
    $n = $_POST ['n'];
}
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
<form action="#" method="post">
 <table>
  <tr>
   <td>Nhap so n:</td>
   <td><input type="text" name="n" value="<?=$n?>" /></td>
  </tr>
  <tr>
   <td></td>
   <td><input type="submit" value="Nhap"></td>
  </tr>
  <tr>
   <td>n! =</td>
   <td><input type="text" name="gt" value="<?=giaithua ( $n )?>" /></td>
  </tr>
 </table>
</form>
<br>
