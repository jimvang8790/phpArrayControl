<!-- Associative Arrays -->
<?php
$iceCream = array('Alena' => 'Black Cherry',
                  'Treasure' => 'Chocolate',
                  'Dave' => 'Cookies and Cream',
                  'Rialla' => 'Strawberry'
                 );

echo $iceCream['Alena'];
var_dump($iceCream);

?>

<!-- Mixing Data Types in Arrays -->
<?php
$iceCream = array('Alena' => 'Black Cherry',
                  'Treasure' => 'Chocolate',
                  'Dave' => 'Cookies and Cream',
                  'Rialla' => 'Strawberry'
                 );

// comment one or the other out
echo $iceCream['alena'] = 'Pistachio'; // will create a new element
echo $iceCream['Dave'] = 'Cookie Dough'; // will over ride the previous
echo $iceCream['Dave Thomas'] = 'Cookie'; // will create a new element
echo $iceCream[] = 'Vanilla'; // add vanilla to the next avaible key
echo $iceCream['Andrew'] = true; // a boolean

// NOTE sorting array
ksort($iceCream); // sort array alphabetical by keys
asort($iceCream); // sort array alphabetical by value

var_dump($iceCream);

//type casting
$keys = array (
  1 => 'a',
  '1' => 'b',
  1.5 => 'c',
  true => 'd'
);

var_dump($keys); // the value will be overwrite and the 'd' will be only the one

?>
