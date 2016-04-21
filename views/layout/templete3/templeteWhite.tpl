<!DOCTYPE html>
<html lang="en">
  <head>  
  </head>

  <body>

    {include file=$_contenido}
    
  </body>
   {if isset($_layoutParams.js) && count($_layoutParams.js)}
        {foreach item=js from=$_layoutParams.js}
        
        <script src="{$js}" type="text/javascript"></script>
        
        {/foreach}
        {/if}


</html>