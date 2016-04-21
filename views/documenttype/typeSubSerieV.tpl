 <link href="{$_layoutParams.root}public/js/jquery.multiselec/css/jquery.multiselect.css" rel="stylesheet" type="text/css" />   
    <link href="{$_layoutParams.root}public/js/jquery.multiselec/css/jquery.multiselect.filter.css" rel="stylesheet" type="text/css" /> 
    <link href="{$_layoutParams.root}public/js/jquery-ui-1.10.4/css/ui-lightness/jquery-ui-1.10.4.css" rel="stylesheet" type="text/css" />

    <script src="{$_layoutParams.root}public/js/jquery-ui-1.10.4/js/jquery-1.10.2.js" type="text/javascript"></script>

    <script src="{$_layoutParams.root}public/js/jquery-ui-1.10.4/js/jquery-ui-1.10.4.js" type="text/javascript"></script>
    <script src="{$_layoutParams.root}public/js/jquery.multiselec/jquery.multiselect.js" type="text/javascript"></script>
    <script src="{$_layoutParams.root}public/js/jquery.multiselec/jquery.multiselect.filter.js" type="text/javascript"></script>  

<form name="form" method="post"> 
<input type='hidden' name='id_valoration' value='{$idsubserie}'>
{if isset($typedoc) && count($typedoc)}

<select id="example" name="type[]" multiple="multiple">
{$typedoc}
</select>

</form> 
{/if}