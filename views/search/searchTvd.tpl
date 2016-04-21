<lu>
  <ul class="nav nav-tabs" role="tablist">
  <li><a href="/search/searchTrd/">TRD</a></li>
  <li class="active"><a href="#">TVD</a></li>
</ul>
<div class="newposition"><a href="/document/newdocumenttvd/" class="btn btn-primary active" role="button">New Document</a></div>
<br>
<div class="form-group" style="{$style}">
  <section id="widget-grid" class="">
    <div class="row">
      <article class="col-sm-12 col-md-12 col-lg-12">
        <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-deletebutton="false">
          <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2>Registration {$titulo} </h2>              
          </header>
          <div>
            <div class="jarviswidget-editbox">
                <!-- This area used as dropdown edit box -->                
            </div>
            <div class="widget-body no-padding">              
              <form role="form" class="smart-form" novalidate="novalidate" method="get" id="formtrd">
                <input type="hidden" value="searchtrd" name="searchtrd" /> 
                <fieldset>
                  <section>
                    <div class="col-lg-3 ">
                      <label for="disabledSelect">Serie:</label>
                      <select id="serietvd" class="form-control serietvd" name="serietvd" >
                          <option value=""> -{_("Select")}- </option>
                          {foreach from=$serie item=s}
                                
                          <option value="{$s.id_valoration}">{$s.valoration}</option>
                                
                        {/foreach}
                      </select>

                      <label for="disabledSelect">SubSerie:</label>
                      <select id="subserietvd" class="form-control" name="subserietvd"></select>

                      <label for="disabledSelect">{_("Document Type")}:</label>
                      <select id="typedocmenttvd" class="form-control" name="tipodoc"></select>
                    </div>
                  </section>
                   
                    <fieldset>
                      <div class="row">
                        <div class="fieldstvd"></div>
                      </div>
                    </fieldset>
                  
                </fieldset>

                <footer>
                  <button type="button" class="btn btn-success" id="searchtrd"><span class="fa fa-search"></span>{_("Search")}</button>
                </footer>
              </form>



            </div>
            
          </div>
        </div>
      </article>
    </div>   
  </section>
  <div class="resulsearch"></div>
</div>



<!---->
