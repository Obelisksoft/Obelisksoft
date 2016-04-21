<?php /* Smarty version Smarty-3.1.8, created on 2015-08-11 02:27:23
         compiled from "/var/www/html/obelisksoft/views/layout/templete3/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76736126355c95d8bb637d2-76733009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dc9a4b1d41111b158c62e508e04e24c2b159f6b' => 
    array (
      0 => '/var/www/html/obelisksoft/views/layout/templete3/template.tpl',
      1 => 1439259736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76736126355c95d8bb637d2-76733009',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'date' => 0,
    'login' => 0,
    'it' => 0,
    '_item_style' => 0,
    '_acl' => 0,
    'miga' => 0,
    '_error' => 0,
    '_mensaje' => 0,
    '_contenido' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55c95d8c478bd6_30995882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c95d8c478bd6_30995882')) {function content_55c95d8c478bd6_30995882($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin titulo" : $tmp);?>
</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
font-awesome.min.css">

    <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
smartadmin-production.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
smartadmin-skins.min.css">

    <!-- SmartAdmin RTL Support is under construction-->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
smartadmin-rtl.min.css">

    <!-- We recommend you use "your_style.css" to override SmartAdmin
         specific styles this will also ensure you retrain your customization with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="<<?php ?>?php /*echo ASSETS_URL;*/ ?<?php ?>>/css/your_style.css"> -->

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
demo.min.css">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
favicon/favicon.ico" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">-->

    <!-- Specifying a Webpage Icon for Web Clip
       Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
    <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
splash/sptouch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
splash/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
splash/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
splash/touch-icon-ipad-retina.png">

    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Startup image for web apps -->
    <link rel="apple-touch-startup-image" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
    <link rel="apple-touch-startup-image" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
