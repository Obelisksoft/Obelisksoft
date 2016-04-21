
<section id="widget-grid" class="">

	<!-- row -->
	<div class="row">
		
		<!-- NEW WIDGET START -->
		<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget" id="wid-id-0">
				<!-- widget options:
					usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
					
					data-widget-colorbutton="false"	
					data-widget-editbutton="false"
					data-widget-togglebutton="false"
					data-widget-deletebutton="false"
					data-widget-fullscreenbutton="false"
					data-widget-custombutton="false"
					data-widget-collapsed="true" 
					data-widget-sortable="false"
					
				-->
				<header>
					<h2><strong>{_("Change")}</strong> <i>Logo</i></h2>				
					
				</header>

				<!-- widget div-->
				<div>
					
					<!-- widget edit box -->
					<div class="jarviswidget-editbox">						
					</div>
					<!-- end widget edit box -->
					
					<!-- widget content -->
					<div class="widget-body">
						<button id="uploads" class="btn btn-success">{_("Upload Logo")}</button>
						<br><hr>

						<div class="superbox col-sm-12">
						{if isset($logos) && count($logos)}
							{foreach item=date from=$logos}
								<div class="superbox-list" alt="{$date.ID_LOGO}">
									<img src="{$_layoutParams.root}public/img/logos/{$date.NAMELOGO}" sizes="76x76" data-img="{$_layoutParams.root}public/img/logos/{$date.NAMELOGO}" alt="{$date.ID_LOGO}" title="{$date.NAMELOGO}" class="superbox-img">
								</div>
							{/foreach}
						{/if}
						<br>
							<!--
						
						<div class="superbox-float"></div>
						<link rel="apple-touch-icon" sizes="76x76" href="{$_layoutParams.ruta_img}splash/touch-icon-ipad.png">
					</div>
					<!-- /SuperBox -->
					
					<div class="superbox-show" style="height:300px; display: none"></div>

						
						
					</div>
					<!-- end widget content -->

					
				</div>
				<!-- end widget div -->
				
			</div>
			<!-- end widget -->
		</article>
		<footer>
                {if isset($pagination)}{$pagination}{/if}
              </footer>
	</div>
</section>

<div id="uploadlo" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{_("Upload Logo")}</h4>
      </div>
	  	<div class="modal-body">
	  		<form action="upload.php" class="dropzone" id="mydropzone"></form>
	  	</div>
      	<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">{_("Close")}</button>
        <button type="submit" class="btn btn-success" data-dismiss="modal" id="uploadLo">{_("Upload")}</button>
      	</div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id="aplicate" class="modal fade">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{_("Use Logo")}</h4>
      </div>
	  	<div class="modal-body">
	  		<div class="apli"></div>  
	  	</div>
      	<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="deletes">{_("Delete")}</button>
        <button type="submit" class="btn btn-success" data-dismiss="modal" id="aplicats">{_("Apply")}</button>
      	</div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

