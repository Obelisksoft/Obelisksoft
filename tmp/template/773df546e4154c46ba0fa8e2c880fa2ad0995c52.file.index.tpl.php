<?php /* Smarty version Smarty-3.1.8, created on 2016-02-04 15:19:46
         compiled from "/var/www/obelisksoft.com/obelisksoft/views/documenttype/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24712242556b3b262045f30-03268715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '773df546e4154c46ba0fa8e2c880fa2ad0995c52' => 
    array (
      0 => '/var/www/obelisksoft.com/obelisksoft/views/documenttype/index.tpl',
      1 => 1449006002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24712242556b3b262045f30-03268715',
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
    'typedoc' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b3b2621488f9_44462124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b3b2621488f9_44462124')) {function content_56b3b2621488f9_44462124($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('new_document')){?>
<div class="row">
  <div class="col-md-4 col-sm-8 col-xs-8">
    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
documenttype/createTypeDoc/" class="btn btn-primary btn-sm"><?php echo _("New Document Type");?>
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
              <form class="smart-form" method="get" action="/documenttype/">
                <input type="hidden" value="1" name="search" /> 
                <header>
                  <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>

                </header>
                <fieldset>
                  <div class="row">
                    <section class="col col-6">
                      <label class="input"> <i class="icon-append fa fa-file"></i>
                        <input type="text" class="form-control" id="tags" placeholder="<?php echo _("Document Type");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['typedoc'])===null||$tmp==='' ? '' : $tmp);?>
" name="typedoc"></p>
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
              <h2><?php echo _("Table Document Types");?>
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
                <?php if (isset($_smarty_tpl->tpl_vars['typedoc']->value)&&count($_smarty_tpl->tpl_vars['typedoc']->value)){?>
                  <table class="table table-hover table-striped tablesorter" >
                    <thead>
                      <tr>
                        <th>#</th>
                        <th> <i class="fa fa-file"></i> <?php echo _("DOCUMENT TYPE:");?>
 </th>
                        <th> <i class="fa fa-comment-o"></i> <?php echo _("DESCRIPTION");?>
</th>
                        <th> <i class="fa fa-calendar"></i> <?php echo _("DATE");?>
</th>
                      </tr>
                    </thead>
                    <?php  $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['typedoc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date']->key => $_smarty_tpl->tpl_vars['date']->value){
$_smarty_tpl->tpl_vars['date']->_loop = true;
?>
                      <tbody>
                        <tr>
                          <td><?php echo $_smarty_tpl->tpl_vars['date']->value['id_typedoc'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['date']->value['documenttype'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['date']->value['description'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['date']->value['date'];?>
</td>
                            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('edit_document')){?>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
documenttype/editDocType/<?php echo $_smarty_tpl->tpl_vars['date']->value['id_typedoc'];?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/editar–iconos_obelisk.png' title='<?php echo _("Edit");?>
'></a></td>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('delete_document')){?>
                            <td><a href="#" class="delete" alt="<?php echo $_smarty_tpl->tpl_vars['date']->value['id_typedoc'];?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/eliminar_obelisk.png' title='<?php echo _("Delete");?>
'></a></td>
                            <?php }?>
                          </tr>          
                        </tr>          
                      </tbody>
                    <?php } ?>
                  </table>
                <?php }else{ ?>
                  <p><strong>Not Document!</strong></p>
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