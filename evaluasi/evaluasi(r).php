<?php

$bilangan = 5956560159466056;
$explode = explode("0", $bilangan);
print_r($explode);

foreach ($bilangan as $key => $value) {
    $split[] = str_split([$key]);
    sort($split);
    

}

$result = array_merge(...$split);
print_r($split);
print_r($result);