splash/iphone.png" media="screen and (max-device-width: 320px)">
  </head>
  <body class="smart-style-3">
        <!-- HEADER -->
        <header id="header">
          <div id="logo-group">

            <!-- PLACE YOUR LOGO HERE -->
            <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['logo'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['logo'])){?>
                <?php  $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['logo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date']->key => $_smarty_tpl->tpl_vars['date']->value){
$_smarty_tpl->tpl_vars['date']->_loop = true;
?>
            <span id="logo"> <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/logos/<?php echo $_smarty_tpl->tpl_vars['date']->value['NAMELOGO'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['date']->value['NAMELOGO'];?>
"> </span>
            <?php } ?>
            <?php }?>
            <!-- END LOGO PLACEHOLDER -->

            <!-- Note: The activity badge color changes when clicked and resets the number to 0
            Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
            <!--<span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge"> 21 </b> </span>-->

            <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
            <div class="ajax-dropdown">

              <!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
              <div class="btn-group btn-group-justified" data-toggle="buttons">
                <label class="btn btn-default">
                  <input type="radio" name="activity" id="<<?php ?>?php echo APP_URL; ?<?php ?>>/ajax/notify/mail.php">
                  Msgs (14) </label>
                <label class="btn btn-default">
                  <input type="radio" name="activity" id="<<?php ?>?php echo APP_URL; ?<?php ?>>/ajax/notify/notifications.php">
                  notify (3) </label>
                <label class="btn btn-default">
                  <input type="radio" name="activity" id="<<?php ?>?php echo APP_URL; ?<?php ?>>/ajax/notify/tasks.php">
                  Tasks (4) </label>
              </div>

              <!-- notification content -->
              <div class="ajax-notifications custom-scroll">

                <div class="alert alert-transparent">
                  <h4>Click a button to show messages here</h4>
                  This blank page message helps protect your privacy, or you can show the first message here automatically.
                </div>

                <i class="fa fa-lock fa-4x fa-border"></i>

              </div>
              <!-- end notification content -->

              <!-- footer: refresh area -->
              <span> Last updated on: 12/12/2013 9:43AM
                <button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
                  <i class="fa fa-refresh"></i>
                </button> </span>
              <!-- end footer -->

            </div>
            <!-- END AJAX-DROPDOWN -->
          </div>

          <!-- projects dropdown -->
          <!--<div class="project-context hidden-xs">

            <span class="label">Projects:</span>
            <span id="project-selector" class="popover-trigger-element dropdown-toggle" data-toggle="dropdown">Recent projects <i class="fa fa-angle-down"></i></span>

            <!-- Suggestion: populate this list with fetch and push technique -->
           <!-- <ul class="dropdown-menu">
              <li>
                <a href="javascript:void(0);">Online e-merchant management system - attaching integration with the iOS</a>
              </li>
              <li>
                <a href="javascript:void(0);">Notes on pipeline upgradee</a>
              </li>
              <li>
                <a href="javascript:void(0);">Assesment Report for merchant account</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="javascript:void(0);"><i class="fa fa-power-off"></i> Clear</a>
              </li>
            </ul>
            <!-- end dropdown-menu-->

          </div>
          <!-- end projects dropdown -->

          <!-- pulled right: nav area -->
          <div class="pull-right">

            <!-- collapse menu button -->
            <div id="hide-menu" class="btn-header pull-right">
              <span> <a href="javascript:void(0);" title="Collapse Menu" data-action="toggleMenu"><i class="fa fa-reorder"></i></a> </span>
            </div>
            <!-- end collapse menu -->

            <!-- #MOBILE -->
            <!-- Top menu profile link : this shows only when top menu is active -->
            <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
              <li class="">
                <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['login'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['login'])){?>
                <?php  $_smarty_tpl->tpl_vars['login'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['login']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['login']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['login']->key => $_smarty_tpl->tpl_vars['login']->value){
$_smarty_tpl->tpl_vars['login']->_loop = true;
?>
                  <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown"> 
                  <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
avatars/sunny.png" alt="" class="online" />
                </a>
              <?php } ?>
              <?php }?>
               
                <ul class="dropdown-menu pull-right">
                  <li>
                    <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="#ajax/profile.php" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="login.php" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
                  </li>
                  
                </ul>
              </li>
            </ul>

            <!-- logout button -->
            <div id="logout" class="btn-header transparent pull-right">
              <span> <a href="/index/logout/" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
            </div>
            <!-- end logout button -->

            <!-- search mobile button (this is hidden till mobile view port) -->
            <div id="search-mobile" class="btn-header transparent pull-right">
              <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
            </div>
            <!-- end search mobile button -->

            <!-- input: search field -->
            <form action="#ajax/search.php" class="header-search pull-right">
              <input type="text" name="param" placeholder="Find reports and more" id="search-fld">
              <button type="submit">
                <i class="fa fa-search"></i>
              </button>
              <a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
            </form>
            <!-- end input: search field -->

            <!-- fullscreen button -->
            <div id="fullscreen" class="btn-header transparent pull-right">
              <span> <a href="javascript:void(0);" title="Full Screen" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i></a> </span>
            </div>
            <!-- end fullscreen button -->

            <!-- #Voice Command: Start Speech -->
            <div id="speech-btn" class="btn-header transparent pull-right hidden-sm hidden-xs">
              <div> 
                <a href="javascript:void(0)" title="Voice Command" data-action="voiceCommand"><i class="fa fa-microphone"></i></a> 
                <div class="popover bottom"><div class="arrow"></div>
                  <div class="popover-content">
                    <h4 class="vc-title">Voice command activated <br><small>Please speak clearly into the mic</small></h4>
                    <h4 class="vc-title-error text-center">
                      <i class="fa fa-microphone-slash"></i> Voice command failed
                      <br><small class="txt-color-red">Must <strong>"Allow"</strong> Microphone</small>
                      <br><small class="txt-color-red">Must have <strong>Internet Connection</strong></small>
                    </h4>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="commands.help()">See Commands</a> 
                    <a href="javascript:void(0);" class="btn bg-color-purple txt-color-white" onclick="$('#speech-btn .popover').fadeOut(50);">Close Popup</a> 
                  </div>
                </div>
              </div>
            </div>
            <!-- end voice command -->

            <!-- multiple lang dropdown : find all flags in the flags page -->
                      
            <ul class="header-dropdown-list hidden-xs">
              <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                  <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
blank.gif" class="flag flag-es" alt="Español"> <span> Español </span> <i class="fa fa-angle-down"></i> </a>
                <ul class="dropdown-menu pull-right">
                  <li class="active">
                    <a href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
