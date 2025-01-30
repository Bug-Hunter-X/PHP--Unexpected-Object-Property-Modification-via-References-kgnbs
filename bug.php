In PHP, a common yet subtle error arises when dealing with references and object properties.  Consider this example:

```php
class MyClass {
    public $value = 10;
}

$obj1 = new MyClass();
$obj2 = $obj1;

$obj2->value = 20;

var_dump($obj1->value); // Outputs int(20)
```

Many developers expect `$obj1->value` to remain 10,  but it's updated to 20. This is because `$obj2 = $obj1;` creates a reference, not a copy. Modifying `$obj2` directly affects `$obj1`. This often leads to unexpected behavior in larger applications.