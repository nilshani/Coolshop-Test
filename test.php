<?php

$options = ['file:', 'col:', 'key:'];

$values = getopt('', $options);

$lines = file($values['file'], FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$col = $values['col'];
$key = $values['key'];

$dataArr = array_map(function ($i) {
    return explode(',', $i);
}, $lines);

foreach ($dataArr as $line) {
    if ($line[$col] == $key) {
        $row = implode(',', $line);
    }
}

print_r($row);
