<?php /* Smarty version Smarty-3.1.8, created on 2016-02-04 14:53:38
         compiled from "/var/www/obelisksoft.com/obelisksoft/views/indexes/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49414918056b3ac426ac631-07026617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f32ecc0b891b70ada2923e722daea76647d4695' => 
    array (
      0 => '/var/www/obelisksoft.com/obelisksoft/views/indexes/index.tpl',
      1 => 1449006002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49414918056b3ac426ac631-07026617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    '_acl' => 0,
    'style' => 0,
    'titulo' => 0,
    'date' => 0,
    'indexes' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b3ac4280adb6_65889456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b3ac4280adb6_65889456')) {function content_56b3ac4280adb6_65889456($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.js"></script>
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('new_rol')){?>
<div class="row">
  <div class="col-md-4 col-sm-8 col-xs-8">
    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
indexes/createIndexes/" class="btn btn-primary btn-sm"><?php echo _("New Indexe");?>
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
              <form class="smart-form" method='get' action='/indexes/'>
                <input type="hidden" value="1" name="search" /> 
                <header>
                  <?php echo _("Search");?>

                </header>
                <fieldset>
                  <div class="row">
                    <section class="col col-6">
                      <label class="input"> <i class="icon-append fa fa-italic"></i>
                        <input type="text" class="form-control" id="tags" placeholder="<?php echo _("Index");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['index'])===null||$tmp==='' ? '' : $tmp);?>
" name="index">
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
              <h2><?php echo _("Table Indexes");?>
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
               <?php if (isset($_smarty_tpl->tpl_vars['indexes']->value)&&count($_smarty_tpl->tpl_vars['indexes']->value)){?>
                  <table class="table table-hover table-striped tablesorter" >
                    <thead>
                      <tr>
                        <th>#</th>
                        <th> <i class="fa fa-italic"></i> <?php echo _("INDEX");?>
</th>
                        <th> <i class="fa fa-comment-o"></i> <?php echo _("DESCRIPTION");?>
</th>
                        <th> <i class="fa fa-thumb-tack"></i> <?php echo _("TYPE");?>
</th>
                        <th> <i class="fa fa-smile-o"></i> <?php echo _("STATUS");?>
</th>
                        <th> <i class="fa fa-calendar"></i> <?php echo _("DATE");?>
</th>
                      </tr>
                    </thead>
                    <?php  $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['indexes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date']->key => $_smarty_tpl->tpl_vars['date']->value){
$_smarty_tpl->tpl_vars['date']->_loop = true;
?>
                      <tbody>
                        <tr>
                          <td><?php echo $_smarty_tpl->tpl_vars['date']->value['id_index'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['date']->value['indexes'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['date']->value['description'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['date']->value['type'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['date']->value['status'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['date']->value['date'];?>
</td>
                          <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('edit_index')){?>
                          <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
indexes/editIndexes/<?php echo $_smarty_tpl->tpl_vars['date']->value['id_index'];?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/editar–iconos_obelisk.png' title='<?php echo _("Edit");?>
'></a></td>
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('delete_index')){?>
                          <td><a href="#" class="delete" alt="<?php echo $_smarty_tpl->tpl_vars['date']->value['id_index'];?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/eliminar_obelisk.png' title='<?php echo _("Delete");?>
'></a></td>
                          <?php }?>
                        </tr>          
                      </tbody>
                    <?php } ?>
                  </table>
                <?php }else{ ?>
                  <p><strong><?php echo _("Not Indexs");?>
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
  <p><?php echo _("Delete this record");?>
?</p>
</div>
<?php }} ?>