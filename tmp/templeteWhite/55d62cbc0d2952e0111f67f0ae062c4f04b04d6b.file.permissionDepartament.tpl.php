<?php /* Smarty version Smarty-3.1.8, created on 2015-11-26 19:52:29
         compiled from "/var/www/html/obelisksoft/views/departament/permissionDepartament.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142840404456573f83653601-63059334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55d62cbc0d2952e0111f67f0ae062c4f04b04d6b' => 
    array (
      0 => '/var/www/html/obelisksoft/views/departament/permissionDepartament.tpl',
      1 => 1448566750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142840404456573f83653601-63059334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56573f836abc01_11313017',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'style' => 0,
    'titulo' => 0,
    'iddeparuser' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56573f836abc01_11313017')) {function content_56573f836abc01_11313017($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/treeStyle.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
libs/jquery-2.0.2.min.js"></script>

<div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">
  <section id="widget-grid" class="">
  <!-- row -->
    <div class="row">
      <article class="col-sm-6 col-md-6 col-lg-6">
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
                            <div id="page-wrap">   
               
                                <ul class="treeview">
                                    
                                        <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

                                    
                                </ul>
                            </div>

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
</div>



                                  <?php }} ?>