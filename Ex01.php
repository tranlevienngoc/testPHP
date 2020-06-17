
<?php
threeAndFour(30);
$result=magicalWell(1,2,3);
echo $result;
$arrA=array(1,2,5,0);
$arrB=array(2,5,10,0);
mixArray($arrA,$arrB);
$matrix= [
          [1,2,1,0],
          [3,1,13,5],
          [5,5,2,1]
       ];
crossingSum($matrix,1,3);

	function threeAndFour($n){
		$count=0;
	$arr=array($n);
	for($i=0;$i<=$n;$i++){
		if(($i%3==0) && ($i%4==0)){			
        $arr[$count]=$i;
        $count++;
		}
	}
 foreach ($arr as $key ) {
 	# code...
 	echo $key." ";
 }
	}


function mixArray($arrA,$arrB){
	
$arr=array_merge($arrA, $arrB);
$arrResult = array_unique($arr);
sort($arrResult);
foreach ($arrResult as $key => $value) {
	# code...
	echo $value.' ';
}
}


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