<?php
function solution($A){

$length = count($A);
$duplicates = [];

if(empty($A)){
	return 0;
}


if($length >= 1 && $length <=1000000){

	for($i = 0; $i < $length; $i++){

		if(is_integer($A[$i]) && ($A[$i] >= 1 && $A[$i] <= 1000000000) ){
		
		if(!array_key_exists($A[$i], $duplicates)){
			
	  		$duplicates[$A[$i]] =1;
		 }else{
			unset($duplicates[$A[$i]]);
			}
	
		}


	}


}
return key($duplicates);

}

print_r(solution([9,3,9,3,9,7,9]));
//print_r(solution([]));


?>
