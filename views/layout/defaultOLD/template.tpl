<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{$titulo|default:"Sin titulo"}</title>

    <!-- Bootstrap core CSS -->
    <link href="{$_layoutParams.ruta_css}bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="{$_layoutParams.root}public/css/style.css" rel="stylesheet" type="text/css" />

    <!-- Add custom CSS here -->
    <link href="{$_layoutParams.ruta_css}sb-admin.css" rel="stylesheet" type="text/css" />
    <link href="{$_layoutParams.ruta_css}font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="{$_layoutParams.ruta_js}jquery-ui-1.10.4.custom/css/smoothness/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css" />
    <!-- Page Specific CSS -->
    <link href="{$_layoutParams.ruta_css}morris-0.4.3.min.css" rel="stylesheet" type="text/css" />
    <script src="{$_layoutParams.root}public/js/jquery.js" type="text/javascript"></script>
    <script src="{$_layoutParams.root}public/js/jquery.validate.js" type="text/javascript"></script>
    {if isset($_layoutParams.js) && count($_layoutParams.js)}
        {foreach item=js from=$_layoutParams.js}
        
        <script src="{$js}" type="text/javascript"></script>
        
        {/foreach}
        {/if}

  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="logo"><!--<a class="navbar-brand" href="/index">{$_layoutParams.configs.app_name}</a>-->
            <img class='logo' src="{$_layoutParams.root}public/img/logoObeliskfile.png">
          </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->


        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            {if isset($_layoutParams.menu)}
              {foreach item=it from=$_layoutParams.menu}
                            
                {if isset($_layoutParams.item) && $_layoutParams.item == $it.id}
                                
                  {assign var="_item_style" value='active'}
                                
                {else}
                            
                  {assign var="_item_style" value=''}
                                
                {/if}
                <li class="{$_item_style}"><a href="{$it.enlace}"><i class="{$it.class}"></i> {$it.titulo}</a></li>
                {/foreach}
            {/if}
            
            
            
            <!--<li><a href="forms.html"><i class="fa fa-wrench"></i> Configuration</a></li>
            <li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
            <li><a href="bootstrap-elements.html"><i class="fa fa-desktop"></i> Bootstrap Elements</a></li>
            <li><a href="bootstrap-grid.html"><i class="fa fa-wrench"></i> Bootstrap Grid</a></li>
            <li><a href="blank-page.html"><i class="fa fa-file"></i> Blank Page</a></li>
          -->
              <!------------------------------ Menu Acceso ---------------------------->
            
            {if isset($_layoutParams.menuA)}
              {foreach item=it from=$_layoutParams.menuA}                            
                {if isset($_layoutParams.item) && $_layoutParams.item == $it.id}                                
                  {assign var="_dropdown" value='dropdown open'}                                
                {else}                            
                  {assign var="_dropdown" value='dropdown'}                                
                {/if}
                <li class="{$_dropdown}">
                <a href="#" class="fa fa-cog {$it.class}" data-toggle="dropdown"><i class="{$_item_style}"></i> {$it.titulo} <b class="caret"></b></a>                
              {/foreach}
            {/if}           
            <ul class="dropdown-menu">
            {if isset($_layoutParams.itemA)}
              {foreach item=it from=$_layoutParams.itemA}                            
                {if isset($_layoutParams.item) && $_layoutParams.item == $it.id}                              
                  {assign var="_item_style" value='active'}                                
                {else}                            
                  {assign var="_item_style" value=''}                                
                {/if}
                    <li class="{$_item_style}"><a href="{$it.enlace}">{$it.titulo}</a></li>                
                {/foreach}
            {/if}
            </ul>
              <!------------------------------ Fin Menu Acceso ---------------------------->

             <!------------------------------ Menu Configuration -------------------------------->

            {if isset($_layoutParams.menuConf)}
              {foreach item=it from=$_layoutParams.menuConf}                            
                {if isset($_layoutParams.item) && $_layoutParams.item == $it.id}                                
                  {assign var="_dropdown" value='dropdown open'}                                
                {else}                            
                  {assign var="_dropdown" value='dropdown'}                                
                {/if}
                <li class="{$_dropdown}">
                <a href="#" class="fa fa-wrench {$it.class}" data-toggle="dropdown"><i class="{$_item_style}"></i> {$it.titulo} <b class="caret"></b></a>                
              {/foreach}
            {/if}             
               <ul class="dropdown-menu">
                {if isset($_layoutParams.itemConf)}
                  {foreach item=it from=$_layoutParams.itemConf}                            
                    {if isset($_layoutParams.item) && $_layoutParams.item == $it.id}                              
                      {assign var="_item_style" value='active'}                                
                    {else}                            
                      {assign var="_item_style" value=''}                                
                    {/if}
                    <li class="{$_item_style}"><a href="{$it.enlace}">{$it.titulo}</a></li>                
                  {/foreach}
                {/if}
              </ul>

             <!------------------------------ Fin Menu Configuration ---------------------------->
            </li>
          </ul>
          

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i> Search <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/search/searchTrd/">Advanced</a></li>
              </ul>
            </li>
            <li class="dropdown messages-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">7 New Messages</li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li><a href="#">View Inbox <span class="badge">7</span></a></li>
              </ul>
            </li>
            <li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                <li class="divider"></li>
                <li><a href="#">View All</a></li>
              </ul>
            </li>
            <li class="dropdown user-dropdown">
              {if isset($_layoutParams.login) && count($_layoutParams.login)}
                {foreach item=login from=$_layoutParams.login}
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {$login} <b class="caret"></b></a>
              {/foreach}
              {/if}
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="/index/logout/"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">
          <!-- contenido de las paginas-->
          <div id="content">
                    <noscript><p>Para el correcto funcionamiento debe tener el soporte de javascript habilitado</p></noscript>
                {if isset($_error)}
                  <div id="error" class="alert alert-danger">{$_error}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                  </div>
                {/if}

                {if isset($_mensaje)}
                  <div id="mensaje">{$_mensaje}</div>
                {/if}

                {include file=$_contenido}
                    
            </div>
          
          <!-- /contenido de la pagina -->
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    
    <script src="{$_layoutParams.ruta_js}bootstrap.js" type="text/javascript"></script>
    <script src="{$_layoutParams.ruta_js}jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.js" type="text/javascript"></script>
    


    <!-- Page Specific Plugins -->
    

    

  </body>
</html>
