<?php /* Smarty version Smarty-3.1.8, created on 2015-07-22 01:46:15
         compiled from "/var/www/html/obelisksoft/views/repository/readingRepository.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48881537556280fab07098-78473950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab1ffb9b1148a096d3dbaa01a47b799ca5056e53' => 
    array (
      0 => '/var/www/html/obelisksoft/views/repository/readingRepository.tpl',
      1 => 1437529574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48881537556280fab07098-78473950',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_556280fab9ce86_09116602',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'style' => 0,
    'data' => 0,
    'datas' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556280fab9ce86_09116602')) {function content_556280fab9ce86_09116602($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/drag-and-drop.css" rel="stylesheet" type="text/css" />

<div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">
  <section id="widget-grid" class="">
    <div class="row">
      <article class="col-sm-12 col-md-12 col-lg-12">
        <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-deletebutton="false">
          <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2><?php echo _("Order Repository");?>
 </h2>       
          </header>
          <div>
            <!-- widget edit box -->
            <div class="jarviswidget-editbox">
              <!-- This area used as dropdown edit box -->
            </div>
            <!-- end widget edit box -->
            <!-- widget content -->
            <div class="widget-body no-padding">
              	<div class="dhe-example-section" id="ex-1-1">
					<div class="dhe-example-section-content">

						<!-- BEGIN: XHTML for example 1.1 -->

						<div id="example-1-1">

							<ul class="sortable-list">
								<?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datas']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
$_smarty_tpl->tpl_vars['datas']->_loop = true;
?>
									<li class="sortable-item" id="<?php echo $_smarty_tpl->tpl_vars['datas']->value['ID_REPOSITORY'];?>
"><?php echo $_smarty_tpl->tpl_vars['datas']->value['NAME_REPOSITORY'];?>
 - <?php echo $_smarty_tpl->tpl_vars['datas']->value['PATH_REPOSITORY'];?>
</li>
								<?php } ?>
							</ul>

						</div>

						<!-- END: XHTML for example 1.1 -->

					</div>
				</div>

            </div>
          <!-- end widget content -->
          </div>
        </div>
          <!-- end widget -->   
      </article>
    </div>
    <!-- end row -->
    <!-- row -->
  </section>
</div>



<?php }} ?>