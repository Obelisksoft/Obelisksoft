<link href="{$_layoutParams.root}public/css/style.css" rel="stylesheet" type="text/css" />
<h2>{if isset($mensaje)} {$mensaje}{/if}</h2>


<p>&nbsp;</p>


<a href="javascript:history.back(1)">Volver a la p&aacute;gina anterior</a>

{if (!Session::get('autenticado'))}

| <a href="{$_layoutParams.root}index/login">Iniciar Sesi&oacute;n</a>

{/if}