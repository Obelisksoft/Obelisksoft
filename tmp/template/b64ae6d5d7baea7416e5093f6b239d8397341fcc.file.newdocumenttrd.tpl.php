<?php /* Smarty version Smarty-3.1.8, created on 2015-07-06 03:04:33
         compiled from "/var/www/html/obelisksoft/views/document/newdocumenttrd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19691592795562818560ee68-35898999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b64ae6d5d7baea7416e5093f6b239d8397341fcc' => 
    array (
      0 => '/var/www/html/obelisksoft/views/document/newdocumenttrd.tpl',
      1 => 1436151868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19691592795562818560ee68-35898999',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55628185670fc4_67007537',
  'variables' => 
  array (
    'oculto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55628185670fc4_67007537')) {function content_55628185670fc4_67007537($_smarty_tpl) {?><section id="widget-grid" class="">
	<!-- row -->
	<div class="row">

		<!-- NEW WIDGET START -->
		<article class="col-sm-12">

						
			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-blueLight" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false">
				<!-- widget options:
				usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false" >

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
					<span class="widget-icon"> <i class="fa fa-cloud"></i> </span>
					<h2><?php echo _("My Dropzone");?>
! </h2>

				</header>

				<!-- widget div-->
				<div>

					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->

					</div>
					<!-- end widget edit box -->

					<!-- widget content -->
					<div class="widget-body">

						<form action="" class="dropzone" id="mydropzone">
							<input type="hidden" name="option" value="<?php echo $_smarty_tpl->tpl_vars['oculto']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oculto']->value;?>
" id="oculto">

						</form>

					</div>
					<footer>
                  		<button type="submit" class="btn btn-primary" id="createDoc" onClick="location.href='/document/captureImage/?folder=<?php echo $_smarty_tpl->tpl_vars['oculto']->value;?>
';"  data-target="#myModal"><span class="fa fa-cloud-upload"></span><?php echo _("upload");?>
</button>
                	</footer>
					<!-- end widget content -->

				</div>
				<!-- end widget div -->

			</div>
			<!-- end widget -->

		</article>
		<!-- WIDGET END -->

	</div>
</select>
	<!-- end row -->

	<!-- row -->


<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <!--content-->
        	
        	<iframe src="/document/imagesTemp/" height="100%" width="100%" frameborder="0"></iframe>

        <!-- end conten-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


          <?php }} ?>