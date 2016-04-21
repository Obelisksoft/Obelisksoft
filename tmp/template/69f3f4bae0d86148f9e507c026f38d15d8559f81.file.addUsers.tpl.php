<?php /* Smarty version Smarty-3.1.8, created on 2015-07-05 21:55:58
         compiled from "/var/www/html/obelisksoft/views/group/addUsers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15833371195593f4650290e9-99449056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69f3f4bae0d86148f9e507c026f38d15d8559f81' => 
    array (
      0 => '/var/www/html/obelisksoft/views/group/addUsers.tpl',
      1 => 1436133083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15833371195593f4650290e9-99449056',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5593f465286a88_25968154',
  'variables' => 
  array (
    'titulo' => 0,
    'group' => 0,
    '_layoutParams' => 0,
    'style' => 0,
    'idgroup' => 0,
    'groups' => 0,
    'actUser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5593f465286a88_25968154')) {function content_5593f465286a88_25968154($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 <small><?php echo $_smarty_tpl->tpl_vars['group']->value;?>
</small></h1>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/ui.multiselect.js"></script>
<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/ui.multiselect.css" rel="stylesheet" />
<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/jquery-ui.css" rel="stylesheet" />
<link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/style.css" rel="stylesheet" />

<div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">
  <section id="widget-grid" class="">
  <!-- row -->
    <div class="row">
      <article class="col-sm-12 col-md-12 col-lg-6">
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
                <input type="hidden" name="idgroup" value="<?php echo $_smarty_tpl->tpl_vars['idgroup']->value;?>
">
                   <header>
                    <?php echo $_smarty_tpl->tpl_vars['group']->value;?>

                  </header>
                  <fieldset>
                      <div class="row">
                         <section class="col col-12">                         
                            <?php if (isset($_smarty_tpl->tpl_vars['groups']->value)&&count($_smarty_tpl->tpl_vars['groups']->value)){?>
                            <select id="selected" class="selected" multiple="multiple"
                                name="multiple[]">            
                                <?php echo $_smarty_tpl->tpl_vars['groups']->value;?>

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
                    <button type="button" class="btn btn-warning btn-lg" onClick="location.href='/group/';" ><?php echo _("Cancel");?>
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