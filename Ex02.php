
<?php
$result=magicalWell(1,2,3);
echo $result;


function magicalWell($a,$b,$n){

$sum=0;
for($i=1;$i<=$n;$i++){
      $sum+=$a*$b;
      $a++;
      $b++;
}
return $sum;
}
?>