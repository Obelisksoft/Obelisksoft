<div class="form-group" style="{$style}">
  <section id="widget-grid" class="">
    <div class="row">
      <article class="col-sm-12 col-md-12 col-lg-12">
        <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-deletebutton="false">
          <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2>{_("Registration form")} </h2>       
          </header>
          <div>
            <!-- widget edit box -->
            <div class="jarviswidget-editbox">
              <!-- This area used as dropdown edit box -->
            </div>
            <!-- end widget edit box -->
            <!-- widget content -->
            <div class="widget-body no-padding">
              <form class="smart-form" novalidate="novalidate" action="{$_layoutParams.root}user/createUser/" method="post" id="form1">
                <input type="hidden" value="1" name="save" />  
                <header>
                  {_("Create New User")}
                </header>
                <fieldset>
                  <div class="row">
                    <section class="col col-6">
                      <label class="input"> <i class="icon-append fa fa-user"></i>
                        <input type="text" class="form-control" placeholder="{_("First Name")}" value="{$date.firstname|default:""}" name="firstname"></p>
                      </label>
                    </section>
                    <section class="col col-6">
                      <label class="input"> <i class="icon-append fa fa-user"></i>
                        <input type="text" class="form-control" placeholder="{_("Last Name")}" value="{$date.lastname|default:""}" name="lastname"></p>
                      </label>
                    </section>
                  </div>
                  <div class="row">
                    <section class="col col-6">
                      <label class="input"> <i class="icon-append fa fa-user"></i>
                        <input type="text" class="form-control" placeholder="{_("Login")}" value="{$date.login|default:""}" name="login" id="login"></p>
                      </label>
                    </section>
                    <section class="col col-6">
                      <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                        <input type="text" class="form-control" placeholder="{_("Email")}" value="{$date.email|default:""}" name="email" id="email"></p>
                      </label>
                    </section>
                  </div>
                </fieldset>
                <fieldset>
                  <div class="row">
                    <section class="col col-6">
                      <label class="input"> <i class="icon-append fa fa-unlock-alt"></i>
                        <input type="password" class="form-control" placeholder="{_("Password")}" value="{$date.passwd|default:""}" name="passwd" id="passwd"></p>                        </label>
                    </section>
                    <section class="col col-6">
                      <label class="input"> <i class="icon-append fa fa-unlock-alt"></i>
                        <input type="password" class="form-control" placeholder="{_("Confirm Password")}" value="{$date.confirmpasswd|default:""}" name="confirmpasswd" id="confirmpasswd"></p>
                      </label>
                    </section>
                  </div>
                </fieldset>
                <fieldset>
                <div class="row">
                  <section class="col col-6">
                    <label class="select">
                      <select id="role" class="form-control" name="rol">
                        <option value="">--{_("Rol")}--</option>
                          {foreach from=$roles item=p}
                            <option value="{$p.id_rol}">{$p.rol}</option>
                          {/foreach}
                      </select> <i></i> 
                    </label>
                  </section>
                  <section class="col col-6">
                    <label class="select">
                      <select id="status" class="form-control" name="status">
                        <option value="">--{_("Status")}--</option>
                        {foreach from=$status item=p}
                          <option value="{$p.id_status}">{$p.status}</option>
                        {/foreach}
                      </select><i></i>
                    </label>
                  </section>
                </div>
                <footer>
                  <button type="submit" class="btn btn-primary">
                    {_("Save")}
                  </button>
                  <button type="button" class="btn btn-warning" onClick="location.href='/user/';" >{_("Cancel")}</button>
                </footer>
              </form>
            </div>
          <!-- end widget content -->
          </div>
        </div>
          <!-- end widget -->   
      </article>
    </div>
    <!-- end row -->
    <!-- row -->
  </section>
</div>