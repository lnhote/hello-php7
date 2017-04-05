<?php
function testbool(bool $param) {
	var_dump($param);
}
function testint(int $param): int {
	var_dump($param);

	return $param;
}
try {
	testbool('asdf');
	$v = (bool)(TRUE);
	testbool($v);
	print(testint(null));
	print "\n";
	print(testint(10.1));
	print "\n";
	print(testint('asdf'));
} catch (Exception $e) {
	echo "exception: ";
	echo $e->getMessage();
} catch (TypeError $err) {
	echo "type error: \n";
	echo $err->getMessage();
	echo "\n=========END\n";
} catch (Error $err) {
	echo "error: \n";
	echo $err->getMessage();
	echo "\n=========END\n";
}

