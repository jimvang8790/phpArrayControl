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

<!-- ToDo App -->
<?php
include 'list.php';

$status = 'all';
$field = 'priority';

$order = array();
if ($status == 'all') {
  $order = array_keys($list);
} else {
  for ($list as $key => $item) {
    if ($item['complete'] == $status) {
      $order [] = $key;
    }
  }
}

if ($field) {
  $sort = array();
  foreach ($order as $id) {
    $sort[id] = $list[$id][$field];
  }
  asort($sort);
  $order = array_keys($sort);
}

//var_dump($sort);
////var_dump($list);

echo '<table>';
echo '<tr>';
echo '<th>Title</tr>';
echo '<th>Priority</th>';
echo '<th>Due Date</th>';
echo '<th>Complete</th>';
echo '</tr>';

foreach ($order as $id) {
  echo '<tr>';
  echo '<td>' . $list[$id]['title'] . "</td>\n";
  echo '<td>' . $list[$id]['priority'] . "</td>\n";
  echo '<td>' . $list[$id]['due'] . "</td>\n";
  echo '<td>';
  if ($list[$id]['complete']) {
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

<!-- Feature Switch This Week -->
<?php
include 'list.php';

$status = 'all';
$field = 'priority';
$action = 'week';

$order = array();
if ($status == 'all') {
  $order = array_keys($list);
} else {
  for ($list as $key => $item) {
    if ($item['complete'] == $status) {
      $order [] = $key;
    }
  }
}

switch ($action) {
    case 'sort';
      if ($field) {
        $sort = array();
        foreach ($order as $id) {
          $sort[id] = $list[$id][$field];
        }
        asort($sort);
        $order = array_keys($sort);
      }
      break;
    case 'week';
      foreach ($order as $key => $value) {
        if (strtotime($list[$value]['due']) > strtotime("+1 week") || !$list[$value]['due']) {
            unset($order[$key]);
        }
      }
 }

//var_dump($sort);
////var_dump($list);

echo '<table>';
echo '<tr>';
echo '<th>Title</tr>';
echo '<th>Priority</th>';
echo '<th>Due Date</th>';
echo '<th>Complete</th>';
echo '</tr>';

foreach ($order as $id) {
  echo '<tr>';
  echo '<td>' . $list[$id]['title'] . "</td>\n";
  echo '<td>' . $list[$id]['priority'] . "</td>\n";
  echo '<td>' . $list[$id]['due'] . "</td>\n";
  echo '<td>';
  if ($list[$id]['complete']) {
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
