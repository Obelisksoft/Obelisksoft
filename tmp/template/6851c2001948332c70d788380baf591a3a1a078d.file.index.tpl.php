<?php /* Smarty version Smarty-3.1.8, created on 2015-08-30 17:11:12
         compiled from "/var/www/html/obelisksoft/views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:529056205562772f442e12-22088299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6851c2001948332c70d788380baf591a3a1a078d' => 
    array (
      0 => '/var/www/html/obelisksoft/views/index/index.tpl',
      1 => 1440954670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '529056205562772f442e12-22088299',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5562772f447273_35843151',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5562772f447273_35843151')) {function content_5562772f447273_35843151($_smarty_tpl) {?><div class="row">

	<div class="col-sm-12">


		<div id="myTabContent1" class="tab-content bg-color-white padding-10">
			<div class="tab-pane fade in active" id="s1">

				<div class="input-group input-group-lg hidden-mobile">
					<input class="form-control input-lg" type="text" placeholder='<?php echo _("Search Again…");?>
' id="busqueda">
						<div class="input-group-btn">
							<button type="submit" class="btn btn-default">
								&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-search fa-lg"></i>&nbsp;&nbsp;&nbsp;
								</button>
						</div>
				</div>
				<div id="resul"></div>
			</div>
		</div>
	</div>
</div><?php }} ?>