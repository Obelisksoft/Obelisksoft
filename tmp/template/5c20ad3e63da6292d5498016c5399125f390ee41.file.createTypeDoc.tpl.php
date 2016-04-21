<?php /* Smarty version Smarty-3.1.8, created on 2016-02-04 15:19:59
         compiled from "/var/www/obelisksoft.com/obelisksoft/views/documenttype/createTypeDoc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167910633556b3b26f162fa9-28634280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c20ad3e63da6292d5498016c5399125f390ee41' => 
    array (
      0 => '/var/www/obelisksoft.com/obelisksoft/views/documenttype/createTypeDoc.tpl',
      1 => 1449006002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167910633556b3b26f162fa9-28634280',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'style' => 0,
    'titulo' => 0,
    '_layoutParams' => 0,
    'date' => 0,
    'status' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b3b26f1c9500_21413611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b3b26f1c9500_21413611')) {function content_56b3b26f1c9500_21413611($_smarty_tpl) {?><div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
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
              <form class="smart-form" novalidate="novalidate" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
documenttype/createTypeDoc/" method="post" id="form1">
                <input type="hidden" value="1" name="save" />  
                <header>
                    <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>

                </header>
                <fieldset>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-file"></i>
                      <input type="text" class="form-control" placeholder="<?php echo _("Document Type");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['doctype'])===null||$tmp==='' ? '' : $tmp);?>
" name="doctype">
                      <b class="tooltip tooltip-bottom-right"><?php echo _("Needed to enter the website");?>
</b>
                    </label>
                  </section>
                  <section>
                    <label class="textarea"> <i class="icon-append fa fa-comment"></i> 
                      <textarea class="form-control" rows="3" name="<?php echo _("description");?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['descripcion'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                    </label>
                  </section>
                  <section>
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
                      </select>
                  </section>
                </fieldset>    
                <footer>
                  <button type="submit" class="btn btn-primary">
                    <?php echo _("Save");?>

                  </button>
                  <button type="button" class="btn btn-warning" onClick="location.href='/documenttype/';" ><?php echo _("Cancel");?>
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