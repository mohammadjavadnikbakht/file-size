<?php
// Mohammad Javad Nikbakht
// byte to kb to mb

$file="1.jpg";
$size_byte=filesize($file);
echo "size_byte: ".$size_byte;
echo "<br>";
$size_kilobyte=$size_byte/1024;
echo "size_kilobyte: ".$size_kilobyte;
echo "<br>";
$size_megabyte=$size_kilobyte/1024;
echo "size_megabyte: ".$size_megabyte;
