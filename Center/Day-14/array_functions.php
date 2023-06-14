<?php 
//array_keys()

$arr=['p_name'=>'Rohit','j_no'=>45,'age'=>35];

$player=array_keys($arr);
print('<pre>');
print_r($player);
echo"<hr>";

//array_push()

$car=['BMW','Suzuki','Honda'];

array_push($car,'Ford','Kia');
print('<pre>');
print_r($car);
echo"<hr>";




?>