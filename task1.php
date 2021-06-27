<?php
// Declare a function that takes beginning and end of range to be converted into an array.
function rangeValue($start, $end) {
  $begin = $start; // Store the value supplied as argument of the range
  $arrValues = array(); // Declare an empty array to store the array to be generated from the array.
  $counter = 0; // Declare a variable to store the keys of the array.

  // Store the values in the range into the declared array.
  while ($begin <= $end):
    $arrValues[$counter] = $begin;
    $begin++;
    $counter++;
  endwhile;

  return $arrValues; // Return the generated array
}

// Declare a function that takes an array as argument and sum up its elements.
function sum($arrArg) {
  $total = 0; // Declare a variable to store the sum.

  // Iterate through the array and add its elements to total.
  foreach ($arrArg as $arrElement) {
    $total += $arrElement;
  }

  return $total; // Return the sum generated.
}

echo "The array containing the values between the range of value 5 and 10 is <br>";
print_r(rangeValue(5, 10));
echo "<br><br>The sum of the elements of the array(1, 2, 3, 4, 5) = ";
echo sum(array(1,2,3,4,5));

?>