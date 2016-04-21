<?php /* Smarty version Smarty-3.1.8, created on 2015-06-26 11:35:38
         compiled from "/var/www/html/obelisksoft/views/system/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1043667622558d7f5a2f53a5-71696255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50752fd3ec4cfd39a7b2c1c78939fa2f0b72e3b1' => 
    array (
      0 => '/var/www/html/obelisksoft/views/system/index.tpl',
      1 => 1432487351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1043667622558d7f5a2f53a5-71696255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_558d7f5a359ca8_22128264',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558d7f5a359ca8_22128264')) {function content_558d7f5a359ca8_22128264($_smarty_tpl) {?><div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">
  <section id="widget-grid" class="">
    <div class="row">
      <article class="col-sm-12 col-md-12 col-lg-12">
        <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-deletebutton="false">
          <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2>Phpinfo</h2>              
          </header>
          <div>
            <div class="jarviswidget-editbox">
                <!-- This area used as dropdown edit box -->                
            </div>
            <div class="widget-body no-padding">
 				<iframe src="/system/phpinfo/" width=100% height=360 frameborder=0 ></iframe>
            </div>
          </div>
        </div>
      </article>
    </div>   
  </section>
</div><?php }} ?>