blank.gif" class="flag flag-es" alt="Spanish"> Español</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
blank.gif" class="flag flag-us" alt="United States"> English (US)</a>
                  </li>
                  <!--<li>
                    <a href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
blank.gif" class="flag flag-fr" alt="France"> Français</a>
                  </li>-->
                  
                  <!--<li>
                    <a href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
blank.gif" class="flag flag-de" alt="German"> Deutsch</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
blank.gif" class="flag flag-jp" alt="Japan"> 日本語</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
blank.gif" class="flag flag-cn" alt="China"> 中文</a>
                  </li> 
                  <li>
                    <a href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
blank.gif" class="flag flag-it" alt="Italy"> Italiano</a>
                  </li> 
                  <li>
                    <a href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
blank.gif" class="flag flag-pt" alt="Portugal"> Portugal</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
blank.gif" class="flag flag-ru" alt="Russia"> Русский язык</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
blank.gif" class="flag flag-kp" alt="Korea"> 한국어</a>
                  </li>   -->        
                </ul>
              </li>
            </ul>
            
            <!-- end multiple lang -->

          </div>
          <!-- end pulled right: nav area -->

        </header>
        <!-- END HEADER -->

            <!-- Left panel : Navigation area -->
    <!-- Note: This width of the aside area can be adjusted through LESS variables -->
    <aside id="left-panel">

      <!-- User info -->
      <div class="login-info">
        <span> <!-- User image size is adjusted inside CSS, it should stay as is -->

          <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
            <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['login'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['login'])){?>
                <?php  $_smarty_tpl->tpl_vars['login'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['login']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['login']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['login']->key => $_smarty_tpl->tpl_vars['login']->value){
$_smarty_tpl->tpl_vars['login']->_loop = true;
?>
                  <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
avatars/sunny.png" alt="me" class="online" />
            <span>
             <?php echo $_smarty_tpl->tpl_vars['login']->value;?>

            </span>
              <?php } ?>
              <?php }?>
            
            <i class="fa fa-angle-down"></i>
          </a>

        </span>
      </div>
      <!-- end user info -->

      <!-- NAVIGATION : This navigation is also responsive

      To make this navigation dynamic please make sure to link the node
      (the reference to the nav > ul) after page load. Or the navigation
      will not initialize.
      -->
      <nav>
        <!-- NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional hre="" links. See documentation for details.
        -->
        <ul>
          <!--NAVEGATION-->
              <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['menu'])){?>
              <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                            
                <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item'])&&$_smarty_tpl->tpl_vars['_layoutParams']->value['item']==$_smarty_tpl->tpl_vars['it']->value['id']){?>
                                
                  <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('', null, 0);?>
                                
                <?php }else{ ?>
                            
                  <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('active', null, 0);?>
                                
                <?php }?>
                <li class="<?php echo $_smarty_tpl->tpl_vars['_item_style']->value;?>
">
                <a href="<?php echo $_smarty_tpl->tpl_vars['it']->value['enlace'];?>
" title="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>
<?php $_tmp1=ob_get_clean();?><?php echo gettext($_tmp1);?>
"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>
<?php $_tmp2=ob_get_clean();?><?php echo gettext($_tmp2);?>
</span></a>
              </li>
                <?php } ?>
            <?php }?>
			<!-- Fin menu -->
			
			<!-- Menu Search -->
			 <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['search'])){?>
              <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                            
                <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item'])&&$_smarty_tpl->tpl_vars['_layoutParams']->value['item']==$_smarty_tpl->tpl_vars['it']->value['id']){?>
                                
                  <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('', null, 0);?>
                                
                <?php }else{ ?>
                            
                  <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('active', null, 0);?>
                                
                <?php }?>
                <li class="<?php echo $_smarty_tpl->tpl_vars['_item_style']->value;?>
">
                <a href="<?php echo $_smarty_tpl->tpl_vars['it']->value['enlace'];?>
