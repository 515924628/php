<?php
function get()
{
	$fileName = "data.txt";
	$file = fopen($fileName, 'r');
	$data = file_get_contents($fileName);

	$arr = [];
	for ($i = 0; !feof($file); $i++) {
		$line = trim(fgets($file));
		$arr[$i] = explode(';', $line);
	}
	fclose($file);

	return $arr;
}

function fun(array $arr, $i, $j)
{
	for ($n = $i++; $i < count($arr); $i++) {
		if ($arr[$i][$j] != '' && $arr[$i][$j] != null) {
			break;
		}
	}
	return $i - $n;
}
