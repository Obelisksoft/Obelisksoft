<?php /* Smarty version Smarty-3.1.8, created on 2016-02-04 15:04:02
         compiled from "/var/www/obelisksoft.com/obelisksoft/views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1508982508565e27eef16c98-16065428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '587f6ab1bfc11e39efcea2aec55ebef423225a45' => 
    array (
      0 => '/var/www/obelisksoft.com/obelisksoft/views/index/index.tpl',
      1 => 1454616239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1508982508565e27eef16c98-16065428',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_565e27ef022d01_44215036',
  'variables' => 
  array (
    '_acl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565e27ef022d01_44215036')) {function content_565e27ef022d01_44215036($_smarty_tpl) {?><div class="row">

	<div class="col-sm-12">


		<div id="myTabContent1" class="tab-content bg-color-white padding-10">
			<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('new_document')){?>
  				<div class="newposition"><a href="/document/newdocumenttrd/" class="btn btn-success active" role="button"><?php echo _("New Document");?>
</a></div>
			<?php }?>
			<br>
			
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