" title="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>
<?php $_tmp3=ob_get_clean();?><?php echo gettext($_tmp3);?>
"><i class="fa fa-lg fa-fw fa fa-search"></i> <span class="menu-item-parent"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>
<?php $_tmp4=ob_get_clean();?><?php echo gettext($_tmp4);?>
</span></a>
              </li>
                <?php } ?>
            <?php }?>
			<!-- Fin Menu Search -->
			
            
            <!------------------------------ Menu Configuration -------------------------------->
            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('view_menu_admin')){?>
            <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['menuConf'])){?>
              <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['menuConf']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>                            
                <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item'])&&$_smarty_tpl->tpl_vars['_layoutParams']->value['item']==$_smarty_tpl->tpl_vars['it']->value['id']){?>                                
                  <?php $_smarty_tpl->tpl_vars["_dropdown"] = new Smarty_variable('dropdown open', null, 0);?>
                  <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('active', null, 0);?>                                
                <?php }else{ ?>                            
                  <?php $_smarty_tpl->tpl_vars["_dropdown"] = new Smarty_variable('dropdown', null, 0);?> 
                  <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('', null, 0);?>                               
                <?php }?>
                <li class="<?php echo $_smarty_tpl->tpl_vars['_item_style']->value;?>
">
                <a href="#"><i class="fa fa-lg fa-fw fa-wrench"></i> <span class="menu-item-parent"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>
<?php $_tmp5=ob_get_clean();?><?php echo gettext($_tmp5);?>
</span></a>        
              <?php } ?>
            <?php }?>             
               <ul>
                <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['itemConf'])){?>
                  <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['itemConf']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>                            
                    <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item'])&&$_smarty_tpl->tpl_vars['_layoutParams']->value['item']==$_smarty_tpl->tpl_vars['it']->value['id']){?>                              
                     <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('active', null, 0);?>                                
                <?php }else{ ?>                            
                  <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('', null, 0);?>                        
                    <?php }?>
                    <li class="<?php echo $_smarty_tpl->tpl_vars['_item_style']->value;?>
">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['it']->value['enlace'];?>
"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>
<?php $_tmp6=ob_get_clean();?><?php echo gettext($_tmp6);?>
</a>
                    </li>                  
                  <?php } ?>
                <?php }?>
              </ul>
              <?php }?>
          <!-- Configuration -->

           <!-- Menu Users -->
          <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('view_menu_user')){?>
                <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['menuB'])){?>
              <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['menuB']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>                            
                <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item'])&&$_smarty_tpl->tpl_vars['_layoutParams']->value['item']==$_smarty_tpl->tpl_vars['it']->value['id']){?>                                
                  <?php $_smarty_tpl->tpl_vars["_dropdown"] = new Smarty_variable('dropdown open', null, 0);?> 
                  <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('active', null, 0);?>                                
                <?php }else{ ?>                            
                  <?php $_smarty_tpl->tpl_vars["_dropdown"] = new Smarty_variable('dropdown', null, 0);?> 
                  <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('', null, 0);?>                                
                <?php }?>
                <li class="<?php echo $_smarty_tpl->tpl_vars['_item_style']->value;?>
">
                  <a href="#"><i class="fa fa-lg fa-fw fa-user"></i> <span class="menu-item-parent"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>
<?php $_tmp7=ob_get_clean();?><?php echo gettext($_tmp7);?>
</span></a>       
              <?php } ?>
            <?php }?>           
            <ul>
            <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['itemB'])){?>
              <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['itemB']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>                            
                <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item'])&&$_smarty_tpl->tpl_vars['_layoutParams']->value['item']==$_smarty_tpl->tpl_vars['it']->value['id']){?>                              
                  <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('active', null, 0);?>                                
                <?php }else{ ?>                            
                  <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('', null, 0);?>                                
                  <?php }?>
                    <li class="<?php echo $_smarty_tpl->tpl_vars['_item_style']->value;?>
