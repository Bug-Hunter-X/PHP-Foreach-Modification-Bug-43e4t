```php
function processData(array $data): array {
  // Corrected function
  $newData = [];
  foreach ($data as $key => $value) {
    if (is_string($value)) {
      $newData[$key] = strtolower($value); 
    } else {
        $newData[$key] = $value; // Handle non-string values properly
    }
  }
  return $newData;
}

$data = ['Name' => 'John Doe', 'Age' => 30, 'City' => 'New York'];
$processedData = processData($data);
print_r($processedData); // Correct Output
```