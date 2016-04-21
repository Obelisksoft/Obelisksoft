<?php /* Smarty version Smarty-3.1.8, created on 2015-12-01 16:56:01
         compiled from "/var/www/obelisksoft.com/obelisksoft/views/layout/templete4/templeteWhite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1520844732565e177115a388-24850636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b90d5b07d533162f226d2d49c64dfa31f59c968' => 
    array (
      0 => '/var/www/obelisksoft.com/obelisksoft/views/layout/templete4/templeteWhite.tpl',
      1 => 1449006003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1520844732565e177115a388-24850636',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_contenido' => 0,
    '_layoutParams' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_565e177126b043_19828422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565e177126b043_19828422')) {function content_565e177126b043_19828422($_smarty_tpl) {?><!DOCTYPE html>
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