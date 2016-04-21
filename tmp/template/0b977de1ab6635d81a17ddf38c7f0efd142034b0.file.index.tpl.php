<?php /* Smarty version Smarty-3.1.8, created on 2015-09-22 20:03:38
         compiled from "/var/www/html/obelisksoft/views/rol/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81550195955627738243359-37216925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b977de1ab6635d81a17ddf38c7f0efd142034b0' => 
    array (
      0 => '/var/www/html/obelisksoft/views/rol/index.tpl',
      1 => 1442952214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81550195955627738243359-37216925',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55627738443a92_08348202',
  'variables' => 
  array (
    '_acl' => 0,
    '_layoutParams' => 0,
    'style' => 0,
    'titulo' => 0,
    'date' => 0,
    'role' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55627738443a92_08348202')) {function content_55627738443a92_08348202($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('new_rol')){?>
<div class="row">
  <div class="col-md-4 col-sm-8 col-xs-8">
    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
rol/createRole/" class="btn btn-primary btn-sm"><?php echo _("New Rol");?>
</a></button>
  
<?php }?>
  <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('new_permission')){?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/newPermission/" class="btn btn-primary btn-sm"><?php echo _("New Permissions");?>
</a></button>
  </div>
</div>
 <?php }?>
 <br>
<div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">    
 <section id="widget-grid" class="">
        <!-- row -->
        <div class="row">
          <article class="col-sm-12 col-md-12 col-lg-12">
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
              <form class="smart-form" action="/rol/" method="get">
                <input type="hidden" value="1" name="search" /> 
                <header>
                  <?php echo _("Search Rol");?>

                </header>
                <fieldset>
                  <div class="row">
                    <section class="col col-6">
                      <label class="input"> <i class="icon-append fa fa-user"></i>
                        <input type="text" class="form-control" id="tags" placeholder="<?php echo _("Role");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['rol'])===null||$tmp==='' ? '' : $tmp);?>
" name="rol"></p>
                      </label>
                    </section>
                  </div>
                </fieldset>                    
                <footer>
                  <button type="submit" class="btn btn-success"><?php echo _("Search");?>
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
    <div class="row">
      <!-- NEW WIDGET START -->
      <article class="col-sm-12 col-md-12 col-lg-12">
        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-deletebutton="false">
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
            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
              <h2><?php echo _("Table Rol");?>
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
              <div class="table-responsive">
                <?php if (isset($_smarty_tpl->tpl_vars['role']->value)&&count($_smarty_tpl->tpl_vars['role']->value)){?>
                  <table class="table table-hover table-striped tablesorter" >
                    <thead>
                      <tr>
                        <th>#</th>
                        <th> <i class="fa fa-gears"></i> <?php echo _("ROL");?>
</th>
                        <th> <i class="fa fa-comment"></i> <?php echo _("DESCRIPTION");?>
</th>
                        <th> <i class="fa fa-calendar"></i> <?php echo _("DATE");?>
</th>
                      </tr>
                    </thead>
                    <?php  $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['role']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date']->key => $_smarty_tpl->tpl_vars['date']->value){
$_smarty_tpl->tpl_vars['date']->_loop = true;
?>
                      <tbody>
                        <tr>
                          <td><?php echo $_smarty_tpl->tpl_vars['date']->value['id_rol'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['date']->value['rol'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['date']->value['description'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['date']->value['date'];?>
</td>
                          <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('edit_rol')){?>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
rol/editRole/<?php echo $_smarty_tpl->tpl_vars['date']->value['id_rol'];?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/editar–iconos_obelisk.png' title='<?php echo _("Edit");?>
'></a></td>
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('delete_rol')){?>
                            <td><a href="#" class="delete" alt="<?php echo $_smarty_tpl->tpl_vars['date']->value['id_rol'];?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/eliminar_obelisk.png' title='<?php echo _("Delete");?>
'></a></td>
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('edit_permission')){?>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permissionsRole/<?php echo $_smarty_tpl->tpl_vars['date']->value['id_rol'];?>
" class="permission"><img src='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/editar–iconos_obelisk.png' title='<?php echo _("Permission");?>
'></a></td>
                          <?php }?>
                        </tr>          
                      </tbody>
                    <?php } ?>
                  </table>
                <?php }else{ ?>
                  <p><strong><?php echo _("Not Rol");?>
!</strong></p>
                  </div>  
                <?php }?>
              </div>
              <footer>
                <?php if (isset($_smarty_tpl->tpl_vars['pagination']->value)){?><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
<?php }?>
              </footer>
            </div>
            <!-- end widget content -->
          </div>
          <!-- end widget div -->
          
        </div>
        <!-- end widget -->
      </article>
      <!-- WIDGET END -->
    </div>
    <!-- row -->
  </section>  
</div>

<div id="dialog" title="Delete">
  <p><?php echo _("delete this record");?>
?</p>
</div>

<?php }} ?>