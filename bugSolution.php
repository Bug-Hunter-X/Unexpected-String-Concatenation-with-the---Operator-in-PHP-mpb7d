```php
function my_function($a, $b) {
  if (!is_numeric($a) || !is_numeric($b)) {
    return "Error: Non-numeric arguments provided";
  } 
  if ($a === 0) {
    return $b;
  } else if ($b === 0) {
    return $a;
  } else {
    return $a + $b;
  }
}

$result = my_function(0, 0); // 0
$result = my_function(5, 0); // 5
$result = my_function(0, 5); // 5
$result = my_function(5, 5); // 10

// Now, error handling for non-numeric arguments:
$result = my_function("hello", "world"); // "Error: Non-numeric arguments provided"
```