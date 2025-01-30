The issue can be solved by explicitly creating a copy of the object instead of using a reference:

```php
class MyClass {
    public $value = 10;
}

$obj1 = new MyClass();
$obj2 = clone $obj1; // Create a copy

$obj2->value = 20;

var_dump($obj1->value); // Outputs int(10)
var_dump($obj2->value); // Outputs int(20)
```

This ensures that `$obj1` and `$obj2` are independent, resolving the unexpected modification problem.  For more complex objects with nested structures, you may need to employ serialization and unserialization to achieve a complete deep copy.