```php
function processData(array $data): array {
  // The bug is in this function
  foreach ($data as $key => $value) {
    if (is_string($value)) {
      $data[$key] = strtolower($value); // lowercase the string 
    }
  }
  return $data;
}

$data = ['Name' => 'John Doe', 'Age' => 30, 'City' => 'New York'];
$processedData = processData($data);
print_r($processedData); // Output: Unexpected behavior
```