<?php /* Smarty version Smarty-3.1.8, created on 2015-06-26 11:34:54
         compiled from "/var/www/html/obelisksoft/views/rol/editRole.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1117129333558d7f2e730311-55482559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a403b8e0cce09525267081d0fa292dca2047902' => 
    array (
      0 => '/var/www/html/obelisksoft/views/rol/editRole.tpl',
      1 => 1432487353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1117129333558d7f2e730311-55482559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'style' => 0,
    'titulo' => 0,
    'date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_558d7f2e8a7633_09809704',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558d7f2e8a7633_09809704')) {function content_558d7f2e8a7633_09809704($_smarty_tpl) {?><div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">
  <section id="widget-grid" class="">
    <div class="row">
      <article class="col-sm-12 col-md-12 col-lg-6">
        <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-deletebutton="false">
          <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2>Registration <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h2>              
          </header>
          <div>
            <div class="jarviswidget-editbox">
                <!-- This area used as dropdown edit box -->                
            </div>
            <div class="widget-body no-padding">
              <form class="smart-form" novalidate="novalidate" action="" method="post" id="form1">
                <input type="hidden" value="1" name="edit" />  
                <header>
                    <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>

                </header>
                <fieldset>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-gears"></i>
                      <input type="text" class="form-control" placeholder="Role" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['rol'])===null||$tmp==='' ? '' : $tmp);?>
" name="rol">
                      <b class="tooltip tooltip-bottom-right">Needed to enter the website</b>
                    </label>
                  </section>
                  <section>
                    <label class="textarea"> <i class="icon-append fa fa-comment"></i> 
                      <textarea class="form-control" rows="3" name="description"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['description'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                    </label>
                  </section>
                </fieldset>    
                <footer>
                  <button type="submit" class="btn btn-primary">
                    Save
                  </button>
                  <button type="button" class="btn btn-warning" onClick="location.href='/user/';" >Cancel</button>
                </footer>
              </form>
            </div>
          </div>
        </div>
      </article>
    </div>   
  </section>
</div><?php }} ?>