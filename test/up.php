<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<title>up</title>
</head>
<body>
<form action="up.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file">
	<input type="submit">
</form>
</body>
</html>
<?php
if (array_key_exists('file', $_FILES)) {
	$file = $_FILES['file'];
	if ($file['error'] > 0) {
		echo '上传失败';
	} else {
		move_uploaded_file($file['tmp_name'], iconv('UTF-8','GBK',$file['name']));
		echo '上传成功'.$file['name'];
	}
}
