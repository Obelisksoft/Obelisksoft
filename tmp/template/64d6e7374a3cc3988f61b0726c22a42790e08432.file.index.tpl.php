<?php /* Smarty version Smarty-3.1.8, created on 2016-02-01 18:08:23
         compiled from "/var/www/obelisksoft.com/obelisksoft/views/group/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160554430856afe567706203-49827979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64d6e7374a3cc3988f61b0726c22a42790e08432' => 
    array (
      0 => '/var/www/obelisksoft.com/obelisksoft/views/group/index.tpl',
      1 => 1449006002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160554430856afe567706203-49827979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_acl' => 0,
    '_layoutParams' => 0,
    'style' => 0,
    'titulo' => 0,
    'date' => 0,
    'group' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56afe5679ccc32_30163083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56afe5679ccc32_30163083')) {function content_56afe5679ccc32_30163083($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('new_group')){?>
<div class="row">
  <div class="col-md-4 col-sm-8 col-xs-8">
    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
group/createGroup/" class="btn btn-primary btn-sm"><?php echo _("New Group");?>
</a></button>
  </div>
</div>
<?php }?> 
<br>
<!-- Form of the search -->
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
                <h2><?php echo _("Search");?>
 <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
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
                  <form class="smart-form" action="/group/" method="get">
                    <input type="hidden" value="1" name="search" /> 
                    <header>
                      <?php echo _("Search");?>
 <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>

                    </header>
                    <fieldset>
                      <div class="row">
                        <section class="col col-6">
                          <label class="input"> <i class="icon-append fa  fa-group "></i>
                            <input type="text" class="form-control" id="tags" placeholder="<?php echo _("Group");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['group'])===null||$tmp==='' ? '' : $tmp);?>
" name="group"></p>
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
  <section id="widget-grid" class="">
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
              <h2><?php echo _("Table Group");?>
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
                <?php if (isset($_smarty_tpl->tpl_vars['group']->value)&&count($_smarty_tpl->tpl_vars['group']->value)){?>
                  <table class="table table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th> <i class="fa fa-group "></i> <?php echo _("GROUP");?>
</th>
                        <th> <i class="fa fa-smile-o"></i> <?php echo _("STATUS");?>
</th>
                        <th> <i class="fa fa-calendar"></i> <?php echo _("DATE");?>
</th>
                      </tr>
                    </thead>
                    <?php  $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date']->key => $_smarty_tpl->tpl_vars['date']->value){
$_smarty_tpl->tpl_vars['date']->_loop = true;
?>
                      <tbody>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['date']->value['id_group'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['date']->value['group'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['date']->value['status'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['date']->value['date'];?>
</td>
                            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('edit_group')){?>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
group/editGroup/<?php echo $_smarty_tpl->tpl_vars['date']->value['id_group'];?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/editar–iconos_obelisk.png' title='<?php echo _("Edit");?>
'></a></td>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('edit_group')){?>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
group/addUsers/<?php echo $_smarty_tpl->tpl_vars['date']->value['id_group'];?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/nuevo_usuario.png' title='<?php echo _("Add User");?>
'></a></td>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('delete_group')){?>
                            <td><a href="#" class="delete" alt="<?php echo $_smarty_tpl->tpl_vars['date']->value['id_group'];?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/eliminar_obelisk.png' title='<?php echo _("Delete");?>
'></a></td>
                            <?php }?>
                          </tr>            
                      </tbody>
                    <?php } ?>
                  </table>
                <?php }else{ ?>
                  <p><strong><?php echo _("Not Group");?>
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
  <p><?php echo _("Delete this Record");?>
?</p>
</div>

<?php }} ?>