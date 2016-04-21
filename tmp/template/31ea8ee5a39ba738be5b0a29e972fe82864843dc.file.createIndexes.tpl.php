<?php /* Smarty version Smarty-3.1.8, created on 2015-07-27 19:38:55
         compiled from "/var/www/html/obelisksoft/views/indexes/createIndexes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1419380466556b30b6def2f0-67389961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31ea8ee5a39ba738be5b0a29e972fe82864843dc' => 
    array (
      0 => '/var/www/html/obelisksoft/views/indexes/createIndexes.tpl',
      1 => 1438025759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1419380466556b30b6def2f0-67389961',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_556b30b702c6e6_17968502',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'style' => 0,
    'titulo' => 0,
    'date' => 0,
    'type' => 0,
    'p' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556b30b702c6e6_17968502')) {function content_556b30b702c6e6_17968502($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.js"></script>
<div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
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
              <form class="smart-form" novalidate="novalidate" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
indexes/createIndexes/" method="post" id="form1">
                <input type="hidden" value="1" name="save" />  
                <header>
                    <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>

                </header>
                <fieldset>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-italic"></i>
                      <input type="text" class="form-control" placeholder="<?php echo _("Index");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['indexes'])===null||$tmp==='' ? '' : $tmp);?>
" name="indexes">
                      <b class="tooltip tooltip-bottom-right"><?php echo _("Needed to enter the website");?>
</b>
                    </label>
                  </section>
                  <section>
                     <label class="select">
                         <select id="type" class="form-control" name="type">
                          <option value=""> -<?php echo _("Type");?>
- </option>
                          <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                              
                              <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id_type'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['type'];?>
</option>
                              
                          <?php } ?>
                      </select><i></i>
                    </label>
                  </section>

                  <div id="campos">  
                    <legend>values</legend>
                      <br>
                      <a type="button" class="btn btn-primary btn-sm" id="addIndex">Add</a>
                      <br>
                      <br>
                      <div class="row">
                        <div class="form-group" id="camposindice">
                      
                        </div>
                      </div>
                    <legend></legend>
                    <br>
                  </div>
                    



                  <section>
                     <label class="select">
                         <select id="status" class="form-control" name="status">
                          <option value=""> -<?php echo _("Status");?>
- </option>
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
                  <section>
                    <label class="textarea"> <i class="icon-append fa fa-comment"></i> 
                      <textarea class="form-control" rows="3" name="<?php echo _("description");?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['description'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                    </label>
                  </section>
                </fieldset>    
                <footer>
                  <button type="submit" class="btn btn-primary">
                    <?php echo _("Save");?>

                  </button>
                  <button type="button" class="btn btn-warning" onClick="location.href='/indexes/';" ><?php echo _("Cancel");?>
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