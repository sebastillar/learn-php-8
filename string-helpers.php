<?php

# str_starts_with

$id = 'inv_number_1';
$result = str_starts_with($id,'inv_');
var_dump($result);

# str_ends_with
$id = 'number_1_inv';
$result = str_ends_with($id,'_inv');
var_dump($result);

# str_contains
$id = 'number_1_inv';
$result = str_contains($id,'inv');
var_dump($result);
