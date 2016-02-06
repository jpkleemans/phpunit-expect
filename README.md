# PHPUnit Expect
BDD-style assertions for PHPUnit

``` php
<?php
$name = 'John';

expect($name)->toEqual('John');
expect($name)->not()->toEqual('James');
```
