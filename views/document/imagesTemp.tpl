<html>
	<head>
	    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>Galleriffic | Integration with history plugin</title>
		<link rel="stylesheet" href="{$_layoutParams.root}public/js/galleriffic-2.0/css/basic.css" type="text/css" />
		<link rel="stylesheet" href="{$_layoutParams.root}public/js/galleriffic-2.0/css/galleriffic-3.css" type="text/css" />
		<script type="text/javascript" src="{$_layoutParams.root}public/js/galleriffic-2.0/js/jquery-1.3.2.js"></script>
		<script type="text/javascript" src="{$_layoutParams.root}public/js/galleriffic-2.0/js/jquery.history.js"></script>
		<script type="text/javascript" src="{$_layoutParams.root}public/js/galleriffic-2.0/js/jquery.galleriffic.js"></script>
		<script type="text/javascript" src="{$_layoutParams.root}public/js/galleriffic-2.0/js/jquery.opacityrollover.js"></script>
		<!-- We only want the thunbnails to display when javascript is disabled -->

		<script type="text/javascript">
			document.write('<style>.noscript { display: none; }</style>');
		</script>
	   
	</head>
	<body>
		<div id="page">
			<div id="container">
				<!-- Start Advanced Gallery Html Containers -->
				<div id="gallery" class="content">
					<div id="controls" class="controls"></div>
					<div class="slideshow-container">
						<div id="loading" class="loader"></div>
						<div id="slideshow" class="slideshow"></div>
					</div>
					<div id="caption" class="caption-container"></div>
				</div>
				<div id="thumbs" class="navigation">
					<ul class="thumbs noscript">
						{$images}
						{$ruta}

						
					</ul>
				</div>
				<!-- End Advanced Gallery Html Containers -->
				<div style="clear: both;"></div>
			</div>
		</div>
		
	</body>
</html>