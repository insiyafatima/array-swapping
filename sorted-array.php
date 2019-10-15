<?php  
function swap(&$arr) { 
    $n = sizeof($arr); 
	$v=0;
 
    for($i = 0; $i < $n; $i++){ 
  
        for ($h = 0; $h < $n - 1; $h++){ 
             
            if ($arr[$h] > $arr[$h+1]){ 
				
				$v = $v+1;
                $t = $arr[$h]; 
                $arr[$h] = $arr[$h+1]; 
                $arr[$h+1] = $t; 
				
            for ($l = 0; $l < $n; $l++) 
				echo $arr[$l]." ";
			
			echo '</br>';
			
			}
			
		} 
		
		$GLOBALS['swap'] = $v ;
    } 
}   
$arr = array(3,2,1,5); 
$len = sizeof($arr); 
$firstElement = reset($arr);
$lastElement = end($arr);
swap($arr); 
echo "Sorted array : "; 
  
for ($i = 0; $i < $len; $i++) 
    echo $arr[$i]." "; 
echo '</br>';
echo "First element : $firstElement";
echo '</br>';
echo "Last element : $lastElement";
echo '</br>';
echo "No of swaps : $swap" ;
  
?>