--TEST--
PHP 4 Constructors cannot declare a return type

--FILE--
<?php

class Foo {
	function foo() : Foo {}
}

--EXPECTF--
Fatal error: Constructor %s::%s() cannot declare a return type in %s on line %s