">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['it']->value['enlace'];?>
"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>
<?php $_tmp8=ob_get_clean();?><?php echo gettext($_tmp8);?>
</a>
                    </li>               
              <?php } ?>
            <?php }?>
            </ul>
            <?php }?>
            <!-- End user -->
          
          <!-- Menu system -->
          <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('view_menu_system')){?>
                <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['menuA'])){?>
              <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['menuA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>                            
                <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item'])&&$_smarty_tpl->tpl_vars['_layoutParams']->value['item']==$_smarty_tpl->tpl_vars['it']->value['id']){?>                                
                  <?php $_smarty_tpl->tpl_vars["_dropdown"] = new Smarty_variable('dropdown open', null, 0);?> 
                  <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('active', null, 0);?>                                
                <?php }else{ ?>                            
                  <?php $_smarty_tpl->tpl_vars["_dropdown"] = new Smarty_variable('dropdown', null, 0);?> 
                  <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('', null, 0);?>                                
                <?php }?>
                <li class="<?php echo $_smarty_tpl->tpl_vars['_item_style']->value;?>
">
                  <a href="#"><i class="fa fa-lg fa-fw fa-gears"></i> <span class="menu-item-parent"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>
<?php $_tmp9=ob_get_clean();?><?php echo gettext($_tmp9);?>
</span></a>       
              <?php } ?>
            <?php }?>           
            <ul>
            <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['itemA'])){?>
              <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['itemA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>                            
                <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item'])&&$_smarty_tpl->tpl_vars['_layoutParams']->value['item']==$_smarty_tpl->tpl_vars['it']->value['id']){?>                              
                  <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('active', null, 0);?>                                
                <?php }else{ ?>                            
                  <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_variable('', null, 0);?>                                
                  <?php }?>
                    <li class="<?php echo $_smarty_tpl->tpl_vars['_item_style']->value;?>
">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['it']->value['enlace'];?>
"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>
<?php $_tmp10=ob_get_clean();?><?php echo gettext($_tmp10);?>
</a>
                    </li>               
              <?php } ?>
            <?php }?>
            </ul>
            <?php }?>
            <!-- End system -->

            
              
          <!--END NAVEGATION -->
        </ul>

      </nav>
      <span class="minifyme" data-action="minifyMenu"> <i class="fa fa-arrow-circle-left hit"></i> </span>

              </aside>
              <!-- END NAVIGATION -->

              <!-- MAIN PANEL -->
<div id="main" role="main">
              <!-- RIBBON -->
  <div id="ribbon">

    <span class="ribbon-button-alignment"> 
      <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true" data-reset-msg="Would you like to RESET all your saved widgets and clear LocalStorage?"><i class="fa fa-refresh"></i></span> 
    </span>

    <!-- breadcrumb -->
   <ol class="breadcrumb">
      <!-- This is auto generated -->
      <?php echo $_smarty_tpl->tpl_vars['miga']->value;?>

   </ol>
    <!-- end breadcrumb -->

    <!-- You can also add more buttons to the
    ribbon for further usability

    Example below:

    <span class="ribbon-button-alignment pull-right">
    <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
    <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
    <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
    </span> -->

  </div>
  <!-- END RIBBON -->

            <!-- MAIN CONTENT -->
              <div id="content">    
                    <noscript><p>Para el correcto funcionamiento debe tener el soporte de javascript habilitado</p></noscript>
                <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)){?>
                  <div id="error" class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                  </div>
                <?php }?>

                <?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)){?>
                  <div id="mensaje"><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</div>
                <?php }?>

                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    
          </div>
            <!-- END MAIN CONTENT -->
            
      
          <!-- END MAIN PANEL -->
  </div>
</div>
          <!-- PAGE FOOTER -->
