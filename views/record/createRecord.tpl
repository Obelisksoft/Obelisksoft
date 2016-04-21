<div class="form-group" style="{$style}">
	<section id="widget-grid" class="">
	<!-- row -->
	<div class="row">
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
                <h2>Record </h2>       
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
							  <label class="label"><h6>Options</h6></label>
							    <div class="row">
								  <div class="col col-6">
								  	<label class="radio">
									  <input type="radio" name="radiorecord" value="1" checked="checked" >
									  <i></i>New Record</label>
								  </div>
								  <div class="col col-6">
								    <label class="radio">
									  <input type="radio" name="radiorecord" value="2">
									  <i></i>Existing Record</label>
								  </div>
								</div>
							</section>
		                	<section class="col-lg-12">
		                		<label for="disabledSelect">ID Record</label>
		                      <label class="input"> <i class="icon-append fa fa-paperclip"></i>
		                        <input type="text" readonly="readonly" id="idrecord" class="form-control" placeholder="ID Record" value="{$idrecord}" name="idrecord"></p>
		                      </label>
		                    </section>
		                	<section class="col-lg-12">
		                      <label class="input"> <i class="icon-append fa fa-file-text-o"></i>
		                        <input type="text" class="form-control" id="recordname" placeholder="Name Record" value="{$date.recordname|default:""}" name="recordname"></p>
		                      </label>
		                    </section>
		                  <section>
		                    <div class="col-lg-12 ">
		                    	<label for="disabledSelect">Table:</label>
			                      <select id="table" class="select2 table" name="table" >
			                          <option value=""> -seleccione- </option>
			                          <option value="1">Retention</option>
			                          <option value="2">Valoration</option>
			                      </select>		
		                      <label for="disabledSelect">Serie:</label>
		                      <select id="serie" class="select2 serie" name="serie" >
		                      </select>		
		                      <label for="disabledSelect">SubSerie:</label>
		                      <select id="subserie" class="select2" name="subserie"></select>
		                    </div>
		                  </section>
		                </fieldset>
		
		                <footer>
		                  <button type="button" class="btn btn-primary" id="savetrd"><span class="fa fa-save"></span> Save</button>
		                  
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