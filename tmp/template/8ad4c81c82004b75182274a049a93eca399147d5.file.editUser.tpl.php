<?php /* Smarty version Smarty-3.1.8, created on 2016-02-04 15:28:26
         compiled from "/var/www/obelisksoft.com/obelisksoft/views/user/editUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171527438456609d2502b2a9-46965350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ad4c81c82004b75182274a049a93eca399147d5' => 
    array (
      0 => '/var/www/obelisksoft.com/obelisksoft/views/user/editUser.tpl',
      1 => 1454617703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171527438456609d2502b2a9-46965350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56609d250c9ab6_21279319',
  'variables' => 
  array (
    'style' => 0,
    'titulo' => 0,
    'dates' => 0,
    'rol' => 0,
    'roles' => 0,
    'p' => 0,
    'stat' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56609d250c9ab6_21279319')) {function content_56609d250c9ab6_21279319($_smarty_tpl) {?><div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">
  <section id="widget-grid" class="">
  <!-- row -->
    <div class="row">
      <article class="col-sm-12 col-md-12 col-lg-12">
      <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-deletebutton="false">
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
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
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
            <div class="widget-body no-padding">
             <form class="smart-form" novalidate="novalidate" role="form" action="" method="post" id="form1">
                <input type="hidden" value="1" name="edit" />  
                  <header>
                    <?php echo _("Edit");?>

                  </header>

                  <fieldset>
                    <div class="row">
                      <section class="col col-6">
                        <label class="input"> <i class="icon-append fa fa-user"></i>
                          <input type="text" class="form-control" placeholder="<?php echo _("First Name");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dates']->value['firstname'])===null||$tmp==='' ? '' : $tmp);?>
" name="firstname"></p>
                        </label>
                      </section>
                      <section class="col col-6">
                        <label class="input"> <i class="icon-append fa fa-user"></i>
                          <input type="text" class="form-control" placeholder="<?php echo _("Last Name");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dates']->value['lastname'])===null||$tmp==='' ? '' : $tmp);?>
" name="lastname"></p>
                        </label>
                      </section>
                    </div>
                    <div class="row">
                      <section class="col col-6">
                        <label class="input"> <i class="icon-append fa fa-user"></i>
                          <input type="text" class="form-control" placeholder="<?php echo _("Login");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dates']->value['login'])===null||$tmp==='' ? '' : $tmp);?>
" name="login" id="login"></p>
                        </label>
                      </section>
                      <section class="col col-6">
                        <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                          <input type="text" class="form-control" placeholder="<?php echo _("Email");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dates']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" name="email" id="email"></p>
                        </label>
                      </section>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="row">
                      <section class="col col-6">
                        <label class="input"> <i class="icon-append fa fa-unlock-alt"></i>
                          <input type="password" class="form-control" placeholder="<?php echo _("Password");?>
"" name="passwd" id="passwd"></p>
                        </label>
                      </section>
                      <section class="col col-6">
                        <label class="input"> <i class="icon-append fa fa-unlock-alt"></i>
                          <input type="password" class="form-control" placeholder="<?php echo _("Confirm Password");?>
""  name="confirmpasswd" id="confirmpasswd"></p>
                        </label>
                      </section>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="row">
                      <section class="col col-6">
                        <select id="role" class="form-control" name="rol">
                            <option value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['rol']->value['id_rol'])===null||$tmp==='' ? '' : $tmp);?>
"> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['rol']->value['rol'])===null||$tmp==='' ? '' : $tmp);?>
 </option>
                              <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>                              
                                <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id_rol'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['rol'];?>
</option>
                              <?php } ?>
                        </select>
                      </section>
                      <section class="col col-6">
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
                          </select>
                      </section>
                    </div>
                  </fieldset>
                  <footer>
                    <button type="submit" class="btn btn-primary">
                      <?php echo _("Edit");?>

                    </button>
                    <button type="button" class="btn btn-warning" onClick="location.href='/user/';" ><?php echo _("Cancel");?>
</button>
                  </footer>
                </form>
              </div>
              <!-- end widget content -->
            </div>
            <!-- end widget div -->
          </div>
        </article>
           <!-- end widget -->   
    </div>
          <!-- row -->
  </section>
</div><?php }} ?>