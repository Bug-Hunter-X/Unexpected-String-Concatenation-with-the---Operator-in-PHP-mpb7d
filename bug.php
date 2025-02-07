```php
function my_function($a, $b) {
  if ($a === 0) {
    return $b;
  } else if ($b === 0) {
    return $a;
  } else {
    return $a + $b;
  }
}

$result = my_function(0, 0); // This will return 0
$result = my_function(5, 0); // This will return 5
$result = my_function(0, 5); // This will return 5
$result = my_function(5, 5); // This will return 10

// However, if you call the function with non-numeric arguments:
$result = my_function("hello", "world"); //This will result in concatenation not addition
// Expected: 0 
// Actual: "helloworld"
```