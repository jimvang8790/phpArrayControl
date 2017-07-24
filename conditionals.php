<!-- Comparison operators allow us to "compare" values and return a true/false result. In this video, we'll be taking a look at the less than and greater than operators and combining operators. -->
<?php
$a = 10;
$b = 5;

if ($a == $b) {
  echo 'values are equal ';
}
else if ($a < $b) {
  echo ' $a is less than $b ';
}
else if ($a > $b) {
  echo ' $a is greater than $b ';
}
else {
  echo 'values are NOT equal ';
}

$score = 60;
if ($score > 59) {
  echo 'You completed the level!';
}
else if ($score <=30) {
  echo 'Practice more';
}
else {
  echo 'Please try again';
}

?>

<!-- Negation Operator -->
