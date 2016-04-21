<?php /* Smarty version Smarty-3.1.8, created on 2015-07-05 21:20:38
         compiled from "/var/www/html/obelisksoft/views/acl/newPermission.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185792011155770f16cd1b74-70087806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fc3996356981e0c40f162b35e7d6d5067892962' => 
    array (
      0 => '/var/www/html/obelisksoft/views/acl/newPermission.tpl',
      1 => 1436131232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185792011155770f16cd1b74-70087806',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55770f16e41b35_14326816',
  'variables' => 
  array (
    'style' => 0,
    'titulo' => 0,
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55770f16e41b35_14326816')) {function content_55770f16e41b35_14326816($_smarty_tpl) {?><div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">
  <section id="widget-grid" class="">
    <div class="row">
      <article class="col-sm-12 col-md-12 col-lg-6">
        <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-deletebutton="false">
          <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2><?php echo _("Registration");?>
 <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h2>              
          </header>
          <div>
            <div class="jarviswidget-editbox">
                <!-- This area used as dropdown edit box -->                
            </div>
            <div class="widget-body no-padding">
              <form class="smart-form" novalidate="novalidate" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/newPermission" method="post" id="form1">
                <input type="hidden" value="1" name="save" />  
                <header>
                    <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>

                </header>
                <fieldset>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                      <input type="text" class="form-control" placeholder="<?php echo _("Permission");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['permiso'])===null||$tmp==='' ? '' : $tmp);?>
" name="permiso">
                      <b class="tooltip tooltip-bottom-right"><?php echo _("Needed to enter the website");?>
</b>
                    </label>
                  </section>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-key"></i>
                      <input type="text" class="form-control" placeholder="<?php echo _("Key");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['key'])===null||$tmp==='' ? '' : $tmp);?>
" name="key">
                      <b class="tooltip tooltip-bottom-right"><?php echo _("Needed to enter the website");?>
</b>
                    </label>
                  </section>
                </fieldset>    
                <footer>
                  <button type="submit" class="btn btn-primary">
                    <?php echo _("Save");?>

                  </button>
                  <button type="button" class="btn btn-warning" onClick="location.href='/rol';" ><?php echo _("Cancel");?>
</button>
                </footer>
              </form>
            </div>
          </div>
        </div>
      </article>
    </div>   
  </section>
</div><?php }} ?>