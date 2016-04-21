<?php /* Smarty version Smarty-3.1.8, created on 2016-01-08 10:15:57
         compiled from "/var/www/obelisksoft.com/obelisksoft/views/departament/userDepartament.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1150853885568fd2ad1d87a8-01338954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93dc07de1291650b261115a601253ebbe1b3668a' => 
    array (
      0 => '/var/www/obelisksoft.com/obelisksoft/views/departament/userDepartament.tpl',
      1 => 1449006002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1150853885568fd2ad1d87a8-01338954',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'style' => 0,
    'titulo' => 0,
    'iddeparuser' => 0,
    'deptouser' => 0,
    'actUser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_568fd2ad46b761_56961712',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568fd2ad46b761_56961712')) {function content_568fd2ad46b761_56961712($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.js"></script>
<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/jquery-ui.css" rel="stylesheet" />
<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/style.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/lou-multi-select/css/multi-select.css" rel="stylesheet" type="text/css" /> 
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/lou-multi-select/js/jquery.multi-select.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.quicksearch.js" type="text/javascript"></script>
   

<div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">
  <section id="widget-grid" class="">
  <!-- row -->
    <div class="row">
      <article class="col-sm-12 col-md-12 col-lg-8">
      <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-deletebutton="false">
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
              <form method="post" id="addusers" action="" class="smart-form" novalidate="novalidate">
                <input type="hidden" name="id_departament" value="<?php echo $_smarty_tpl->tpl_vars['iddeparuser']->value;?>
">
                   <header>
                    
                  </header>
                  <fieldset>
                      <div class="row">
                         <section class="col col-12">                         
                            <?php if (isset($_smarty_tpl->tpl_vars['deptouser']->value)&&count($_smarty_tpl->tpl_vars['deptouser']->value)){?>
                                  <select id="example2" name="user[]" multiple="multiple">
                                      <?php echo $_smarty_tpl->tpl_vars['deptouser']->value;?>

                                  </select>
                          <?php }?> 
                        <input type='hidden' name='action' value='<?php echo $_smarty_tpl->tpl_vars['actUser']->value;?>
'>
                        </section>
                      </div>                  
                  </fieldset>
                  <footer>
                    <button type="submit" class="btn btn-primary btn-lg"><?php echo _("Save");?>
</button>
                    <button type="button" class="btn btn-warning btn-lg" onClick="location.href='/departament/departament/';" ><?php echo _("Cancel");?>
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