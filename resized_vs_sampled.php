<?php
$srcImg = 'sample.jpg';

$resized = false;
if (!empty($_POST)) {
	$params = $_POST;
	array_walk($params, function(&$value, $key) {
		$value = (int) $value;
	});
	$dstW = $params['dstW'];
	$dstH = $params['dstH'];

	$srcR = imagecreatefromjpeg($srcImg);
	$resizedR = imagecreatetruecolor($dstW, $dstH);
	imagecopyresized($resizedR, $srcR, 0, 0, 0, 0, $dstW, $dstH, imagesx($srcR), imagesy($srcR));

	$resizedC = sprintf('imagecopyresized($dstR, $srcR, 0, 0, 0, 0, %d, %d, %d, %d);', $dstW, $dstH, imagesx($srcR), imagesy($srcR));

	ob_start();
	imagejpeg($resizedR);
	$resized = ob_get_contents();
	ob_end_clean();

	$resized = base64_encode($resized);

	$sampledR = imagecreatetruecolor($dstW, $dstH);
	imagecopyresampled($sampledR, $srcR, 0, 0, 0, 0, $dstW, $dstH, imagesx($srcR), imagesy($srcR));

	$sampledC = sprintf('imagecopyresampled($dstR, $srcR, 0, 0, 0, 0, %d, %d, %d, %d);', $dstW, $dstH, imagesx($srcR), imagesy($srcR));

	ob_start();
	imagejpeg($sampledR);
	$sampled = ob_get_contents();
	ob_end_clean();

	$sampled = base64_encode($sampled);
}
?>
<!DOCTYPE HTML>
<html lang="ja-JP">
<head>
	<meta charset="UTF-8">
	<title>imagecopyresized vs imagecopyresampled</title>
	<style type="text/css">
		.src {float: left;}
		.dst {clear: both;}
		input[type="text"] {width: 4em;}
	</style>
</head>
<body>
	<h1>imagecopyresized vs imagecopyresampled</h1>
	<div class="src">
		<?php
			list($srcW, $srcH) = getimagesize($srcImg);
			echo $srcW . 'x' . $srcH
		?><br />
		<img src="<?php echo $srcImg; ?>" alt="sample" />
	</div>
	<form action="#" method="post">
		<table>
			<tr>
				<td><label for="dstW">Width</label></td>
				<td><input type="text" name="dstW" value="<?php echo (isset($dstW)) ? $dstW : null; ?>" />px</td>
			</tr>
			<tr>
				<td><label for="dstH">Height</label></td>
				<td><input type="text" name="dstH" value="<?php echo (isset($dstH)) ? $dstH : null; ?>" />px</td>
			</tr>
		</table>
		<div>
			<input type="submit" value="Submit" />
		</div>
	</form>
	<div class="dst">
	<?php if ($resized): ?>
		<?php echo $resizedC ?><br />
		<img src="data:image/jpg;base64,<?php echo $resized; ?>" alt="sample" /><br />
		<?php echo $sampledC ?><br />
		<img src="data:image/jpg;base64,<?php echo $sampled; ?>" alt="sample" /><br />
	<?php endif; ?>
	</div>
</body>
</html>