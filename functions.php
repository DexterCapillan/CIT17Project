<?php
function myCalculator($num01, $oper, $num02) {

$sum = match ($oper) {
  "add" => $num01 + $num02,
  "sub" => $num01 - $num02,
  "div" => $num01 / $num02,
  "multi" => $num01 * $num02,
};
return $sum;
}

$num01 = $_GET["num01"];
$oper = $_GET["oper"];
$num02 = $_GET["num02"];

echo "Value: " . myCalculator($num01, $oper, $num02);

?>