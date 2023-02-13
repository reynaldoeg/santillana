<?php

require __DIR__ . '/vendor/autoload.php';

class_alias(\Santillana\Remainder::class, 'Remainder');

$lines = file('input.txt');
$totalTests = intval($lines[0]);

for ($i = 1; $i <= $totalTests; $i++) {
    $line = str_replace(PHP_EOL, '', $lines[$i]);
    $params = explode(" ", $line);
    echo Remainder::requiredRemainder($params[0], $params[1], $params[2]) . "\n";
}
