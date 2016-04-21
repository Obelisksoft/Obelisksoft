<?php /* Smarty version Smarty-3.1.8, created on 2015-12-01 16:56:01
         compiled from "/var/www/obelisksoft.com/obelisksoft/views/index/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1478774619565e17712700f3-30205132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af3138661faa8ecf054d12328ebe6d00b02b7233' => 
    array (
      0 => '/var/www/obelisksoft.com/obelisksoft/views/index/login.tpl',
      1 => 1449006002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1478774619565e17712700f3-30205132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'logo' => 0,
    'date' => 0,
    'mnuUsuario' => 0,
    '_error' => 0,
    '_mensaje' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_565e17712f1472_86191497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565e17712f1472_86191497')) {function content_565e17712f1472_86191497($_smarty_tpl) {?> <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
bootstrap.min.css">
<link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/login.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
bootstrap.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.js" type="text/javascript"></script>
<div class="header2">
    
            <?php if (isset($_smarty_tpl->tpl_vars['logo']->value)&&count($_smarty_tpl->tpl_vars['logo']->value)){?>
               <?php  $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date']->key => $_smarty_tpl->tpl_vars['date']->value){
$_smarty_tpl->tpl_vars['date']->_loop = true;
?>
            <span id="logo"><img class='logo' src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/logos/<?php echo $_smarty_tpl->tpl_vars['date']->value['NAMELOGO'];?>
"> </span>
            <?php } ?>
            <?php }?>
        
        <?php echo $_smarty_tpl->tpl_vars['mnuUsuario']->value;?>

        <div class="separator">
        </div>
</div>

 <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)){?>
                  <div id="error" class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                  </div>
                <?php }?>

                <?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)){?>
                  <div id="mensaje"><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</div>
                <?php }?>



<table class="content">
<tr>
        <td align="center">

        <div class="main content clearfix">
                <div class="sing-in">
                        <div class="login">
                                <h2><?php echo gettext("Login");?>
</h2>
                                <strong></strong>
                                <form method="post" class="form-horizontal" id="form1" action="/index/login/">
                                        <input type="hidden" value="1" name="enviar" />
                                        <div class="email-div">
                                                <label for="Email"><strong class="email-label"><?php echo gettext("User Name");?>
</strong></label>
                                                                <input  type="text" spellcheck="false" name="user" id="user" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['user'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="<?php echo gettext("User");?>
">
                                        </div>
                                        <div class="passwd-div">
                                                <label for="Email"><strong class="passwd-label"><?php echo gettext("Password");?>
</strong></label>
                                                                <input  type="password" spellcheck="false" name="passwd" id="passwd" value="" placeholder="<?php echo gettext("Password");?>
">
                                        </div>

                                         <div class="languaje-div">
                                                <label for="select"><strong class="language-label"><?php echo _("Language");?>
</strong>
                                                  <select id="language" class="form-control" name="language">
                                                    <option value="en_ES">Spanish</option>
                                                    <option value="es_EN">English</option> 
                                                  </select> <i></i> 
                                                </label>
                                        </div>
                                        <input id="signIn" class="btn btn-primary btn-large" type="submit" value="<?php echo gettext("Login");?>
" name="entrar">

                                </form>
                        </div>
                </div>
        </div>
        </td>
</tr>
</table>

<div id="footer">
    <p><a href="http://www.obelisksoft.com" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['configs']['app_company'];?>
</a></p>

</div>

<?php }} ?>