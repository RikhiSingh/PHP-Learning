<?php

// indexed array

$peopleOne = ['shaun', 'crystal', 'ryu'];
// echo $peopleOne[1];

$peopleTwo = array('ken', 'shaun');
// echo $peopleTwo[1];

$ages = [20, 30, 40, 50];

//print readable
//print_r($ages);

// change value of an element
$ages[1] = 25;
// print_r($ages);

$ages[] = 60;
//will add new number to end of it
// print_r($ages);

// add new element to end of the array
array_push($ages, 70);
// print_r($ages);

//array count
// echo count($ages);

// merge two arrays
$peopleThree = array_merge($peopleOne, $peopleTwo);
// print_r($peopleThree);

// ================== associative arrays (key and value pair) ==================
$ninjasOne = ['shaun' => 'black', 'mario' => 'yellow', 'luigi' => 'brown'];
//echo $ninjasOne['mario'];
// print_r($ninjasOne);

$ninjasTwo = array('bowser'=>'green', 'peach'=>'purple');
// print_r($ninjasTwo);

$ninjasTwo['toad'] = 'pink';
// print_r($ninjasTwo);
// echo count($ninjasTwo);

$ninjasThree = array_merge($ninjasOne, $ninjasTwo);
print_r($ninjasThree);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>
</head>

<body>

</body>

</html>