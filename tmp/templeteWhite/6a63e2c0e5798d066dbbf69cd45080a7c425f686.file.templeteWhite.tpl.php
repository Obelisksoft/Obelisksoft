<?php /* Smarty version Smarty-3.1.8, created on 2015-08-11 02:46:31
         compiled from "/var/www/html/obelisksoft/views/layout/templete4/templeteWhite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128320979155c962076ecb52-32353604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a63e2c0e5798d066dbbf69cd45080a7c425f686' => 
    array (
      0 => '/var/www/html/obelisksoft/views/layout/templete4/templeteWhite.tpl',
      1 => 1439260101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128320979155c962076ecb52-32353604',
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
  'unifunc' => 'content_55c962077b5c68_90869308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c962077b5c68_90869308')) {function content_55c962077b5c68_90869308($_smarty_tpl) {?><!DOCTYPE html>
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