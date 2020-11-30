<?php 
  
 
$arr=array(1,5,2,5,1,3,2,4,5); 
echo "Original Array  : <br>";
echo "Array<br> ";
echo "(<br>";
foreach($arr as $key=>$value){
    echo " [$key]   =>   $value <br>";
}
echo ")<br><br>";
$arr2=array_unique($arr);
echo "Updated Array  : <br>";
echo "Array<br> ";
echo "(<br>";
foreach($arr2 as $key=>$value){
    echo " [$key]   =>   $value <br>";
} 
echo ")<br>"; 
?> 