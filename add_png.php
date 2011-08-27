<?php
$jpg = 'mufufu.jpg';
$png = 'r18red.png';
?>

<!DOCTYPE HTML>
<html lang="ja-JP">
<head>
	<meta charset="UTF-8">
	<title>透過pngを合成</title>
</head>
<body>
	<h1><a href="/">Demo 2011-08-27</a></h1>
	<h2>透過pngを合成</h2>
	<div>
		<h3>合成画像</h3>
		<img src="<?php echo $jpg; ?>" alt="jpg" />
		+
		<img src="<?php echo $png; ?>" alt="png" />
	</div>
	<div>
		<h3>合成結果</h3>
		<?php
			$jpgR = imagecreatefromjpeg($jpg);
			$pngR = imagecreatefrompng($png);
			imagecopyresampled($jpgR, $pngR, 0, 0, 0, 0, imagesx($pngR), imagesy($pngR), imagesx($pngR), imagesy($pngR));
			ob_start();
			imagejpeg($jpgR);
			$result = ob_get_contents();
			ob_end_clean();
			$result = base64_encode($result);
		?>
		<img src="data:image/jpg;base64,<?php echo $result; ?>" alt="result" />

		<?php
			$jpgR = imagecreatefromjpeg($jpg);
			$pngR = imagecreatefrompng($png);

			$jpgW = imagesx($jpgR);
			$jpgH = imagesy($jpgR);
			$pngW = imagesx($pngR);
			$pngH = imagesy($pngR);

			$posX = $jpgW - $pngW;
			$posY = $jpgH - $pngH;

			imagecopyresampled($jpgR, $pngR, $posX, $posY, 0, 0, imagesx($pngR), imagesy($pngR), imagesx($pngR), imagesy($pngR));
			ob_start();
			imagejpeg($jpgR);
			$result = ob_get_contents();
			ob_end_clean();
			$result = base64_encode($result);
		?>
		<img src="data:image/jpg;base64,<?php echo $result; ?>" alt="result" />
	</div>
</body>
</html>