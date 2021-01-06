<?php

//$arrayCheck = [];
//if (isset($arrayCheck)){
//    echo "Yessssss";
//}

$dripTTags = null;

if (!is_array($dripTTags)){
    $dripTTags = [];
}

$custom_fields = ['abc' => 'abc', 'xy' => 'xy'];
$custom_fields = [];
$dripTTags["custom_fields"]["verification_url"] = 'xyz_abcd';
$dripTTags["custom_fields"] = array_merge($dripTTags["custom_fields"], $custom_fields);

print_r($dripTTags);