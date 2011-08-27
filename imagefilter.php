<?php $srcImg = 'ladygaga.jpg'; ?>

<!DOCTYPE HTML>
<html lang="ja-JP">
<head>
	<meta charset="UTF-8">
	<title>imagefilter</title>
</head>
<body>
	<h1><a href="/">Demo 2011-08-27</a></h1>
	<h2>imagefilter</h2>
	<div>
		<h3>IMG_FILTER_NEGATE</h3>
		<img src="<?php echo $srcImg; ?>" alt="Original" />
		<?php
			$srcR = imagecreatefromjpeg($srcImg);
			imagefilter($srcR, IMG_FILTER_NEGATE);
			ob_start();
			imagejpeg($srcR);
			$filter = ob_get_contents();
			ob_end_clean();
			$filter = base64_encode($filter);
		?>
		<img src="data:image/jpg;base64,<?php echo $filter; ?>" alt="IMG_FILTER_NEGATE" />
	</div>
	<div>
		<h3>IMG_FILTER_GRAYSCALE</h3>
		<img src="<?php echo $srcImg; ?>" alt="Original" />
		<?php
			$srcR = imagecreatefromjpeg($srcImg);
			imagefilter($srcR, IMG_FILTER_GRAYSCALE);
			ob_start();
			imagejpeg($srcR);
			$filter = ob_get_contents();
			ob_end_clean();
			$filter = base64_encode($filter);
		?>
		<img src="data:image/jpg;base64,<?php echo $filter; ?>" alt="IMG_FILTER_GRAYSCALE" />
	</div>
	<div>
		<h3>IMG_FILTER_BRIGHTNESS</h3>
		<img src="<?php echo $srcImg; ?>" alt="Original" />
		<?php
			$srcR = imagecreatefromjpeg($srcImg);
			imagefilter($srcR, IMG_FILTER_BRIGHTNESS, 30);
			ob_start();
			imagejpeg($srcR);
			$filter = ob_get_contents();
			ob_end_clean();
			$filter = base64_encode($filter);
		?>
		<img src="data:image/jpg;base64,<?php echo $filter; ?>" alt="IMG_FILTER_BRIGHTNESS" />
		<?php
			$srcR = imagecreatefromjpeg($srcImg);
			imagefilter($srcR, IMG_FILTER_BRIGHTNESS, 70);
			ob_start();
			imagejpeg($srcR);
			$filter = ob_get_contents();
			ob_end_clean();
			$filter = base64_encode($filter);
		?>
		<img src="data:image/jpg;base64,<?php echo $filter; ?>" alt="IMG_FILTER_BRIGHTNESS" />
	</div>
	<div>
		<h3>IMG_FILTER_CONTRAST</h3>
		<img src="<?php echo $srcImg; ?>" alt="Original" />
		<?php
			$srcR = imagecreatefromjpeg($srcImg);
			imagefilter($srcR, IMG_FILTER_CONTRAST, 30);
			ob_start();
			imagejpeg($srcR);
			$filter = ob_get_contents();
			ob_end_clean();
			$filter = base64_encode($filter);
		?>
		<img src="data:image/jpg;base64,<?php echo $filter; ?>" alt="IMG_FILTER_CONTRAST" />
		<?php
			$srcR = imagecreatefromjpeg($srcImg);
			imagefilter($srcR, IMG_FILTER_CONTRAST, 70);
			ob_start();
			imagejpeg($srcR);
			$filter = ob_get_contents();
			ob_end_clean();
			$filter = base64_encode($filter);
		?>
		<img src="data:image/jpg;base64,<?php echo $filter; ?>" alt="IMG_FILTER_CONTRAST" />
	</div>
	<div>
		<h3>IMG_FILTER_COLORIZE</h3>
		<img src="<?php echo $srcImg; ?>" alt="Original" />
		<?php
			$srcR = imagecreatefromjpeg($srcImg);
			imagefilter($srcR, IMG_FILTER_COLORIZE, 225, 0, 0, 0);
			ob_start();
			imagejpeg($srcR);
			$filter = ob_get_contents();
			ob_end_clean();
			$filter = base64_encode($filter);
		?>
		<img src="data:image/jpg;base64,<?php echo $filter; ?>" alt="IMG_FILTER_COLORIZE" />
		<?php
			$srcR = imagecreatefromjpeg($srcImg);
			imagefilter($srcR, IMG_FILTER_COLORIZE, 0, 255, 0, 0);
			ob_start();
			imagejpeg($srcR);
			$filter = ob_get_contents();
			ob_end_clean();
			$filter = base64_encode($filter);
		?>
		<img src="data:image/jpg;base64,<?php echo $filter; ?>" alt="IMG_FILTER_COLORIZE" />
		<?php
			$srcR = imagecreatefromjpeg($srcImg);
			imagefilter($srcR, IMG_FILTER_COLORIZE, 0, 0, 255, 0);
			ob_start();
			imagejpeg($srcR);
			$filter = ob_get_contents();
			ob_end_clean();
			$filter = base64_encode($filter);
		?>
		<img src="data:image/jpg;base64,<?php echo $filter; ?>" alt="IMG_FILTER_COLORIZE" />
	</div>
	<div>
		<h3>IMG_FILTER_EDGEDETECT</h3>
		<img src="<?php echo $srcImg; ?>" alt="Original" />
		<?php
			$srcR = imagecreatefromjpeg($srcImg);
			imagefilter($srcR, IMG_FILTER_EDGEDETECT);
			ob_start();
			imagejpeg($srcR);
			$filter = ob_get_contents();
			ob_end_clean();
			$filter = base64_encode($filter);
		?>
		<img src="data:image/jpg;base64,<?php echo $filter; ?>" alt="IMG_FILTER_EDGEDETECT" />
	</div>
	<div>
		<h3>IMG_FILTER_EMBOSS</h3>
		<img src="<?php echo $srcImg; ?>" alt="Original" />
		<?php
			$srcR = imagecreatefromjpeg($srcImg);
			imagefilter($srcR, IMG_FILTER_EMBOSS);
			ob_start();
			imagejpeg($srcR);
			$filter = ob_get_contents();
			ob_end_clean();
			$filter = base64_encode($filter);
		?>
		<img src="data:image/jpg;base64,<?php echo $filter; ?>" alt="IMG_FILTER_EMBOSS" />
	</div>
	<div>
		<h3>IMG_FILTER_GAUSSIAN_BLUR</h3>
		<img src="<?php echo $srcImg; ?>" alt="Original" />
		<?php
			$srcR = imagecreatefromjpeg($srcImg);
			imagefilter($srcR, IMG_FILTER_GAUSSIAN_BLUR);
			ob_start();
			imagejpeg($srcR);
			$filter = ob_get_contents();
			ob_end_clean();
			$filter = base64_encode($filter);
		?>
		<img src="data:image/jpg;base64,<?php echo $filter; ?>" alt="IMG_FILTER_GAUSSIAN_BLUR" />
	</div>
	<div>
		<h3>IMG_FILTER_SELECTIVE_BLUR</h3>
		<img src="<?php echo $srcImg; ?>" alt="Original" />
		<?php
			$srcR = imagecreatefromjpeg($srcImg);
			imagefilter($srcR, IMG_FILTER_SELECTIVE_BLUR);
			ob_start();
			imagejpeg($srcR);
			$filter = ob_get_contents();
			ob_end_clean();
			$filter = base64_encode($filter);
		?>
		<img src="data:image/jpg;base64,<?php echo $filter; ?>" alt="IMG_FILTER_SELECTIVE_BLUR" />
	</div>
	<div>
		<h3>IMG_FILTER_MEAN_REMOVAL</h3>
		<img src="<?php echo $srcImg; ?>" alt="Original" />
		<?php
			$srcR = imagecreatefromjpeg($srcImg);
			imagefilter($srcR, IMG_FILTER_MEAN_REMOVAL);
			ob_start();
			imagejpeg($srcR);
			$filter = ob_get_contents();
			ob_end_clean();
			$filter = base64_encode($filter);
		?>
		<img src="data:image/jpg;base64,<?php echo $filter; ?>" alt="IMG_FILTER_MEAN_REMOVAL" />
	</div>
	<div>
		<h3>IMG_FILTER_SMOOTH</h3>
		<img src="<?php echo $srcImg; ?>" alt="Original" />
		<?php
			$srcR = imagecreatefromjpeg($srcImg);
			imagefilter($srcR, IMG_FILTER_SMOOTH, 30);
			ob_start();
			imagejpeg($srcR);
			$filter = ob_get_contents();
			ob_end_clean();
			$filter = base64_encode($filter);
		?>
		<img src="data:image/jpg;base64,<?php echo $filter; ?>" alt="IMG_FILTER_SMOOTH" />
		<?php
			$srcR = imagecreatefromjpeg($srcImg);
			imagefilter($srcR, IMG_FILTER_SMOOTH, 70);
			ob_start();
			imagejpeg($srcR);
			$filter = ob_get_contents();
			ob_end_clean();
			$filter = base64_encode($filter);
		?>
		<img src="data:image/jpg;base64,<?php echo $filter; ?>" alt="IMG_FILTER_SMOOTH" />
	</div>
	<div>
		<h3>IMG_FILTER_PIXELATE</h3>
		<img src="<?php echo $srcImg; ?>" alt="Original" />
		<?php
			$srcR = imagecreatefromjpeg($srcImg);
			imagefilter($srcR, IMG_FILTER_PIXELATE, 30);
			ob_start();
			imagejpeg($srcR);
			$filter = ob_get_contents();
			ob_end_clean();
			$filter = base64_encode($filter);
		?>
		<img src="data:image/jpg;base64,<?php echo $filter; ?>" alt="IMG_FILTER_PIXELATE" />
		<?php
			$srcR = imagecreatefromjpeg($srcImg);
			imagefilter($srcR, IMG_FILTER_PIXELATE, 70);
			ob_start();
			imagejpeg($srcR);
			$filter = ob_get_contents();
			ob_end_clean();
			$filter = base64_encode($filter);
		?>
		<img src="data:image/jpg;base64,<?php echo $filter; ?>" alt="IMG_FILTER_PIXELATE" />
	</div>
	<div>
		<h3>IMG_FILTER_PIXELATE use advanced pixelation effect</h3>
		<img src="<?php echo $srcImg; ?>" alt="Original" />
		<?php
			$srcR = imagecreatefromjpeg($srcImg);
			imagefilter($srcR, IMG_FILTER_PIXELATE, 30, true);
			ob_start();
			imagejpeg($srcR);
			$filter = ob_get_contents();
			ob_end_clean();
			$filter = base64_encode($filter);
		?>
		<img src="data:image/jpg;base64,<?php echo $filter; ?>" alt="IMG_FILTER_PIXELATE" />
		<?php
			$srcR = imagecreatefromjpeg($srcImg);
			imagefilter($srcR, IMG_FILTER_PIXELATE, 70, true);
			ob_start();
			imagejpeg($srcR);
			$filter = ob_get_contents();
			ob_end_clean();
			$filter = base64_encode($filter);
		?>
		<img src="data:image/jpg;base64,<?php echo $filter; ?>" alt="IMG_FILTER_PIXELATE" />
	</div>
</body>
</html>