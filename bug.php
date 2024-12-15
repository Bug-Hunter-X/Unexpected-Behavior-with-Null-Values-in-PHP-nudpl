```php
function my_function($a, $b) {
  if ($a === null || $b === null) {
    return null; // Handle null values
  }

  // ... rest of the function
}

// Example usage
$result = my_function(1, null);
var_dump($result); // Outputs: NULL

$result = my_function(null, 2);
var_dump($result); //Outputs: NULL

$result = my_function(1,2);
var_dump($result); //Outputs: ... the functions' result ...
```