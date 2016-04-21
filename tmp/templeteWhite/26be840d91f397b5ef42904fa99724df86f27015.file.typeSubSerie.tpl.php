<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 17:57:48
         compiled from "/var/www/html/obelisksoft/views/documenttype/typeSubSerie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:896181592556b2fb4271c25-34987491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26be840d91f397b5ef42904fa99724df86f27015' => 
    array (
      0 => '/var/www/html/obelisksoft/views/documenttype/typeSubSerie.tpl',
      1 => 1442253461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '896181592556b2fb4271c25-34987491',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_556b2fb4424780_22331967',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'idsubserie' => 0,
    'typedoc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556b2fb4424780_22331967')) {function content_556b2fb4424780_22331967($_smarty_tpl) {?> <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
bootstrap.min.css">

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
<input type='hidden' name='id_retention' value='<?php echo $_smarty_tpl->tpl_vars['idsubserie']->value;?>
'>
<?php if (isset($_smarty_tpl->tpl_vars['typedoc']->value)&&count($_smarty_tpl->tpl_vars['typedoc']->value)){?>

<select id="example" name="type[]" multiple="multiple">
<?php echo $_smarty_tpl->tpl_vars['typedoc']->value;?>

</select>

</form> 
<?php }?><?php }} ?>