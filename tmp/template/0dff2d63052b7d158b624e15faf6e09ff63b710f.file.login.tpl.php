<?php /* Smarty version Smarty-3.1.8, created on 2015-07-23 17:09:01
         compiled from "/var/www/html/obelisksoft/views/bpm/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120398106855b11fadb17847-76624067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dff2d63052b7d158b624e15faf6e09ff63b710f' => 
    array (
      0 => '/var/www/html/obelisksoft/views/bpm/login.tpl',
      1 => 1437671230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120398106855b11fadb17847-76624067',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55b11fadb55a05_27382874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b11fadb55a05_27382874')) {function content_55b11fadb55a05_27382874($_smarty_tpl) {?><form action="login.php" method="post">
  Client ID<br>
  <input type="text" name="client_id" value="" width=32 /><br>
  Client Secret<br>
  <input type="text" name="client_secret" value="" width=32 /><br>
  Username<br>
  <input type="text" name="username" value="" width=20 /><br>
  Password<br>
  <input type="text" name="password" value="" width=20 /><br>
  <input type="submit" value="Login"/>
</form><?php }} ?>