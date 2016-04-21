<?php /* Smarty version Smarty-3.1.8, created on 2016-02-04 09:11:00
         compiled from "/var/www/obelisksoft.com/obelisksoft/views/system/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210960576656b35bf4b19f60-25779984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c64635b50d67c57734d9d1b7e4b42ec76f214a3' => 
    array (
      0 => '/var/www/obelisksoft.com/obelisksoft/views/system/index.tpl',
      1 => 1449006002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210960576656b35bf4b19f60-25779984',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b35bf4b3d8e3_20537391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b35bf4b3d8e3_20537391')) {function content_56b35bf4b3d8e3_20537391($_smarty_tpl) {?><div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
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