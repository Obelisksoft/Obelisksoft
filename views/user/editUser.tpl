<div class="form-group" style="{$style}">
  <section id="widget-grid" class="">
  <!-- row -->
    <div class="row">
      <article class="col-sm-12 col-md-12 col-lg-12">
      <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-deletebutton="false">
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
            <h2>{$titulo}</h2>       
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
             <form class="smart-form" novalidate="novalidate" role="form" action="" method="post" id="form1">
                <input type="hidden" value="1" name="edit" />  
                  <header>
                    {_("Edit")}
                  </header>

                  <fieldset>
                    <div class="row">
                      <section class="col col-6">
                        <label class="input"> <i class="icon-append fa fa-user"></i>
                          <input type="text" class="form-control" placeholder="{_("First Name")}" value="{$dates.firstname|default:""}" name="firstname"></p>
                        </label>
                      </section>
                      <section class="col col-6">
                        <label class="input"> <i class="icon-append fa fa-user"></i>
                          <input type="text" class="form-control" placeholder="{_("Last Name")}" value="{$dates.lastname|default:""}" name="lastname"></p>
                        </label>
                      </section>
                    </div>
                    <div class="row">
                      <section class="col col-6">
                        <label class="input"> <i class="icon-append fa fa-user"></i>
                          <input type="text" class="form-control" placeholder="{_("Login")}" value="{$dates.login|default:""}" name="login" id="login"></p>
                        </label>
                      </section>
                      <section class="col col-6">
                        <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                          <input type="text" class="form-control" placeholder="{_("Email")}" value="{$dates.email|default:""}" name="email" id="email"></p>
                        </label>
                      </section>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="row">
                      <section class="col col-6">
                        <label class="input"> <i class="icon-append fa fa-unlock-alt"></i>
                          <input type="password" class="form-control" placeholder="{_("Password")}"" name="passwd" id="passwd"></p>
                        </label>
                      </section>
                      <section class="col col-6">
                        <label class="input"> <i class="icon-append fa fa-unlock-alt"></i>
                          <input type="password" class="form-control" placeholder="{_("Confirm Password")}""  name="confirmpasswd" id="confirmpasswd"></p>
                        </label>
                      </section>
                    </div>
                  </fieldset>
                  <fieldset>
                    <div class="row">
                      <section class="col col-6">
                        <select id="role" class="form-control" name="rol">
                            <option value="{$rol.id_rol|default:""}"> {$rol.rol|default:""} </option>
                              {foreach from=$roles item=p}                              
                                <option value="{$p.id_rol}">{$p.rol}</option>
                              {/foreach}
                        </select>
                      </section>
                      <section class="col col-6">
                        <select id="status" class="form-control" name="status">
                          <option value="{$stat.id_status|default:""}"> {$stat.status|default:""} </option>
                            {foreach from=$status item=p}                              
                            <option value="{$p.id_status}">{$p.status}</option>
                            {/foreach}
                          </select>
                      </section>
                    </div>
                  </fieldset>
                  <footer>
                    <button type="submit" class="btn btn-primary">
                      {_("Edit")}
                    </button>
                    <button type="button" class="btn btn-warning" onClick="location.href='/user/';" >{_("Cancel")}</button>
                  </footer>
                </form>
              </div>
              <!-- end widget content -->
            </div>
            <!-- end widget div -->
          </div>
        </article>
           <!-- end widget -->   
    </div>
          <!-- row -->
  </section>
</div>