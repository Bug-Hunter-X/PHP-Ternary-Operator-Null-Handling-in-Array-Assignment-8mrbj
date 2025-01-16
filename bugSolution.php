The solution focuses on explicitly checking for null values before concatenation or usage:

```php
$data = ['name' => isset($_POST['name']) ? $_POST['name'] : null, 'age' => isset($_POST['age']) ? (int)$_POST['age'] : null];

if (isset($data['name']) && isset($data['age'])) {
  echo $data['name'] . " is " . $data['age'] . " years old";
} else {
  echo "Name and age are required.";
}
```

Alternatively, using the null coalescing operator (`??`) provides a more concise solution:

```php
$name = $_POST['name'] ?? null;
$age = (int)($_POST['age'] ?? null);

if ($name !== null && $age !== null) {
  echo "{$name} is {$age} years old";
} else {
    echo "Name and age are required.";
}
```

This ensures that the script handles the absence of data gracefully and prevents potential errors or unexpected behavior.