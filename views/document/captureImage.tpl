<script type="text/javascript" src="{$_layoutParams.root}public/js/jquery.js" ></script>
<script type="text/javascript" src="{$_layoutParams.root}public/css/cssprueba/jquery.mousewheel.min.js" ></script>

<script type="text/javascript" src="{$_layoutParams.root}public/css/cssprueba/jquery.iviewer.js" ></script>
<link rel="stylesheet" href="{$_layoutParams.root}public/css/cssprueba/jquery.iviewer.css" />
<link rel="stylesheet" href="{$_layoutParams.root}public/css/style2.css" />
        <style>
            .viewer
            {
                width: 100%;
                height: 600px;
                border: 1px solid black;
                position: relative;
            }
            
            .wrapper
            {
                overflow: hidden;
            }
        </style>
<div class="form-group" style="{$style}">
<section id="widget-grid" class="">
	<!-- row -->
	<div class="row">
		<!-- NEW WIDGET START -->
		<article class="col-sm-8">
						
			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-white" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false">
				<!-- widget options:
				usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false" >

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
					<span class="widget-icon"> <i class="fa fa-file-image-o"></i> </span>
					<h2>{_("Document")}! </h2>

				</header>

				<!-- widget div-->
				<div>

					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->

					</div>
					<!-- end widget edit box -->

					<!-- widget content -->
					<div class="widget-body">

						<div class="wrapper">
						   <span>
						   
						   	<h1 class="txt-color-blue"><div class="pagina"></div></h1>
						   
						   <a><img src="{$_layoutParams.root}public/img/atras_obelisk.png" class="lefttem" alt="" title="Previous">
						   <img src="{$_layoutParams.root}public/img/adelante_obelisk.png" class="righttem" alt="" title="Next">
						   <img src="{$_layoutParams.root}public/img/zoom_mas_obelisk.png" id="in" class="zoom-in" alt="" title="Zoom In">
						   <img src="{$_layoutParams.root}public/img/zoom_menos_obelisk.png" id="out" class="zoom-out" alt="" title="Zoom Out">
						   <img src="{$_layoutParams.root}public/img/agregar_file_obelisk.png" id="addocument" class="file-add-trd" alt="{$folder}" title="File Add">
							<img src="{$_layoutParams.root}public/img/eliminar_obelisk.png" id="delete" class="file-delete-trd" alt="{$folder}" title="Delete"></a>
						<!--<div id="viewer" class="viewer" alt='{$div}' scr='{$count}' tal="{$folder}"></div>-->
						<br>
						<br>
						     {$div}
						     {$divs}
						   </span>
						   
						</div>

					</div>
					
					<!-- end widget content -->

				</div>
				<!-- end widget div -->

			</div>
			<!-- end widget -->

		</article>
		
          <article class="col-sm-4 col-md-4 col-lg-4">
            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget" id="wid-id-2" data-widget-editbutton="false" data-widget-deletebutton="false">
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
                <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                <h2>{_("Data")} </h2>       
              </header>
                <!-- widget div-->
              <div>
                <!-- widget edit box -->
                <div class="jarviswidget-editbox">
                  <!-- This area used as dropdown edit box -->
                </div>
                <!-- end widget edit box -->
                <!-- widget content -->
                <div class="widget-body no-padding">              
		              <form role="form" class="smart-form" novalidate="novalidate" method="get" id="formtrd">
		                <input type="hidden" value="searchtrd" name="searchtrd" /> 
		                <input type="hidden" value="1" name="trd" />
		                 <input type="hidden" value="{$folder}" name="folder" />
		                <fieldset>
		                   <section>
			                 <div class="col-lg-12 ">
			                 	<label class="input"> <i class="icon-append fa fa-archive"></i>
	                            	<input type="text" class="form-control" placeholder="{_("Name Document")}" value="" name="namedocument"></p>
	                          	</label>
		                    
		                      <label for="disabledSelect">Serie:</label>
		                      <select id="serie" class="form-control serie" name="serie" >
		                          <option value=""> -{_("Select")}- </option>
		                          {foreach from=$serie item=s}
		                                
		                          <option value="{$s.id_retention}">{$s.retention}</option>
		                                
		                        {/foreach}
		                      </select>
		
		                      <label for="disabledSelect">SubSerie:</label>
		                      <select id="subserie" class="form-control" name="subserie"></select>
		
		                      <label for="disabledSelect">{_("Document Type")}:</label>
		                      <select id="typedocment" class="form-control" name="tipodoc"></select>
		                    </div>
		                  </section>
		                   
		                    <fieldset>
		                      <div class="row">
		                        <div class="fields"></div>
		                      </div>
		                    </fieldset>
		                  
		                </fieldset>
		
		                <footer>
		                  <button type="button" class="btn btn-primary" id="savetrd"><span class="fa fa-save"></span> {_("Save")}</button>
		                  
		                </footer>
		              </form>
               
                <!-- end widget content -->
              </div>
              <!-- end widget div -->
            </div>
              <!-- end widget -->
          </article>
	</div>
</select>
</div>


<!--<div id="moda" title="Save Document?">
<br>
 <dl>
  <dt><span><p align="center"><img src="{$_layoutParams.root}public/img/warning_blue.png"> {_("SAVE")} ?</p></span></dt>
</dl>
</div>-->





<div id="moda" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{_("Save Document")}</h4>
      </div>
      <div class="modal-body">
        <dt><span><p align="center"><img src="{$_layoutParams.root}public/img/warning_blue.png"> {_("SAVE")} ?</p></span></dt>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">{_("Close")}</button>
        <button type="submit" class="btn btn-success" data-dismiss="modal" id="saveDoc">{_("Save")}</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->