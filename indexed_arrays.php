<!-- Indexed Array -->
<?php
$learn = array('Conditionals', 'Arrays', 'Loops');

var_dump($learn);
echo $learn[1];

// implode allows array to join elements together into a single string
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
