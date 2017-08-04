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
<!-- compare if something is equal but rather we need to compare if something is NOT equal -->
<?php
$a = 0;
$b = 5;

if ($a == $b) {
} else {
   echo 'values are NOT equal';
}
if (($a == $b) == false) {
 echo 'values are NOT equal';
}
if ($a <> $b) {
 echo 'values are NOT equal';
}
if ($a != $b) {
 echo 'values are NOT equal';
}
if ($a !== $b) {
 echo 'NOT identical';
}

if ($c) {
  echo 'true';
}
if (!$c) {
  echo 'false';
}
if ($c == false) {
  echo 'false';
}
if ($c != true) {
  echo 'false';
}
?>

<!-- Nested Conditional -->
<?php

$num = 1;
if ($num >= 10) {
  if ($num <=1000) {
    echo 'your number is within the range';
  } else {
      echo 'your number is greater than 1000, NOT within the range';
  }
} else {
    echo ' your number is less than 10, NOT within the range';
}

?>

<!-- Logical Operators -->
<?php

$num = 10;

// and
if ($num >= 10 && $num <=1000 ) {

    echo 'your number is within the range';
} else {
    echo ' your number is less than 10, NOT within the range';
}

// or
if ($num >= 10 || is_string($num) ) {

    echo '10 or string';
} else {
    echo 'not 10 or string';
}

// priorities
$var1 = true && false;
$var2 = true and false; // equals is a higher priorities so $var2=true

var_dump($var1,$var2);

?>

<!-- Without changing the variables, create a SINGLE conditional statement around the echo command that checks:
1. That a $username is set.
2. The users $role is NOT admin -->

<?php
$username = 'skethings';
//Available roles: author, editor, admin
$role = 'editor';

//add conditional statement
if(isset($username) && $role != 'admin')
{
echo "You do not have access to this page. Please contact your administrator.";
}
?>
