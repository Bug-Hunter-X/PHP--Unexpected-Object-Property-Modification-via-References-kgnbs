# PHP Reference Assignment Bug

This repository demonstrates a common pitfall in PHP involving object references and unexpected property modifications.  The `bug.php` file shows the problematic code, where assigning one object to another creates a reference, leading to unintended consequences.  The `bugSolution.php` file provides a corrected version, showcasing how to create a copy to avoid this issue.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe that changing a property of one object affects the other.
4. Run `bugSolution.php` and notice that the properties are now independent.

## Solution

The solution involves creating a deep copy of the object to ensure that changes to one do not affect the other.  This is usually done by cloning objects or using serialization techniques, depending on the object's complexity.