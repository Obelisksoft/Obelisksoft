<?php /* Smarty version Smarty-3.1.8, created on 2015-05-24 19:23:54
         compiled from "/var/www/html/obelisksoft/views/layout/templete/templeteWhite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4182038875553ef37b6bab3-37582323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc2674137be32cbe85ef3ab0c0ac5dd45103233f' => 
    array (
      0 => '/var/www/html/obelisksoft/views/layout/templete/templeteWhite.tpl',
      1 => 1432487352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4182038875553ef37b6bab3-37582323',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5553ef37bfbf58_94676429',
  'variables' => 
  array (
    '_contenido' => 0,
    '_layoutParams' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5553ef37bfbf58_94676429')) {function content_5553ef37bfbf58_94676429($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>  
  </head>

  <body>

    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
  </body>
   <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])){?>
        <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
        
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
" type="text/javascript"></script>
        
        <?php } ?>
        <?php }?>


</html><?php }} ?>