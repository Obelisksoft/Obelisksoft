 <link rel="stylesheet" type="text/css" media="screen" href="{$_layoutParams.ruta_css}bootstrap.min.css">
<script type="text/javascript" src="{$_layoutParams.root}public/js/jquery.js"></script>
 <link href="{$_layoutParams.root}public/js/lou-multi-select/css/multi-select.css" rel="stylesheet" type="text/css" />  
    <link href="{$_layoutParams.root}public/js/jquery-ui-1.10.4/css/ui-lightness/jquery-ui-1.10.4.css" rel="stylesheet" type="text/css" />

    <script src="{$_layoutParams.root}public/js/jquery-ui-1.10.4/js/jquery-1.10.2.js" type="text/javascript"></script>

    <script src="{$_layoutParams.root}public/js/jquery-ui-1.10.4/js/jquery-ui-1.10.4.js" type="text/javascript"></script>
    <script src="{$_layoutParams.root}public/js/lou-multi-select/js/jquery.multi-select.js" type="text/javascript"></script>
    <script src="{$_layoutParams.root}public/js/jquery.quicksearch.js" type="text/javascript"></script>
   
<form name="form" method="post"> 
<input type='hidden' name='id_typedoc' value='{$idtypeindex}'>
{if isset($typedocindex) && count($typedocindex)}

<select id="example2" name="type[]" multiple="multiple">
{$typedocindex}
</select>

</form> 
{/if}