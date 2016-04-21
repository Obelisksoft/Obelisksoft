<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 15:43:33
         compiled from "/var/www/html/obelisksoft/views/departament/createDepartament.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190958347855f6ce0ecfae01-77064795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '319cc9a8a11dccd6471a56e78e92a2ab398440e6' => 
    array (
      0 => '/var/www/html/obelisksoft/views/departament/createDepartament.tpl',
      1 => 1442241440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190958347855f6ce0ecfae01-77064795',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6ce0edd0518_18216630',
  'variables' => 
  array (
    'style' => 0,
    'titulo' => 0,
    '_layoutParams' => 0,
    'date' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6ce0edd0518_18216630')) {function content_55f6ce0edd0518_18216630($_smarty_tpl) {?><div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
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
departament/createDepartament/" method="post" id="form1">
                <input type="hidden" value="1" name="save" />  
                <header>
                    <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>

                </header>
                <fieldset>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-key"></i>
                      <input type="text" class="form-control" placeholder="<?php echo _("Code");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['departament'])===null||$tmp==='' ? '' : $tmp);?>
" name="code">
                      <b class="tooltip tooltip-bottom-right"><?php echo _("Needed to enter the website");?>
</b>
                    </label>
                  </section>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-cubes"></i>
                      <input type="text" class="form-control" placeholder="<?php echo _("Departament");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['departamet'])===null||$tmp==='' ? '' : $tmp);?>
" name="departament">
                      <b class="tooltip tooltip-bottom-right"><?php echo _("Needed to enter the website");?>
</b>
                    </label>
                  </section>
                  <section>
                    <label class="textarea"> <i class="icon-append fa fa-comment"></i> 
                      <textarea class="form-control" rows="3" name="<?php echo _("description");?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['departament'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                    </label>
                  </section>
                </fieldset>    
                <footer>
                  <button type="submit" class="btn btn-primary">
                    <?php echo _("Save");?>

                  </button>
                  <button type="button" class="btn btn-warning" onClick="location.href='/departament/departament/';" ><?php echo _("Cancel");?>
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