<?php

$input_file = 'html.html';

$html = file_get_contents($input_file);

preg_match_all('#style="(.*?)"#i', $html, $m);

// var_dump($m);

$fields = [];

foreach ($m[1] as $style) {
    $properties = array_map('trim', explode(';', $style));
    $field = [];
    foreach ($properties as $property) {
        list($name, $value) = array_map('trim', explode(':', $property));

        $value = preg_replace('#px$#', '', $value);

        $field[$name] = $value;
    }

    $fields[] = $field;
}

file_put_contents('fields.php', var_export($fields, true));
