 <link rel="stylesheet" type="text/css" media="screen" href="{$_layoutParams.ruta_css}bootstrap.min.css">

 <link href="{$_layoutParams.root}public/js/lou-multi-select/css/multi-select.css" rel="stylesheet" type="text/css" />  
 
    <link href="{$_layoutParams.root}public/js/jquery-ui-1.10.4/css/ui-lightness/jquery-ui-1.10.4.css" rel="stylesheet" type="text/css" />

    <script src="{$_layoutParams.root}public/js/jquery-ui-1.10.4/js/jquery-1.10.2.js" type="text/javascript"></script>

    <script src="{$_layoutParams.root}public/js/jquery-ui-1.10.4/js/jquery-ui-1.10.4.js" type="text/javascript"></script>
    <script src="{$_layoutParams.root}public/js/lou-multi-select/js/jquery.multi-select.js" type="text/javascript"></script>
    <script src="{$_layoutParams.root}public/js/jquery.quicksearch.js" type="text/javascript"></script>
   
<form name="form" method="post"> 
<input type='hidden' name='id_retention' value='{$idsubserie}'>
{if isset($typedoc) && count($typedoc)}

<select id="example" name="type[]" multiple="multiple">
{$typedoc}
</select>

</form> 
{/if}