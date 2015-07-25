<?php

$img = $_POST['imageData'];
$img = str_replace('data:image/jpeg;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = 'uploads/' . md5($img) . '.jpeg';
$success = file_put_contents($file, $data);
print $success ? $file : '';