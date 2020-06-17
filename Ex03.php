
<?php

$arrA=array(1,2,5,0);
$arrB=array(2,5,10,0);
mixArray($arrA,$arrB);


function mixArray($arrA,$arrB){	
       $arr=array_merge($arrA, $arrB);
       $arrResult = array_unique($arr);
       sort($arrResult);
      foreach ($arrResult as $key => $value) {
	# code...
	echo $value.' ';
            }
          }

?>