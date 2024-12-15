```php
function my_function($a, $b) {
  if ($a === null || $b === null) {
    return null; // Handle null values explicitly
  }
  // Perform operations only if both a and b are not null
  $result = $a + $b; // Or any other operation
  return $result;
}

// Example usage
$result = my_function(1, null);
var_dump($result); // Outputs: NULL

$result = my_function(null, 2);
var_dump($result); //Outputs: NULL

$result = my_function(1,2);
var_dump($result); //Outputs: int(3)
```