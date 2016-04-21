<?php /* Smarty version Smarty-3.1.8, created on 2015-12-05 12:03:24
         compiled from "/var/www/obelisksoft.com/obelisksoft/views/document/imagesTemp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1513968013566318dc45ff17-46429923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32bc11411320846066c0c08e4b04707bb69207a5' => 
    array (
      0 => '/var/www/obelisksoft.com/obelisksoft/views/document/imagesTemp.tpl',
      1 => 1449006002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1513968013566318dc45ff17-46429923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'images' => 0,
    'ruta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_566318dc524ce4_92057640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566318dc524ce4_92057640')) {function content_566318dc524ce4_92057640($_smarty_tpl) {?><html>
	<head>
	    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>Galleriffic | Integration with history plugin</title>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/galleriffic-2.0/css/basic.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/galleriffic-2.0/css/galleriffic-3.css" type="text/css" />
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/galleriffic-2.0/js/jquery-1.3.2.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/galleriffic-2.0/js/jquery.history.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/galleriffic-2.0/js/jquery.galleriffic.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/galleriffic-2.0/js/jquery.opacityrollover.js"></script>
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
						<?php echo $_smarty_tpl->tpl_vars['images']->value;?>

						<?php echo $_smarty_tpl->tpl_vars['ruta']->value;?>


						
					</ul>
				</div>
				<!-- End Advanced Gallery Html Containers -->
				<div style="clear: both;"></div>
			</div>
		</div>
		
	</body>
</html><?php }} ?>