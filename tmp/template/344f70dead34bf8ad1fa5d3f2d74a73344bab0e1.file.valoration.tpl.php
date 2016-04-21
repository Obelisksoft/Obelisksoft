<?php /* Smarty version Smarty-3.1.8, created on 2015-07-06 12:47:43
         compiled from "/var/www/html/obelisksoft/views/table/valoration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185872757155770ef1099dd2-07197012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '344f70dead34bf8ad1fa5d3f2d74a73344bab0e1' => 
    array (
      0 => '/var/www/html/obelisksoft/views/table/valoration.tpl',
      1 => 1436150894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185872757155770ef1099dd2-07197012',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55770ef116b278_25186336',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'style' => 0,
    'titulo' => 0,
    'data' => 0,
    'tales' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55770ef116b278_25186336')) {function content_55770ef116b278_25186336($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.menu/jquery.contextMenu.js" type="text/javascript"></script>
	<link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.menu/jquery.contextMenu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
	
	$(document).ready(function() {
	
		$('.tree > ul').attr('role', 'tree').find('ul').attr('role', 'group');
		$('.tree').find('li:has(ul)').addClass('parent_li').attr('role', 'treeitem').find(' > span').attr('title', 'Collapse this branch').on('click', function(e) {
			var children = $(this).parent('li.parent_li').find(' > ul > li');
			if (children.is(':visible')) {
				children.hide('fast');
				$(this).attr('title', 'Expand this branch').find(' > i').removeClass().addClass('fa fa-lg fa-plus-circle');
			} else {
				children.show('fast');
				$(this).attr('title', 'Collapse this branch').find(' > i').removeClass().addClass('fa fa-lg fa-minus-circle');
			}
			e.stopPropagation();
		});			
	
	})

</script>

<div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">    
  <section id="widget-grid" class="">
  <!-- row -->
    <div class="row">
      <article class="col-sm-12 col-md-12 col-lg-12">		
					<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-deletebutton="false">
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
							<span class="widget-icon"> <i class="fa fa-sitemap"></i> </span>
							<h2>Table de <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h2>
		
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
								<button id="add" class="btn btn-success"><?php echo _("Add");?>
!</button>
								<div class="tree smart-form">

									<ul>
										<?php echo $_smarty_tpl->tpl_vars['data']->value;?>

									</ul>
								</div>
		
							</div>
							<!-- end widget content -->
		
						</div>
						<!-- end widget div -->
		
					</div>
					<!-- end widget -->
		
				</article>
				<!-- WIDGET END -->
		
			</div>
		
			<!-- end row -->
		</section>
			<!-- row -->
		


<div id="dialog" title="<?php echo _("Create Serie");?>
">
<p><?php echo _("Name of Serie");?>
 :</p>
<input type="text" id="nameSerie"></div>

<div id="dialog1" title="<?php echo _("Create SubSerie");?>
">
<p><?php echo _("Name Subserie");?>
 :</p>
<input type="text" id="nameSubSerie"></div>

<div id="dialog2" title="<?php echo _("Add Type Document");?>
">
<iframe
	id="ifrtiposseries" name="tiposseries" frameborder='no' width='260px'
	height='300px' aling="center"></iframe></div>

<div id="dialog3" title="<?php echo _("Add Indexes");?>
">
<iframe
	id="ifindex" name="typeindex" frameborder='no' width='260px'
	height='300px' aling="center"></iframe>
</div>

<div id="editdialog" title="<?php echo _("Edit Serie or Subserie");?>
">
<p><?php echo _("Name Serie");?>
 :</p>
<input type="text" id="nameSerie2" name="nameSerie2" ></div>

<div id="seriedelete" title="<?php echo _("Alert");?>
">
  <p><?php echo _("delete Serie");?>
?</p>
</div>

<div id="subseriedelete" title="<?php echo _("Alert");?>
">
  <p><?php echo _("delete Serie");?>
?</p>
</div>

<?php echo $_smarty_tpl->tpl_vars['tales']->value;?>

 <?php }} ?>