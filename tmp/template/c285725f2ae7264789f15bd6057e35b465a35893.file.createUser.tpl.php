<?php /* Smarty version Smarty-3.1.8, created on 2015-07-05 19:44:18
         compiled from "/var/www/html/obelisksoft/views/user/createUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:370301715556288c573bc42-59098128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c285725f2ae7264789f15bd6057e35b465a35893' => 
    array (
      0 => '/var/www/html/obelisksoft/views/user/createUser.tpl',
      1 => 1436125454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '370301715556288c573bc42-59098128',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_556288c58cb1a2_85604159',
  'variables' => 
  array (
    'style' => 0,
    '_layoutParams' => 0,
    'date' => 0,
    'roles' => 0,
    'p' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556288c58cb1a2_85604159')) {function content_556288c58cb1a2_85604159($_smarty_tpl) {?><div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">
  <section id="widget-grid" class="">
    <div class="row">
      <article class="col-sm-12 col-md-12 col-lg-12">
        <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-deletebutton="false">
          <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2><?php echo _("Registration form");?>
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
              <form class="smart-form" novalidate="novalidate" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
user/createUser/" method="post" id="form1">
                <input type="hidden" value="1" name="save" />  
                <header>
                  <?php echo _("Create New User");?>

                </header>
                <fieldset>
                  <div class="row">
                    <section class="col col-6">
                      <label class="input"> <i class="icon-append fa fa-user"></i>
                        <input type="text" class="form-control" placeholder="<?php echo _("First Name");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['firstname'])===null||$tmp==='' ? '' : $tmp);?>
" name="firstname"></p>
                      </label>
                    </section>
                    <section class="col col-6">
                      <label class="input"> <i class="icon-append fa fa-user"></i>
                        <input type="text" class="form-control" placeholder="<?php echo _("Last Name");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['lastname'])===null||$tmp==='' ? '' : $tmp);?>
" name="lastname"></p>
                      </label>
                    </section>
                  </div>
                  <div class="row">
                    <section class="col col-6">
                      <label class="input"> <i class="icon-append fa fa-user"></i>
                        <input type="text" class="form-control" placeholder="<?php echo _("Login");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['login'])===null||$tmp==='' ? '' : $tmp);?>
" name="login" id="login"></p>
                      </label>
                    </section>
                    <section class="col col-6">
                      <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                        <input type="text" class="form-control" placeholder="<?php echo _("Email");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
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
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['passwd'])===null||$tmp==='' ? '' : $tmp);?>
" name="passwd" id="passwd"></p>                        </label>
                    </section>
                    <section class="col col-6">
                      <label class="input"> <i class="icon-append fa fa-unlock-alt"></i>
                        <input type="password" class="form-control" placeholder="<?php echo _("Confirm Password");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['confirmpasswd'])===null||$tmp==='' ? '' : $tmp);?>
" name="confirmpasswd" id="confirmpasswd"></p>
                      </label>
                    </section>
                  </div>
                </fieldset>
                <fieldset>
                <div class="row">
                  <section class="col col-6">
                    <label class="select">
                      <select id="role" class="form-control" name="rol">
                        <option value="">--<?php echo _("Rol");?>
--</option>
                          <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id_rol'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['rol'];?>
</option>
                          <?php } ?>
                      </select> <i></i> 
                    </label>
                  </section>
                  <section class="col col-6">
                    <label class="select">
                      <select id="status" class="form-control" name="status">
                        <option value="">--<?php echo _("Status");?>
--</option>
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
                </div>
                <footer>
                  <button type="submit" class="btn btn-primary">
                    <?php echo _("Save");?>

                  </button>
                  <button type="button" class="btn btn-warning" onClick="location.href='/user/';" ><?php echo _("Cancel");?>
</button>
                </footer>
              </form>
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
</div><?php }} ?>