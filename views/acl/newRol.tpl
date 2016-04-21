<div class="form-group" style="{$style}">
  <section id="widget-grid" class="">
    <div class="row">
      <article class="col-sm-12 col-md-12 col-lg-6">
        <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-deletebutton="false">
          <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2>{_("Registration")} {$titulo} </h2>              
          </header>
          <div>
            <div class="jarviswidget-editbox">
                <!-- This area used as dropdown edit box -->                
            </div>
            <div class="widget-body no-padding">
              <form class="smart-form" novalidate="novalidate" action="{$_layoutParams.root}rol/createRole/" method="post" id="form1">
                <input type="hidden" value="1" name="save" />  
                <header>
                    {$titulo}
                </header>
                <fieldset>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-gears"></i>
                      <input type="text" class="form-control" placeholder="{_("Role")}" value="{$date.rol|default:""}" name="rol">
                      <b class="tooltip tooltip-bottom-right">{_("Needed to enter the website")}</b>
                    </label>
                  </section>
                  <section>
                    <label class="textarea"> <i class="icon-append fa fa-comment"></i> 
                      <textarea class="form-control" rows="3" name="{_("description"})">{$date.rol|default:""}</textarea>
                    </label>
                  </section>
                </fieldset>    
                <footer>
                  <button type="submit" class="btn btn-primary">
                    {_("Save")}
                  </button>
                  <button type="button" class="btn btn-warning" onClick="location.href='/acl/roles';" >{_("Cancel")}</button>
                </footer>
              </form>
            </div>
          </div>
        </div>
      </article>
    </div>   
  </section>
</div>