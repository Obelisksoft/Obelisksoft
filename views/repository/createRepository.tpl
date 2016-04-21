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
              <form class="smart-form" novalidate="novalidate" action="{$_layoutParams.root}repository/createRepository/" method="post" id="form1">
                <input type="hidden" value="1" name="save" />  
                <header>
                    {$titulo}
                </header>
                <fieldset>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-archive"></i>
                      <input type="text" class="form-control" placeholder="{_("Name Repository")}" value="{$date.namerepository|default:""}" name="namerepository">
                      <b class="tooltip tooltip-bottom-right">{_("Needed to enter the website")}</b>
                    </label>
                  </section>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-gears"></i>
                      <input type="text" class="form-control" placeholder="{_("Path Repository")}" value="{$date.pathrepository|default:""}" name="pathrepository">
                      <b class="tooltip tooltip-bottom-right">{_("Needed to enter the website")}</b>
                    </label>
                  </section>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-user"></i>
                      <input type="text" class="form-control" placeholder="{_("User Repository")}" value="{$date.userrepository|default:""}" name="userrepository">
                      <b class="tooltip tooltip-bottom-right">{_("Needed to enter the website")}</b>
                    </label>
                  </section>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                      <input type="password" class="form-control" placeholder="{_("Password Repository")}" value="{$date.passrepository|default:""}" name="passrepository">
                      <b class="tooltip tooltip-bottom-right">{_("Needed to enter the website")}</b>
                    </label>
                  </section>
                  <section>
                    <label class="textarea"> <i class="icon-append fa fa-comment"></i> 
                      <textarea class="form-control" rows="3" name="{_("description")}">{$date.description|default:""}</textarea>
                    </label>
                  </section>
                </fieldset>    
                <footer>
                  <button type="submit" class="btn btn-primary">
                    {_("Save")}
                  </button>
                  <button type="button" class="btn btn-warning" onClick="location.href='/repository/';" >{_("Cancel")}</button>
                </footer>
              </form>
            </div>
          </div>
        </div>
      </article>
    </div>   
  </section>
</div>