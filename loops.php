<!-- Do While Looping -->
<?php
$currentYear = date('Y');
$year = $currentYear - 100;

/*while (++$year <= $ $currentYear) {
  echo $year . "<br />\n";
  $year++;
}*/
do {
  echo $year . "<br />\n";
} while (++$year <= $currentYear);
?>

<!-- While array list -->
<?php
$currentYear = date('Y');
$year = $currentYear - 100;

$learn = array('Conditionals', 'Arrays', 'Loops');
$learn[] = 'Build something awesome!';
array_push($learn, 'Functions', 'Forms', 'Objects');
array_unshift($learn, 'HMTL', 'CSS');
array_shift($learn);
asort($learn); // sort by value and not keys

$count = 0;
// seeing the first two items in array
while ((list($key, $val) = each($learn)) && $count++ < 2) {
  echo "$key => $val\n";
}

?>

<!-- for loops -->
<?php
for ($Year = date('Y') - 99; $year <= date('Y');$year++) {
 echo $year . "<br />\n";
}

$learn = array('Conditionals', 'Arrays', 'Loops');
$learn[] = 'Build something awesome!';
array_push($learn, 'Functions', 'Forms', 'Objects');
array_unshift($learn, 'HMTL', 'CSS');
array_shift($learn);
asort($learn); // sort by value and not keys
sort($learn);
// for loop will sort by value
for ($int = 0; $int < count($learn); $int++ ) {
  echo $learn[$int] . "\n";
}

$count = 0;

// Create a FOR loop that displays each number from 1 to 100. Make sure that you DO NOT show 0 and you DO show 100.
$facts = array(
    57 => ' on Heinz ketchup bottles represents the number of varieties of pickles the company once had.',
    2 => ' is the approximate hours a day Giraffes sleeps',
    18 => ' is the average hours a Python sleeps per day',
    10 => ' per cent of the world is left-handed.',
    11 => ' Empire State Buildings, stacked one on top of the other, would be required to measure the Gulf of Mexico at its deepest point.',
    98 => '% of the atoms in your body are replaced every year',
    69 => ' is the largest number of recorded children born to one woman',
);

for ($i = 1; $i <= 100; $i++){
    echo $i;
// Use the function isset to test if the incremented value equals one of the keys in the $facts array. If there is a key that matches, display the value AFTER the number.
    if (isset($facts[$i])) {
        echo $facts[$i] . "<br />\n";
    }
}

?>
