<?php /* Smarty version Smarty-3.1.8, created on 2016-02-04 15:32:17
         compiled from "/var/www/obelisksoft.com/obelisksoft/views/indexes/editIndexes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196838050656b3b4d39474e3-58565624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f6bc24610ea872d39551514d52bc26477d02bd9' => 
    array (
      0 => '/var/www/obelisksoft.com/obelisksoft/views/indexes/editIndexes.tpl',
      1 => 1454617934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196838050656b3b4d39474e3-58565624',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b3b4d39d5f04_15546538',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'style' => 0,
    'titulo' => 0,
    'dates' => 0,
    'types' => 0,
    'type' => 0,
    'p' => 0,
    'stat' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b3b4d39d5f04_15546538')) {function content_56b3b4d39d5f04_15546538($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.js"></script>
<div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">
  <section id="widget-grid" class="">
    <div class="row">
      <article class="col-sm-12 col-md-12 col-lg-6">
        <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-deletebutton="false">
          <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h2>              
          </header>
          <div>
            <div class="jarviswidget-editbox">
                <!-- This area used as dropdown edit box -->                
            </div>
            <div class="widget-body no-padding">
              <form class="smart-form" novalidate="novalidate" role="form" action="" method="post" id="form1">
                <input type="hidden" value="1" name="edit" /> 
                <header>
                    <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>

                </header>
                <fieldset>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-italic"></i>
                      <input type="text" class="form-control" placeholder="Index" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dates']->value['indexes'])===null||$tmp==='' ? '' : $tmp);?>
" name="indexes">
                      <b class="tooltip tooltip-bottom-right">Needed to enter the website</b>
                    </label>
                  </section>
                  <section>
                     <label class="select">
                         <select id="type" class="form-control" name="type">
                          <option value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['types']->value['id_type'])===null||$tmp==='' ? '' : $tmp);?>
"> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['types']->value['type'])===null||$tmp==='' ? '' : $tmp);?>
 </option>
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
                  <section>
                    <label class="textarea"> <i class="icon-append fa fa-comment"></i> 
                      <textarea class="form-control" rows="3" name="description"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['dates']->value['description'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                    </label>
                  </section>
                </fieldset>    
                <footer>
                  <button type="submit" class="btn btn-primary">
                    Edit
                  </button>
                  <button type="button" class="btn btn-warning" onClick="location.href='/indexes/';" >Cancel</button>
                </footer>
              </form>
            </div>
          </div>
        </div>
      </article>
    </div>   
  </section>
</div><?php }} ?>