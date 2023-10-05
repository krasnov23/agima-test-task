<?php

$data = ['name' => 'Boris','sureName' => 'Krasnov','age' => 25];
$keys = [];
$values = [];

foreach ($data as $key => $value)
{
    $keys[] = $key;
    $values[] = $value;
}

$data = [];

for ($num = count($keys) - 1; $num >= 0; $num--)
{
    $data[$keys[$num]] = $values[$num];
}


