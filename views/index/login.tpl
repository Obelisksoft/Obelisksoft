 <link rel="stylesheet" type="text/css" media="screen" href="{$_layoutParams.ruta_css}bootstrap.min.css">
<link href="{$_layoutParams.root}public/css/login.css" rel="stylesheet" type="text/css" />
<script src="{$_layoutParams.root}public/js/jquery.js" type="text/javascript"></script>
<script src="{$_layoutParams.ruta_js}bootstrap.js" type="text/javascript"></script>
<script src="{$_layoutParams.ruta_js}jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.js" type="text/javascript"></script>
<div class="header2">
    
            {if isset($logo) && count($logo)}
               {foreach item=date from=$logo}
            <span id="logo"><img class='logo' src="{$_layoutParams.root}public/img/logos/{$date.NAMELOGO}"> </span>
            {/foreach}
            {/if}
        
        {$mnuUsuario}
        <div class="separator">
        </div>
</div>

 {if isset($_error)}
                  <div id="error" class="alert alert-danger">{$_error}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                  </div>
                {/if}

                {if isset($_mensaje)}
                  <div id="mensaje">{$_mensaje}</div>
                {/if}



<table class="content">
<tr>
        <td align="center">

        <div class="main content clearfix">
                <div class="sing-in">
                        <div class="login">
                                <h2>{"Login"|gettext}</h2>
                                <strong></strong>
                                <form method="post" class="form-horizontal" id="form1" action="/index/login/">
                                        <input type="hidden" value="1" name="enviar" />
                                        <div class="email-div">
                                                <label for="Email"><strong class="email-label">{"User Name"|gettext}</strong></label>
                                                                <input  type="text" spellcheck="false" name="user" id="user" value="{$date.user|default:""}" placeholder="{"User"|gettext}">
                                        </div>
                                        <div class="passwd-div">
                                                <label for="Email"><strong class="passwd-label">{"Password"|gettext}</strong></label>
                                                                <input  type="password" spellcheck="false" name="passwd" id="passwd" value="" placeholder="{"Password"|gettext}">
                                        </div>

                                         <div class="languaje-div">
                                                <label for="select"><strong class="language-label">{_("Language")}</strong>
                                                  <select id="language" class="form-control" name="language">
                                                    <option value="en_ES">Spanish</option>
                                                    <option value="es_EN">English</option> 
                                                  </select> <i></i> 
                                                </label>
                                        </div>
                                        <input id="signIn" class="btn btn-primary btn-large" type="submit" value="{"Login"|gettext}" name="entrar">

                                </form>
                        </div>
                </div>
        </div>
        </td>
</tr>
</table>

<div id="footer">
    <p><a href="http://www.obelisksoft.com" target="_blank">{$_layoutParams.configs.app_company}</a></p>

</div>

