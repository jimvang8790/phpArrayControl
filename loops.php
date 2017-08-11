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
