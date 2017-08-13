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

<!-- Foreach Loop -->
<?php
include 'list.php';

for ($list as $key => $item) {
  echo $key . ' = ' . $item['title'] . "<br />\n";
}

echo '<table>';
echo '<tr>';
echo '<th>Title</tr>';
echo '<th>Priority</th>';
echo '<th>Due Date</th>';
echo '<th>Complete</th>';
echo '</tr>';

foreach ($list as $item) {
  echo '<tr>';
  echo '<td>' . $item['title'] . "</td>\n";
  echo '<td>' . $item['priority'] . "</td>\n";
  echo '<td>' . $item['due'] . "</td>\n";
  echo '<td>';
  if ($item['complete']) {
    echo 'Yes';
  } else {
    echo 'No';
  }
  echo "</td>\n";
  echo '</tr>';
}
echo $list[0]['title'];

echo '</table>';
?>
