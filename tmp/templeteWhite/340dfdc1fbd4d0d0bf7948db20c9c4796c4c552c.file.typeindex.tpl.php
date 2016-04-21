<?php /* Smarty version Smarty-3.1.8, created on 2016-03-05 15:26:20
         compiled from "/var/www/obelisksoft.com/obelisksoft/views/indexes/typeindex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197516678556db40ec992515-24385475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '340dfdc1fbd4d0d0bf7948db20c9c4796c4c552c' => 
    array (
      0 => '/var/www/obelisksoft.com/obelisksoft/views/indexes/typeindex.tpl',
      1 => 1449006002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197516678556db40ec992515-24385475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'idtypeindex' => 0,
    'typedocindex' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56db40ecaa2a59_82758769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56db40ecaa2a59_82758769')) {function content_56db40ecaa2a59_82758769($_smarty_tpl) {?> <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
bootstrap.min.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.js"></script>
 <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/lou-multi-select/css/multi-select.css" rel="stylesheet" type="text/css" />  
    <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery-ui-1.10.4/css/ui-lightness/jquery-ui-1.10.4.css" rel="stylesheet" type="text/css" />

    <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery-ui-1.10.4/js/jquery-1.10.2.js" type="text/javascript"></script>

    <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery-ui-1.10.4/js/jquery-ui-1.10.4.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/lou-multi-select/js/jquery.multi-select.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.quicksearch.js" type="text/javascript"></script>
   
<form name="form" method="post"> 
<input type='hidden' name='id_typedoc' value='<?php echo $_smarty_tpl->tpl_vars['idtypeindex']->value;?>
'>
<?php if (isset($_smarty_tpl->tpl_vars['typedocindex']->value)&&count($_smarty_tpl->tpl_vars['typedocindex']->value)){?>

<select id="example2" name="type[]" multiple="multiple">
<?php echo $_smarty_tpl->tpl_vars['typedocindex']->value;?>

</select>

</form> 
<?php }?><?php }} ?>