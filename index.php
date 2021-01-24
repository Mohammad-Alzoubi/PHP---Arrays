<!-- ******************************************** -->
<?php
echo "***************( 1 )*****************<br>"
?>

<?php
 $color = array('white', 'green', 'red', 'blue', 'black');

 echo "The memory of that scene for me is like a frame of film forever frozen at that
 moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The
 new president and his first lady. - Richard M. Nixon"
?>


<!-- ******************************************** -->
<?php
echo "<br>***************( 2 )*****************<br>"
?>

<?php
$color = array('white', 'green', 'red');
echo "<ul>";
for ($i=0; $i < count($color); $i++) { 
    echo  "<li> $color[$i] </li>";
}
echo "</ul>";
?>


<!-- ******************************************** -->
<?php echo "<br>***************( 3 )*****************<br>"?>

<?php
 $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
 "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
 "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
 "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
 "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallinn", "Hungary"=>"Budapest");
 
 asort($cities) ;
 foreach($cities as $count => $cap) {
 echo "The capital of $count is $cap <br>" ;
 }
?>

<!-- ******************************************** -->
<?php echo "<br>***************( 4 )*****************<br>"?>

<?php
$x = array(1, 2, 3, 4, 5,);
for ($i=0; $i <= count($x); $i++) { 
    array_pop($x);
    print_r($x);
    echo "<br>";
}
?>
<!-- ******************************************** -->
<?php echo "<br>***************( 5 )*****************<br>"?>

<?php
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
$firstEl = array_shift($color);
print_r("The first Element is : $firstEl");
?>

<!-- ******************************************** -->
<?php echo "<br>***************( 7 )*****************<br>"?>

<?php
$x = array(1, 2, 3, 4, 5,);

// $x[2] = 7;
// $arr = ["one", "two", "three"];
// array_insert($x, 1, "x");
// array_unshift($x, 'x');
// print_r($x);
?>
<!-- another solve -->
<?php
$x1 = array(1, 2, 3, 4, 5);
$el = array( '$' );

array_splice( $x1, 3, 0, $el ); // position 3
print_r($x1);
?>

<!-- ******************************************** -->
<?php echo "<br>***************( 8 )*****************<br>"?>
<!-- 8. Write a PHP script to sort the following associative array :
array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key -->

<?php
$arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
print_r($arr);
echo "<br>";
asort($arr);
print_r($arr);
echo "<br>";
arsort($arr);
print_r($arr);
echo "<br>";
ksort($arr);
print_r($arr);
echo "<br>";
krsort($arr);
print_r($arr);

?>
<!-- ******************************************** -->
<?php echo "<br>***************( 9 )*****************<br>"?>

<?php
$temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
sort($temp);
$lastArr5 = array_slice($temp,-5,5);
$firstArr5 = array_slice($temp,0,5);
$sum = array_sum($lastArr5) + array_sum($firstArr5); 

print_r($temp);
echo "<br>";
print_r($sum/10);
?>

<!-- ******************************************** -->
<?php echo "<br>***************( 11 )*****************<br>"?>

<?php
$a1 = array(array(70,40), array(25, 45));
$a2 = array("example", "com");
print_r(array_merge($a1,$a2));
?>

<!-- ******************************************** -->
<?php echo "<br>***************( 12 )*****************<br>"?>

<?php
$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
// print_r(strtoupper()));
print_r(array_values($color));
?>

<!-- ******************************************** -->
<?php echo "<br>***************( 13 )*****************<br>"?>

<?php
echo implode(",",range(200,250,4))."\n";
?>

<!-- ******************************************** -->
<?php echo "<br>***************( 14 )*****************<br>"?>

<?php
$arrStr = array("abcd","abc","de","hjjj","g","wer");
print_r(strlen($arrStr[0]));
?>

<!-- ******************************************** -->
<?php echo "<br>***************( 15 )*****************<br>"?>
<!-- 15. Write a PHP script to generate unique random numbers within a range.
Sample Range : (11, 20)
Sample Output : 17 16 13 20 14 19 18 15 11 12 -->
<?php
echo(random_int(11,20));
?>

<!-- ******************************************** -->
<?php echo "<br>***************( 16 )*****************<br>"?>
<!-- 16. Write a PHP script to get the largest key in the array. -->

<?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
"United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=> "Valetta","Austria" => "Vienna", "Poland"=>"Warsaw") ;
$max_key = max( array_keys( $ceu) ); 
// $max_key = array_keys( $ceu);
print_r($max_key);
?>

<!-- ******************************************** -->
<?php echo "<br>***************( 17 )*****************<br>"?>

<!-- Write a PHP function that returns the lowest integer in the array that is not 0. -->
<?php
$number = array(55, 78, 60, 62, 68, 71, 68, 73,5, 85, 66, 64, 76, 63, 75, 76,
73, 68, 205, 64, 68, 73,99, 75, 79, 73);
asort($number);
// print_r($number);
// print_r (array_slice($number,0,1));
// echo "<br>*********************";
print_r (array_shift($number));
?>

<!-- ******************************************** -->
<?php echo "<br>***************( 18 )*****************<br>"?>

<?php
function floorDec($number, $precision, $separator)
{
$number_part=explode($separator, $number);
$number_part[1]=substr_replace($number_part[1],$separator,$precision,0);
if($number_part[0]>=0)
{$number_part[1]=floor($number_part[1]);}
else
{$number_part[1]=ceil($number_part[1]);}

$ceil_number= array($number_part[0],$number_part[1]);
return implode($separator,$ceil_number);
}
print_r(floorDec(1.155, 2, "."));
echo "<br>";
print_r(floorDec(100.25781, 4, "."));
echo "<br>";
print_r(floorDec(-2.9636, 3, "."));
?>

<!-- ******************************************** -->
<?php echo "<br>***************( 19 )*****************<br>"?>

<?php
$color = array ( 
    "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
    "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
    "holes" => array ( "First", 5 => "Second", "Third")
);

echo "<pre>";
echo $color["holes"][5]. " ";
echo $color["color"]["a"];
?>

<!-- ******************************************** -->
<?php echo "<br>***************( 20 )*****************<br>"?>

<?php
$day = array(
    "day1", "day25", "day8", "day2"
);
sort($day, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($day as $key => $val) {
    echo $val . "<br>";
}
?>