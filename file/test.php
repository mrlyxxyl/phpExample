<?php
$path = "e:/study/linux.txt";
$file = basename($path, ".txt");
echo $file; // 输出 linux
echo "<br/>";

$pa = dirname($path);
echo $pa; //输出  e:/study

// 打开文件
$fp = fopen($path, "r");
// 取得文件信息
$fs = fstat($fp);
print_r($fs);
fclose($fp);

$size = disk_free_space("e:/");//获取目录所在磁盘可用空间大小 字节
echo $size;

$str = file_get_contents($path);
echo $str;
$f = fopen($path, "r");
$content = fread($f, filesize($path));
echo $content;
echo "<br/>";

$lines = file($path); //按行读取
// 在数组中循环，显示 HTML 的源文件并加上行号。
foreach ($lines as $line_num => $line) {
    echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
}

//追加内容
$f = fopen($path, "a+");
$txt = "\r\nthis is a new line!";
fwrite($f, $txt);