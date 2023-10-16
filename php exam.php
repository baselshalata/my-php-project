<?php
for ($i = 1; $i <= 5; $i++) {
  for ($j = 1; $j <= 5; $j++) {
    echo $i * $j . " ";
  }
  echo "<br>";
}

echo "<hr>";

// Function to calculate nth fibonacci number
function fibonacci($n)
{
  if ($n == 0)
    return 0;
  else if ($n == 1)
    return 1;
  else
    return fibonacci($n - 1) + fibonacci($n - 2);
}
// 5- Write a PHP program to remove duplicates from a sorted list 

$n = 9;
for ($i = 0; $i < $n; $i++) {
  echo fibonacci($i) . " ";
}

echo "<hr>";


function removeDuplicates($arr)
{
  $result = array();
  foreach ($arr as $value) {
    if (!in_array($value, $result)) {
      $result[] = $value;
    }
  }
  return $result;
}
$arr = array(1, 2, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8);
print_r(removeDuplicates($arr));

?>
