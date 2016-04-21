<?php /* Smarty version Smarty-3.1.8, created on 2015-07-07 15:12:26
         compiled from "/var/www/html/obelisksoft/views/departament/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:859868248559802a601e300-85117734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b9366b4baaa82f36a46c29bdc065db3ddc55fd1' => 
    array (
      0 => '/var/www/html/obelisksoft/views/departament/index.tpl',
      1 => 1436299944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '859868248559802a601e300-85117734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_559802a6074660_63601262',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559802a6074660_63601262')) {function content_559802a6074660_63601262($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jsTree/dist/themes/default/style.min.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
libs/jquery-2.0.2.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jsTree/dist/jstree.min.js"></script>

<div class="">
    <button type="button" class="btn btn-success btn-sm" onclick="demo_create();"><i class="glyphicon glyphicon-asterisk"></i> Create</button>
    <button type="button" class="btn btn-warning btn-sm" onclick="demo_rename();"><i class="glyphicon glyphicon-pencil"></i> Rename</button>
    <button type="button" class="btn btn-danger btn-sm" onclick="demo_delete();"><i class="glyphicon glyphicon-remove"></i> Delete</button>
</div>
<br>
<br>
<div class="row">
<div id="jstree">
    <!-- in this example the tree is populated from inline HTML -->
    <ul>
      <li class="">Departament
       
      </li>
    </ul>
  </div>
</div>

<?php }} ?>