<!-- Indexed Array -->
<?php
$learn = array('Conditionals', 'Arrays', 'Loops');

var_dump($learn);
echo $learn[1];

// implode allows array to join elements together into a single string
// implode show all the elements of an array, separated by a string
echo implode("\n", $learn);

?>

<!-- Adding Array Elemets -->
<?php
$learn = array('Conditionals', 'Arrays', 'Loops');

// [] tells php to add something to the array
$learn[] = 'Build something awesome!';

// push add objects to the end of the array
array_push($learn, 'Functions', 'Forms', 'Objects');

// unshift add objects to the beginning of the array
array_unshift($learn, 'HMTL', 'CSS');

var_dump($learn);

?>

<!-- Removing Array Elements -->
<?php
$learn = array('Conditionals', 'Arrays', 'Loops');
// [] tells php to add something to the array
$learn[] = 'Build something awesome!';
// push add objects to the end of the array
array_push($learn, 'Functions', 'Forms', 'Objects');
// unshift add objects to the beginning of the array
array_unshift($learn, 'HMTL', 'CSS');
array_shift($learn);

echo 'you removed ' . array_shift($learn);
echo 'you removed ' . array_pop($learn);
unset($learn[1], $learn[2]); // remove any specific array element as long as you know the key. Unset can take multiple parameters. Remove keys one and two and values of conditionals and arrays are gone as well.

// this will remove $learn
// $learn = array_values($learn);
// unset($learn)

var_dump($learn);

?>

<!-- Editing Array Elements -->
<?php
$learn = array('Conditionals', 'Arrays', 'Loops');
// [] tells php to add something to the array
$learn[] = 'Build something awesome!';
// push add objects to the end of the array
array_push($learn, 'Functions', 'Forms', 'Objects');
// unshift add objects to the beginning of the array
array_unshift($learn, 'HMTL', 'CSS');
array_shift($learn);

echo 'you removed ' . array_shift($learn);
echo 'you removed ' . array_pop($learn);
unset($learn[1], $learn[2]); // remove any specific array element as long as you know the key. Unset can take multiple parameters. Remove keys one and two and values of conditionals and arrays are gone as well.
$learn = array_values($learn);
//$learn = 'my learning list';
$learn[0] = 'email'; // NOTE editing array [0] to email
var_dump($learn);

?>
