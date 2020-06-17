
<?php

$matrix= [
          [1,2,1,0],
          [3,1,13,5],
          [5,5,2,1]
       ];
crossingSum($matrix,1,3);

	
function crossingSum($matrix,$a,$b){
       $sum=0;
       for ($i = 0; $i < 3; $i++) {
			for ($j = 0; $j <4; $j++) {
				if ($i == $a | $j == $b) {
					 $sum=$matrix[$i][$j] +$sum;				
				}
			}
		}
		echo $sum;
}

?>