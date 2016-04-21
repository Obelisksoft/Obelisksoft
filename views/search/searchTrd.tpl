<lu>
  <ul class="nav nav-tabs" role="tablist">
  {if $_acl->permiso('view_retention')}  
    <li class="active"><a href="#">TRD</a></li>
  {/if}
  {if $_acl->permiso('view_valoration')}
    <li><a href="/search/searchTvd/">TVD</a></li>
  {/if}  
</ul>

{if $_acl->permiso('new_document')}
  <div class="newposition"><a href="/document/newdocumenttrd/" class="btn btn-primary active" role="button">{_("New Document")}</a></div>
{/if}
<br>
<div class="form-group" style="{$style}">
  <section id="widget-grid" class="">
    <div class="row">
      <article class="col-sm-12 col-md-12 col-lg-12">
        <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-deletebutton="false">
          <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2>{$titulo} </h2>              
          </header>
          <div>
            <div class="jarviswidget-editbox">
                <!-- This area used as dropdown edit box -->                
            </div>
            <div class="widget-body no-padding">              
              <form role="form" class="smart-form" novalidate="novalidate" method="get" id="formtrd">
                <input type="hidden" value="searchtrd" name="searchtrd" />
                <input type="hidden" value="1" name="trd" /> 
                <fieldset>
                  <section>
                    <div class="col-lg-3 ">
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
                  <button type="button" class="btn btn-success" id="searchtrd"><span class="fa fa-search"></span>{_("Search")}</button>
                </footer>
              </form>



            </div>
            
          </div>
        </div>
      </article>
    </div>   
  </section>
  <!--<div class="resulsearch"></div>-->
</div>


<div class="row">
  <div class="col-sm-12">
    <div id="myTabContent1" class="tab-content bg-color-white padding-10">
      <div class="tab-pane fade in active" id="s1">
          <div class="resulttrd">
               
             </div>
      </div>
    </div>
  </div>
</div>  



<!---->
