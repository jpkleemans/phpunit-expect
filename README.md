# PHPUnit Expect
BDD-style assertions for PHPUnit

``` php
$name = 'John';

expect($name)->toEqual('John');
expect($name)->not()->toEqual('James');
```

## Install

With Composer

``` bash
$ composer require jpkleemans/phpunit-expect:dev-master
```
