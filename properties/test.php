<?php
$file = parse_ini_file("e:/test.properties");
print_r($file);
echo "<br/>";
echo $file["name"];