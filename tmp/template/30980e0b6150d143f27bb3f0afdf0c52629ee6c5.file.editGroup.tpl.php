<?php /* Smarty version Smarty-3.1.8, created on 2015-07-05 21:44:37
         compiled from "/var/www/html/obelisksoft/views/group/editGroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16542754005599a545ccedd8-54676529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30980e0b6150d143f27bb3f0afdf0c52629ee6c5' => 
    array (
      0 => '/var/www/html/obelisksoft/views/group/editGroup.tpl',
      1 => 1436132515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16542754005599a545ccedd8-54676529',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'style' => 0,
    'titulo' => 0,
    'date' => 0,
    'stat' => 0,
    'status' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5599a545daa811_29511841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5599a545daa811_29511841')) {function content_5599a545daa811_29511841($_smarty_tpl) {?><div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
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
                    <label class="input"> <i class="icon-append fa fa-group"></i>
                      <input type="text" class="form-control" placeholder="<?php echo _("Group");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['group'])===null||$tmp==='' ? '' : $tmp);?>
" name="group" >
                      <b class="tooltip tooltip-bottom-right"><?php echo _("Needed to enter the website");?>
</b>
                    </label>
                  </section>
                  <section>
                     <label class="select">
                         <select id="status" class="form-control" name="status">
                          <option value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['stat']->value['id_status'])===null||$tmp==='' ? '' : $tmp);?>
"> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['stat']->value['status'])===null||$tmp==='' ? '' : $tmp);?>
 </option>
                          <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                              
                              <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id_status'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['status'];?>
</option>
                              
                          <?php } ?>
                      </select><i></i>
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