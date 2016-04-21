<!--<link href="{$_layoutParams.root}public/css/demo.css" rel="stylesheet" />-->
<link href="{$_layoutParams.root}public/css/elastislide.css" rel="stylesheet" />
<link href="{$_layoutParams.root}public/css/styles.css" rel="stylesheet" />
<link href="{$_layoutParams.root}public/js/jquery.menu/jquery.contextMenu.css" rel="stylesheet" type="text/css" />



<h1>{$titulo}</h1>
<ol class="breadcrumb">
              <li><a href="/index/index/"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active"><a href="/search/search/"><i class="fa fa-edit"></i> Search</a></li>
              <li class="active"><a href="/search/searchTrd/"><i class="fa fa-edit"></i>TRD</a></li>
              <li><i class="fa fa-edit"></i>New Document</li> 
              
  </ol>

  <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>

<div class="row">
          <div class="col-lg-4 text-center">
            <div class="panel panel-primary">
            	<div class="panel-heading">
                	<h3 class="panel-title">Panel primary</h3>
              	</div>
              <div class="panel-body">
                <!--contenido serie subserie-->
                <label for="disabledSelect">Serie:</label>
		          <select id="serie" class="form-control">
		            <option value=""> -seleccione- </option>
		            {foreach from=$serie item=s}
		                
		                <option value="{$s.id_retention}">{$s.retention}</option>
		                
		            {/foreach}
		        </select>

		        <label for="disabledSelect">SubSerie:</label>
		        <select id="subserie" class="form-control"></select>

		        <label for="disabledSelect">Document Type:</label>
		        <select id="typedocment" class="form-control"></select>
		        <div class="fields"></div>
              </div>
            </div>            
          </div>

          <div class="col-lg-8 text-center">
          	<div class="panel panel-success">
            	<div class="panel-heading">
                	<h3 class="panel-title">Panel primary</h3>
              	</div>
              <div class="panel-body">
                <!--contenido de las imagenes-->
                	<a href="/document/uploadfile/"><img id="uploadview" title="Upload" src="/public/img/uploadfile.png"></a>		
                	<hr>	
			</div>           
          </div>
        </div>

        <div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="{$_layoutParams.root}public/js/jquery.tmpl.min.js" type="text/javascript"></script>
<script src="{$_layoutParams.root}public/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="{$_layoutParams.root}public/js/jquery.elastislide.js" type="text/javascript"></script>
<script src="{$_layoutParams.root}public/js/gallery.js" type="text/javascript"></script>		
 
