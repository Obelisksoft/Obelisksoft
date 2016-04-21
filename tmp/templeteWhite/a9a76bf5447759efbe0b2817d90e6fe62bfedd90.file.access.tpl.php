<?php /* Smarty version Smarty-3.1.8, created on 2015-12-03 14:51:45
         compiled from "/var/www/obelisksoft.com/obelisksoft/views/error/access.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128351833956609d51bbb303-98258289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9a76bf5447759efbe0b2817d90e6fe62bfedd90' => 
    array (
      0 => '/var/www/obelisksoft.com/obelisksoft/views/error/access.tpl',
      1 => 1449006002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128351833956609d51bbb303-98258289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56609d51c3a431_67663703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56609d51c3a431_67663703')) {function content_56609d51c3a431_67663703($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/style.css" rel="stylesheet" type="text/css" />
<h2><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?> <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
<?php }?></h2>


<p>&nbsp;</p>


<a href="javascript:history.back(1)">Volver a la p&aacute;gina anterior</a>

<?php if ((!Session::get('autenticado'))){?>

| <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
index/login">Iniciar Sesi&oacute;n</a>

<?php }?><?php }} ?>