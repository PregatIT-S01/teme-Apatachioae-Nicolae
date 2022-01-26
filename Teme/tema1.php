<?php
//For an array of elements count the number of occurrences of a given element
$array = [1, 2, 4 ,5 ,2 ,4 ,5];
$b = 5;
$c = 0;
foreach( $array as $element) {
    if($element == $b ) {
        $c = $c + 1;
    }
}
echo "$b a aparut de $c ori in array ";
echo "<br>";


//Generate a random array of numbers and search for a specific one. If you find it then use a break to exit the loop
$numbers = range(1, 10);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}
foreach( $numbers as $el) {
    if($el == 6 ) {
        echo "<br>";
        echo "Element gasit";
        break;
    }
}
echo "<br>";


//For a given array, reverse the order of the elements.
$arr = [1, 2, 3, 44 ,54 , 54, 7 ,65, 121];
print_r($arr);
echo "<br>";
$reverse = array_reverse($arr);
print_r($reverse);
echo "<br>";


//mplement the bubble sort algorithm.
function bubble_sort($arr) {
    $size = count($arr)-1;
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size - $i; $j++) {
            $k = $j + 1;
            if ($arr[$k] < $arr[$j]) {
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr;
}
$arr = array(1, 3, 2, 8, 5, 7, 4, 0);
print("Inainte de sortare");
echo "<br>";
print_r($arr);
echo "<br>";
$arr = bubble_sort($arr);
print("Dupa sortare");
echo "<br>";
print_r($arr);