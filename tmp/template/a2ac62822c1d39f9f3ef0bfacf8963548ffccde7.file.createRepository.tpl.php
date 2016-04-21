<?php /* Smarty version Smarty-3.1.8, created on 2015-07-05 22:03:09
         compiled from "/var/www/html/obelisksoft/views/repository/createRepository.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1253865077556b54adede002-48943323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2ac62822c1d39f9f3ef0bfacf8963548ffccde7' => 
    array (
      0 => '/var/www/html/obelisksoft/views/repository/createRepository.tpl',
      1 => 1436133787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1253865077556b54adede002-48943323',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_556b54ae168763_54658974',
  'variables' => 
  array (
    'style' => 0,
    'titulo' => 0,
    '_layoutParams' => 0,
    'date' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556b54ae168763_54658974')) {function content_556b54ae168763_54658974($_smarty_tpl) {?><div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
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
repository/createRepository/" method="post" id="form1">
                <input type="hidden" value="1" name="save" />  
                <header>
                    <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>

                </header>
                <fieldset>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-archive"></i>
                      <input type="text" class="form-control" placeholder="<?php echo _("Name Repository");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['namerepository'])===null||$tmp==='' ? '' : $tmp);?>
" name="namerepository">
                      <b class="tooltip tooltip-bottom-right"><?php echo _("Needed to enter the website");?>
</b>
                    </label>
                  </section>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-gears"></i>
                      <input type="text" class="form-control" placeholder="<?php echo _("Path Repository");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['pathrepository'])===null||$tmp==='' ? '' : $tmp);?>
" name="pathrepository">
                      <b class="tooltip tooltip-bottom-right"><?php echo _("Needed to enter the website");?>
</b>
                    </label>
                  </section>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-user"></i>
                      <input type="text" class="form-control" placeholder="<?php echo _("User Repository");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['userrepository'])===null||$tmp==='' ? '' : $tmp);?>
" name="userrepository">
                      <b class="tooltip tooltip-bottom-right"><?php echo _("Needed to enter the website");?>
</b>
                    </label>
                  </section>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                      <input type="password" class="form-control" placeholder="<?php echo _("Password Repository");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['passrepository'])===null||$tmp==='' ? '' : $tmp);?>
" name="passrepository">
                      <b class="tooltip tooltip-bottom-right"><?php echo _("Needed to enter the website");?>
</b>
                    </label>
                  </section>
                  <section>
                    <label class="textarea"> <i class="icon-append fa fa-comment"></i> 
                      <textarea class="form-control" rows="3" name="<?php echo _("description");?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['description'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                    </label>
                  </section>
                </fieldset>    
                <footer>
                  <button type="submit" class="btn btn-primary">
                    <?php echo _("Save");?>

                  </button>
                  <button type="button" class="btn btn-warning" onClick="location.href='/repository/';" ><?php echo _("Cancel");?>
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