<div class="page-footer">
  <div class="row">
    <div class="col-xs-12 col-sm-6">
      <span class="txt-color-white"><?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['configs']['app_company'];?>
 WebApp © 2013-2014</span>
    </div>

    <div class="col-xs-6 col-sm-6 text-right hidden-xs">
      <div class="txt-color-white inline-block">
        <i class="txt-color-blueLight hidden-mobile">Last account activity <i class="fa fa-clock-o"></i> <strong>52 mins ago &nbsp;</strong> </i>
        <div class="btn-group dropup">
          <button class="btn btn-xs dropdown-toggle bg-color-blue txt-color-white" data-toggle="dropdown">
            <i class="fa fa-link"></i> <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right text-left">
            <li>
              <div class="padding-5">
                <p class="txt-color-darken font-sm no-margin">Download Progress</p>
                <div class="progress progress-micro no-margin">
                  <div class="progress-bar progress-bar-success" style="width: 50%;"></div>
                </div>
              </div>
            </li>
            <li class="divider"></li>
            <li>
              <div class="padding-5">
                <p class="txt-color-darken font-sm no-margin">Server Load</p>
                <div class="progress progress-micro no-margin">
                  <div class="progress-bar progress-bar-success" style="width: 20%;"></div>
                </div>
              </div>
            </li>
            <li class="divider"></li>
            <li>
              <div class="padding-5">
                <p class="txt-color-darken font-sm no-margin">Memory Load <span class="text-danger">*critical*</span></p>
                <div class="progress progress-micro no-margin">
                  <div class="progress-bar progress-bar-danger" style="width: 70%;"></div>
                </div>
              </div>
            </li>
            <li class="divider"></li>
            <li>
              <div class="padding-5">
                <button class="btn btn-block btn-default">refresh</button>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END PAGE FOOTER -->
 

        <!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
        Note: These tiles are completely responsive,
        you can add as many as you like
        -->
        <div id="shortcut">
          <ul>
            <li>
              <a href="#ajax/inbox.php" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
            </li>
            <li>
              <a href="#ajax/calendar.php" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
            </li>
            <li>
              <a href="#ajax/gmap-xml.php" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
            </li>
            <li>
              <a href="#ajax/invoice.php" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>
            </li>
            <li>
              <a href="#ajax/gallery.php" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
            </li>
            <li>
              <a href="#ajax/profile.php" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
            </li>
          </ul>
        </div>
        <!-- END SHORTCUT AREA -->
  

        <!-- PAGE RELATED PLUGIN(S) -->
      <!-- <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
plugin/jquery-form/jquery-form.min.js"></script>-->

    <!--================================================== -->

    <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)
    <script data-pace-options='{ "restartOnRequestAfter": true }' src="<<?php ?>?php //echo ASSETS_URL; ?<?php ?>>/js/plugin/pace/pace.min.js"></script>-->

    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
    
    <script>
      if (!window.jQuery) {
        document.write('<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
libs/jquery-2.0.2.min.js"><\/script>');
      }
    </script>

    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script>
      if (!window.jQuery.ui) {
        document.write('<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
libs/jquery-ui-1.10.3.min.js"><\/script>');
      }
    </script>

    <!-- IMPORTANT: APP CONFIG -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
app.config.js"></script>

    <!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
    <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> 

    <!-- BOOTSTRAP JS -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
bootstrap/bootstrap.min.js"></script>

    <!-- CUSTOM NOTIFICATION -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
notification/SmartNotification.min.js"></script>

    <!-- JARVIS WIDGETS -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
smartwidgets/jarvis.widget.min.js"></script>

    <!-- EASY PIE CHARTS -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

    <!-- SPARKLINES -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
plugin/sparkline/jquery.sparkline.min.js"></script>

    <!-- JQUERY VALIDATE -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
plugin/jquery-validate/jquery.validate.min.js"></script>

    <!-- JQUERY MASKED INPUT -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
plugin/masked-input/jquery.maskedinput.min.js"></script>

    <!-- JQUERY SELECT2 INPUT -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
plugin/select2/select2.min.js"></script>

    <!-- JQUERY UI + Bootstrap Slider -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

    <!-- browser msie issue fix -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
plugin/msie-fix/jquery.mb.browser.min.js"></script>

    <!-- FastClick: For mobile devices -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
plugin/fastclick/fastclick.min.js"></script>

    <!-- SlimScroll: For fixed navigation scrolling -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
plugin/slimscroll/jquery.slimscroll.min.js"></script>

    <!--[if IE 8]>

      <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

    <![endif]-->

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

    <!-- Demo purpose only -->
    <<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
demo.min.js"></script>

    <!-- MAIN APP JS FILE -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
app.min.js"></script>

    <!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
    <!-- Voice command : plugin -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
speech/voicecommand.min.js"></script>   

    <!-- Your GOOGLE ANALYTICS CODE Below -->
    <script type="text/javascript">
      var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
        _gaq.push(['_trackPageview']);
      
      (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();

    </script>

  </body>

  </html><?php }} ?>