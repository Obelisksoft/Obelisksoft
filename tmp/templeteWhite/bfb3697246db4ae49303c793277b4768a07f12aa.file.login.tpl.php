<?php /* Smarty version Smarty-3.1.8, created on 2015-07-23 21:16:28
         compiled from "/var/www/html/obelisksoft/views/prueba/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211140993155b14be94fb7c7-99918670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfb3697246db4ae49303c793277b4768a07f12aa' => 
    array (
      0 => '/var/www/html/obelisksoft/views/prueba/login.tpl',
      1 => 1437686178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211140993155b14be94fb7c7-99918670',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55b14be953ae90_65998768',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b14be953ae90_65998768')) {function content_55b14be953ae90_65998768($_smarty_tpl) {?> <form id="bjlLWDFaNmlwNm5qd0tEVTNxT0g0WWpBbzlCam1xamdvQQ______" class="form-signin" onsubmit="return validateForm('[d%27:%270%27}]');" style="margin:0px;" enctype="multipart/form-data" method="post" action="/prueba/login/" name="sysLogin" role="form" accept-charset="UTF-8">

<input id="__notValidateThisFields__" class="notValidateThisFields" type="hidden" value="[ate%27:%27Any%27,%27required%27:%270%27}]" name="__notValidateThisFields__">
<input id="DynaformRequiredFields" type="hidden" value="[7,%27label%27:%27User%27,%27validate%27:%27Any%27,%27required%27:%270%27}]" name="DynaformRequiredFields">
<input id="__DynaformName__" type="hidden" value="sysLogin" name="__DynaformName__">


<input id="form[USR_USERNAME]" class="module_app_input___gray" type="text" pm:decimal_separator="." pmfieldtype="text" onkeypress="" style="" value="" autocomplete="off" maxlength="50" size="30" name="form[USR_USERNAME]" placeholder="Usuario">
<br>
<input id="form[USR_PASSWORD]" class="module_app_input___gray" type="password" pmfieldtype="password" value="" maxlength="32" size="30" autocomplete="off" name="form[USR_PASSWORD]" placeholder="Contraseña">
<br>
<input id="form[USR_PASSWORD_MASK]" class="module_app_input___gray" type="hidden" pmfieldtype="password" value="" maxlength="32" size="30" autocomplete="off" name="form[USR_PASSWORD_MASK]" placeholder="Contraseña">
<br>
<input id="form[USER_ENV]" class="module_app_input___gray" type="text" pm:decimal_separator="." pmfieldtype="text" onkeypress="" style="" value="" autocomplete="off" maxlength="50" size="30" name="form[USER_ENV]" placeholder="Espacio de Trabajo">
<br>
<input type="hidden" name="form[USER_LANG]" value="es" id="form[USER_LANG]">

<input type="submit" value="Login" name="login">
</form> 
<?php }} ?>