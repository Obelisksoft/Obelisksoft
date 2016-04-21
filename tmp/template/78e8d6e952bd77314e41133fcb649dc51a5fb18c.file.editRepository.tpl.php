<?php /* Smarty version Smarty-3.1.8, created on 2015-09-02 00:26:25
         compiled from "/var/www/html/obelisksoft/views/repository/editRepository.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5730797335599aab0b7ca42-11581792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78e8d6e952bd77314e41133fcb649dc51a5fb18c' => 
    array (
      0 => '/var/www/html/obelisksoft/views/repository/editRepository.tpl',
      1 => 1441153583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5730797335599aab0b7ca42-11581792',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5599aab0c97ab6_27552223',
  'variables' => 
  array (
    'style' => 0,
    'titulo' => 0,
    'datee' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5599aab0c97ab6_27552223')) {function content_5599aab0c97ab6_27552223($_smarty_tpl) {?><div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
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
              <form class="smart-form" novalidate="novalidate" action="" role="form" method="post" id="form1">
                <input type="hidden" value="1" name="edit" />  
                <header>
                    <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>

                </header>
                <fieldset>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-archive"></i>
                      <input type="text" class="form-control" placeholder="<?php echo _("Name Repository");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datee']->value['NAME_REPOSITORY'])===null||$tmp==='' ? '' : $tmp);?>
" name="namerepository">
                      <b class="tooltip tooltip-bottom-right"><?php echo _("Needed to enter the website");?>
"</b>
                    </label>
                  </section>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-gears"></i>
                      <input type="text" class="form-control" placeholder="<?php echo _("Path Repository");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datee']->value['PATH_REPOSITORY'])===null||$tmp==='' ? '' : $tmp);?>
" name="pathrepository">
                      <b class="tooltip tooltip-bottom-right"><?php echo _("Needed to enter the website");?>
</b>
                    </label>
                  </section>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-user"></i>
                      <input type="text" class="form-control" placeholder="<?php echo _("User Repository");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datee']->value['USER_REPOSITORY'])===null||$tmp==='' ? '' : $tmp);?>
" name="userrepository">
                      <b class="tooltip tooltip-bottom-right"><?php echo _("Needed to enter the website");?>
</b>
                    </label>
                  </section>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                      <input type="password" class="form-control" placeholder="<?php echo _("Password Repository");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datee']->value['PASS_REPOSITORY'])===null||$tmp==='' ? '' : $tmp);?>
" name="passrepository">
                      <b class="tooltip tooltip-bottom-right"><?php echo _("Needed to enter the website");?>
</b>
                    </label>
                  </section>
                  <section>
                    <label class="textarea"> <i class="icon-append fa fa-comment"></i> 
                      <textarea class="form-control" rows="3" name="<?php echo _("description");?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datee']->value['DESCRIPTION'])===null||$tmp==='' ? '' : $tmp);?>
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