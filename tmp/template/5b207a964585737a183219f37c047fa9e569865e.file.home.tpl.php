<?php /* Smarty version Smarty-3.1.8, created on 2015-07-23 16:58:23
         compiled from "/var/www/html/obelisksoft/views/bpm/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135381270455b11d11c31be9-57609064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b207a964585737a183219f37c047fa9e569865e' => 
    array (
      0 => '/var/www/html/obelisksoft/views/bpm/home.tpl',
      1 => 1437670702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135381270455b11d11c31be9-57609064',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55b11d11d1d176_59921084',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b11d11d1d176_59921084')) {function content_55b11d11d1d176_59921084($_smarty_tpl) {?><html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
<body>
  <div data-role="page">
      <div data-role="header" data-position="fixed">
          <h1>CaseLister app using ProcessMaker REST</h1>
      </div>
 
      <div role="main" class="ui-content">
        <ul data-role="listview" data-inset="true">
            <li data-role="list-divider">Welcome to the PM Client</li>
            <li>
            <a href="/bpm/access/">
              <p><strong>To start using the PM Client, <br/>first login in:</strong></p>
              <img src="http://bpm.obelisksoft.com/images/processmaker.logo.png" width="150" />
            </a>
            </li>
        </ul>
      </div>
 
      <div data-role="footer" data-position="fixed">  
      </div>
  </div>  
</body>
</html><?php }} ?>