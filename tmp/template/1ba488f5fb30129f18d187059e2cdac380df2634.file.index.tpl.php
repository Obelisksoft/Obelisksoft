<?php /* Smarty version Smarty-3.1.8, created on 2015-09-22 20:02:32
         compiled from "/var/www/html/obelisksoft/views/user/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11759504585562855e7fafe6-40208573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ba488f5fb30129f18d187059e2cdac380df2634' => 
    array (
      0 => '/var/www/html/obelisksoft/views/user/index.tpl',
      1 => 1442952149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11759504585562855e7fafe6-40208573',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5562855e9c37d2_95713593',
  'variables' => 
  array (
    '_acl' => 0,
    '_layoutParams' => 0,
    'style' => 0,
    'date' => 0,
    'users' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5562855e9c37d2_95713593')) {function content_5562855e9c37d2_95713593($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('new_user')){?>
<div class="row">
  <div class="col-md-4 col-sm-8 col-xs-8">
    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
user/createUser/" class="btn btn-primary btn-sm"><?php echo _("New Users");?>
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
               <h2><?php echo _("Search Users");?>
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
                  <form class="smart-form" action="/user/" method="get">
                    <input type="hidden" value="1" name="search" /> 
                    <header>
                      <?php echo _("Search Users");?>

                    </header>
                    <fieldset>
                      <div class="row">
                        <section class="col col-6">
                          <label class="input"> <i class="icon-append fa fa-user"></i>
                            <input type="text" class="form-control" placeholder="<?php echo _("FIRST NAME");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['firstname'])===null||$tmp==='' ? '' : $tmp);?>
" name="firstname" id="tagsfirst"></p>
                          </label>
                        </section>
                        <section class="col col-6">
                          <label class="input"> <i class="icon-append fa fa-user"></i>
                            <input type="text" class="form-control" placeholder="<?php echo _("LAST NAME");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['lastname'])===null||$tmp==='' ? '' : $tmp);?>
" name="lastname" id="tagslast"></p>
                          </label>
                        </section>
                      </div>

                      <div class="row">
                        <section class="col col-6">
                          <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                            <input type="text" class="form-control" placeholder="<?php echo _("Email");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" name="email" id="email" id="tagsemail"></p>
                          </label>
                        </section>
                        <section class="col col-6">
                          <label class="input"> <i class="icon-append fa fa-calendar"></i>
                            <input type="text" class="form-control" id="datepicker" placeholder="<?php echo _("DATE");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['date'])===null||$tmp==='' ? '' : $tmp);?>
" name="date" id="datepicker"></p>
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
              <h2><?php echo _("Table Users");?>
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
                <?php if (isset($_smarty_tpl->tpl_vars['users']->value)&&count($_smarty_tpl->tpl_vars['users']->value)){?>
                  <table class="table table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th> <i class="fa fa-user"></i> <?php echo _("FIRST NAME");?>
</th>
                        <th> <i class="fa fa-user"></i> <?php echo _("LAST NAME");?>
</th>
                        <th> <i class="fa fa-envelope-o"></i> <?php echo _("EMAIL");?>
</th>
                        <th> <i class="fa fa-calendar"></i> <?php echo _("DATE");?>
</th>
                      </tr>
                    </thead>
                    <?php  $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date']->key => $_smarty_tpl->tpl_vars['date']->value){
$_smarty_tpl->tpl_vars['date']->_loop = true;
?>
                      <tbody>
                        <tr>
                          <td><?php echo $_smarty_tpl->tpl_vars['date']->value['id_user'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['date']->value['firstname'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['date']->value['lastname'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['date']->value['email'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['date']->value['date'];?>
</td>
                          <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('edit_user')){?>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
user/editUser/<?php echo $_smarty_tpl->tpl_vars['date']->value['id_user'];?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/editar–iconos_obelisk.png' title='<?php echo _("Edit");?>
'></a></td>
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('delete_user')){?>
                            <td><a href="#" class="delete" alt="<?php echo $_smarty_tpl->tpl_vars['date']->value['id_user'];?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/eliminar_obelisk.png' title='<?php echo _("Delete");?>
'></a></td>
                          <?php }?>
                        </tr>          
                      </tbody>
                    <?php } ?>
                  </table>
                <?php }else{ ?>
                  <p><strong>Not Users!</strong></p>
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