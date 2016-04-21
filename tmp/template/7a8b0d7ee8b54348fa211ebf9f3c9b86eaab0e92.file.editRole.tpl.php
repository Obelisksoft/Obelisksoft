<?php /* Smarty version Smarty-3.1.8, created on 2016-02-04 15:29:58
         compiled from "/var/www/obelisksoft.com/obelisksoft/views/rol/editRole.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132742471456b3b2fee9c5b7-96014537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a8b0d7ee8b54348fa211ebf9f3c9b86eaab0e92' => 
    array (
      0 => '/var/www/obelisksoft.com/obelisksoft/views/rol/editRole.tpl',
      1 => 1454617794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132742471456b3b2fee9c5b7-96014537',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b3b2feed6b35_76941936',
  'variables' => 
  array (
    'style' => 0,
    'titulo' => 0,
    'dates' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b3b2feed6b35_76941936')) {function content_56b3b2feed6b35_76941936($_smarty_tpl) {?><div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
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
              <form class="smart-form" novalidate="novalidate" action="" method="post" id="form1">
                <input type="hidden" value="1" name="edit" />  
                <header>
                    <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>

                </header>
                <fieldset>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-gears"></i>
                      <input type="text" class="form-control" placeholder="<?php echo _("Role");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dates']->value['rol'])===null||$tmp==='' ? '' : $tmp);?>
" name="rol">
                      <b class="tooltip tooltip-bottom-right"><?php echo _("Needed to enter the website");?>
</b>
                    </label>
                  </section>
                  <section>
                    <label class="textarea"> <i class="icon-append fa fa-comment"></i> 
                      <textarea class="form-control" rows="3" name="<?php echo _("description");?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['dates']->value['description'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                    </label>
                  </section>
                </fieldset>    
                <footer>
                  <button type="submit" class="btn btn-primary">
                    <?php echo _("Save");?>

                  </button>
                  <button type="button" class="btn btn-warning" onClick="location.href='/user/';" ><?php echo _("Cancel");?>
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