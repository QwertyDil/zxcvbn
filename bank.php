<?php
$before = 10000;
$percent = 0.1;
$age = 16;
for ($year = 1; $after <= 1000000; $year ++)
{
  $after += $before * $percent;
  $end = $age + $year;
  echo"{$year}-ый год в банке = {$after}<br>";  
  echo "Ему {$end} лет - ";
if ($end > 110)
{
  echo "он не дожил";
}
elseif ($end < 110)
{
  echo "он  дожил (скорее всего)";
}
break;
  } 
?>