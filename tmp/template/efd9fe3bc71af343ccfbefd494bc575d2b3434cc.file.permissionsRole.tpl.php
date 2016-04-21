<?php /* Smarty version Smarty-3.1.8, created on 2015-07-05 21:28:07
         compiled from "/var/www/html/obelisksoft/views/acl/permissionsRole.tpl" */ ?>
<?php /*%%SmartyHeaderCode:370183734558d80c476c4e4-65413804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efd9fe3bc71af343ccfbefd494bc575d2b3434cc' => 
    array (
      0 => '/var/www/html/obelisksoft/views/acl/permissionsRole.tpl',
      1 => 1436131685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '370183734558d80c476c4e4-65413804',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_558d80c48fd2b1_20964700',
  'variables' => 
  array (
    'style' => 0,
    'titulo' => 0,
    'role' => 0,
    'permisos' => 0,
    'pr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558d80c48fd2b1_20964700')) {function content_558d80c48fd2b1_20964700($_smarty_tpl) {?><div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">    
  <section id="widget-grid" class="">
  <!-- row -->
    <div class="row">
      <article class="col-sm-8 col-md-8 col-lg-8">
        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget" id="wid-id-2" data-widget-editbutton="false" data-widget-deletebutton="false">
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
            <span class="widget-icon"> <i class="fa fa-key"></i> </span>
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
              <form class="smart-form" name="form1" method="post" action="">
                <input type="hidden" value="1" name="save" /> 
                <header>
                  <h1><?php echo $_smarty_tpl->tpl_vars['role']->value['rol'];?>
</h1>
                </header>
                <fieldset>
                  <?php if (isset($_smarty_tpl->tpl_vars['permisos']->value)&&count($_smarty_tpl->tpl_vars['permisos']->value)){?>
                        <table class="table table-hover table-striped tablesorter" >
                            <thead>
                              <tr>
                                <th> <i class="fa fa-key"></i> <?php echo _("PERMISSION");?>
</th>
                                <th> <i class="fa fa-unlock"></i> <?php echo _("ENABLED");?>
</th>
                                <th> <i class="fa fa-lock"></i> <?php echo _("DENIED");?>
</th>
                                <th> <i class="fa"></i> <?php echo _("IGNORE");?>
</th>
                              </tr>
                            </thead>
                            <?php  $_smarty_tpl->tpl_vars['pr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permisos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pr']->key => $_smarty_tpl->tpl_vars['pr']->value){
$_smarty_tpl->tpl_vars['pr']->_loop = true;
?>
                            <tbody>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['pr']->value['nombre'];?>
</td>
                                    <td>
                                        <label class="radio">
                                        <input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
" value="1" <?php if (($_smarty_tpl->tpl_vars['pr']->value['valor']==1)){?>checked="checked"<?php }?>/>
                                        <i></i></label>
                                    </td>
                                    <td>
                                        <label class="radio">
                                        <input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
" value="" 
                                        <?php if (($_smarty_tpl->tpl_vars['pr']->value['valor']=='')){?>checked="checked"<?php }?>/>
                                        <i></i></label>
                                    </td>
                                    <td>
                                        <label class="radio">
                                        <input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
" value="x" <?php if (($_smarty_tpl->tpl_vars['pr']->value['valor']==="x")){?>checked="checked"<?php }?>/>
                                        <i></i></label>
                                    </td>
                                </tr>
                            </tbody>
                            <?php } ?>
                        </table>
                    <?php }?>
                </fieldset>                    
                <footer>
                   <button type="submit" class="btn btn-primary">
                    <?php echo _("Save");?>

                  </button>
                  <button type="button" class="btn btn-warning" onClick="location.href='/rol/';" ><?php echo _("Cancel");?>
</button>
                </footer>
              </form>
            </div>
            <!-- end widget content -->
          </div>
          <!-- end widget div -->
        </div>
        <!-- end widget -->
      </article>
    </div>         
    <!-- Fin Form -->
  <!-- widget grid -->
  
    <!-- row -->
    
      </article>
      <!-- WIDGET END -->
    </div>
    <!-- row -->
  </section>  
</div><?php }} ?>