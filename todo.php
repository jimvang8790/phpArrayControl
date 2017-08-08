<!-- Multidimensional Arrays -->
<?php
$list[] = array(
  'title' => 'Laundry',
  'priority' => 2,
  'due' => '',
  'complete' => true
);

// a short hand for writing Multidimensional Arrays without writing array();
$list['Task2'] = [
  'title' => 'Clean out refrigerator',
  'priority' => 3,
  'due' => '07/30/2017',
  'complete' => false
];

//$list = array($task1, $task2);

var_dump($list);

// to access the title of first task
echo $list[0]['title'];
?>
