<?php /* Smarty version Smarty-3.1.8, created on 2016-03-05 15:25:31
         compiled from "/var/www/obelisksoft.com/obelisksoft/views/documenttype/typeSubSerie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98909425556db40bba06260-85401041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06b6679bfcdd3c106766f77eb274ebd1ce538d2c' => 
    array (
      0 => '/var/www/obelisksoft.com/obelisksoft/views/documenttype/typeSubSerie.tpl',
      1 => 1449006002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98909425556db40bba06260-85401041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'idsubserie' => 0,
    'typedoc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56db40bbbefba5_96674325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56db40bbbefba5_96674325')) {function content_56db40bbbefba5_96674325($_smarty_tpl) {?> <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
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