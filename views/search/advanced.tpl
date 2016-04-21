<link href="{$_layoutParams.root}public/css/immybox.css" rel="stylesheet" type="text/css" />
<link href="{$_layoutParams.root}public/css/style3.css" rel="stylesheet" type="text/css" />
 <script src="{$_layoutParams.root}public/js/jquery.js" type="text/javascript"></script>
<script src="{$_layoutParams.root}public/js/jquery.immybox.min.js" type="text/javascript"></script>

<h1>{$titulo}</h1>
<ol class="breadcrumb">
              <li><a href="/index/index/"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active"><a href="/search/search/"><i class="fa fa-edit"></i> Search</a></li>
              <li><i class="fa fa-edit"></i><diV class="serieT"></div></li>
  </ol>  
<lu>
  <ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#">TRD</a></li>
  <li><a href="#">TVD</a></li>
</ul>

<br>
<form>
    Serie
    <select id="serie">
        <option value=""> -seleccione- </option>
        {foreach from=$serie item=s}
            
            <option value="{$s.id_retention}">{$s.retention}</option>
            
        {/foreach}
    </select>
    
    <p> </p>
    
    SubSerie 
    <select id="subserie"></select>

    <br>
    <br>
    Document Type:
    <select id="typedocment"></select>
</form>

  