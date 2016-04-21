<?php /* Smarty version Smarty-3.1.8, created on 2015-08-30 18:32:01
         compiled from "/var/www/html/obelisksoft/views/logo/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175642221355ad5930ef61d1-94211289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5a40ea12569d6ba77207196e13d512d2b3b3419' => 
    array (
      0 => '/var/www/html/obelisksoft/views/logo/index.tpl',
      1 => 1440959516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175642221355ad5930ef61d1-94211289',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55ad593101ea68_98547865',
  'variables' => 
  array (
    'logos' => 0,
    'date' => 0,
    '_layoutParams' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ad593101ea68_98547865')) {function content_55ad593101ea68_98547865($_smarty_tpl) {?>
<section id="widget-grid" class="">

	<!-- row -->
	<div class="row">
		
		<!-- NEW WIDGET START -->
		<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget" id="wid-id-0">
				<!-- widget options:
					usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
					
					data-widget-colorbutton="false"	
					data-widget-editbutton="false"
					data-widget-togglebutton="false"
					data-widget-deletebutton="false"
					data-widget-fullscreenbutton="false"
					data-widget-custombutton="false"
					data-widget-collapsed="true" 
					data-widget-sortable="false"
					
				-->
				<header>
					<h2><strong><?php echo _("Change");?>
</strong> <i>Logo</i></h2>				
					
				</header>

				<!-- widget div-->
				<div>
					
					<!-- widget edit box -->
					<div class="jarviswidget-editbox">						
					</div>
					<!-- end widget edit box -->
					
					<!-- widget content -->
					<div class="widget-body">
						<button id="uploads" class="btn btn-success"><?php echo _("Upload Logo");?>
</button>
						<br><hr>

						<div class="superbox col-sm-12">
						<?php if (isset($_smarty_tpl->tpl_vars['logos']->value)&&count($_smarty_tpl->tpl_vars['logos']->value)){?>
							<?php  $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date']->key => $_smarty_tpl->tpl_vars['date']->value){
$_smarty_tpl->tpl_vars['date']->_loop = true;
?>
								<div class="superbox-list" alt="<?php echo $_smarty_tpl->tpl_vars['date']->value['ID_LOGO'];?>
">
									<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/logos/<?php echo $_smarty_tpl->tpl_vars['date']->value['NAMELOGO'];?>
" sizes="76x76" data-img="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/logos/<?php echo $_smarty_tpl->tpl_vars['date']->value['NAMELOGO'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['date']->value['ID_LOGO'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['date']->value['NAMELOGO'];?>
" class="superbox-img">
								</div>
							<?php } ?>
						<?php }?>
						<br>
							<!--
						
						<div class="superbox-float"></div>
						<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
splash/touch-icon-ipad.png">
					</div>
					<!-- /SuperBox -->
					
					<div class="superbox-show" style="height:300px; display: none"></div>

						
						
					</div>
					<!-- end widget content -->

					
				</div>
				<!-- end widget div -->
				
			</div>
			<!-- end widget -->
		</article>
		<footer>
                <?php if (isset($_smarty_tpl->tpl_vars['pagination']->value)){?><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
<?php }?>
              </footer>
	</div>
</section>

<div id="uploadlo" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?php echo _("Upload Logo");?>
</h4>
      </div>
	  	<div class="modal-body">
	  		<form action="upload.php" class="dropzone" id="mydropzone"></form>
	  	</div>
      	<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo _("Close");?>
</button>
        <button type="submit" class="btn btn-success" data-dismiss="modal" id="uploadLo"><?php echo _("Upload");?>
</button>
      	</div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id="aplicate" class="modal fade">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?php echo _("Use Logo");?>
</h4>
      </div>
	  	<div class="modal-body">
	  		<div class="apli"></div>  
	  	</div>
      	<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="deletes"><?php echo _("Delete");?>
</button>
        <button type="submit" class="btn btn-success" data-dismiss="modal" id="aplicats"><?php echo _("Apply");?>
</button>
      	</div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php }} ?>