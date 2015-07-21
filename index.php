<!doctype html>
<?php
require_once "file.php";
$arr = get();
?>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<title>aa</title>
	<style>

		.tab td {
			border-right: 2px solid #F0F0F0;
			border-bottom: 2px solid #F0F0F0;
			height: 40px;
		}

		.tab td:first-child {
			border-left: 2px solid #F0F0F0;
		}

	</style>
</head>
<body>
<div style="margin:auto;width: 1068px;">
	<table class="tab" style="border-collapse: collapse;text-align: center;width: 1068px;">
		<thead style="position:relative;">
		<tr style="height: 70px;background: #3E3536;color: #FFFFFF;border-left: 2px solid #3E3536;border-right: 2px solid #3E3536;">
			<th style="border-right: 2px solid #52494A;border-top:0;border-bottom:0;background: #3E3536;" colspan="3">项目内容</th>
			<th style="border-right: 2px solid #52494A;border-top:0;border-bottom:0;background: #3E3536;">免费版</th>
			<th style="border-right: 2px solid #52494A;border-top:0;border-bottom:0;background: #3E3536;">标准版<br>拖拽版</th>
			<th style="border-right: 2px solid #52494A;border-top:0;border-bottom:0;background: #3E3536;">论坛版<br>门户版</th>
			<th style="border-right: 2px solid #52494A;border-top:0;border-bottom:0;background: #3E3536;">专业版</th>
			<th style="border-right: 2px solid #52494A;border-top:0;border-bottom:0;background: #3E3536;">运营版(O2O)</th>
			<th style="border-right: 2px solid #52494A;border-top:0;border-bottom:0;background: #3E3536;">商城版<br>微商城</th>
			<th style="border-right: 2px solid #3E3536;border-top:0;border-bottom:0;background: #3E3536;">全功能版</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$t = true;
		foreach ($arr as $i => $ki) {
			echo "<tr>";
			$t = !$t;

			foreach ($ki as $j => $kj) {
				$kj = str_replace(' ', '<br>', $kj);

				if ($j < 2) {
					if ($kj != '') {
						$n = fun($arr, $i, $j);
						echo "<td rowspan='$n'>$kj</td>";
					}
				} else {
					if ($kj == '有') {
						$kj = '√';
					} else if ($kj == '无') {
						$kj = '';
					}
					if ($t) {
						echo "<td style='background: #F0F0F0;'>$kj</td>";
					} else {
						echo "<td>$kj</td>";
					}
				}
			}
			echo "</tr>";
		}
		?>
		</tbody>
	</table>
</div>
</body>
</html>