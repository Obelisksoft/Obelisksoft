{if $_acl->permiso('new_user')}
<div class="row">
  <div class="col-md-4 col-sm-8 col-xs-8">
    <a href="{$_layoutParams.root}user/createUser/" class="btn btn-primary btn-sm">{_("New Users")}</a></button>
  </div>
</div>
 {/if} 
 <br>
<!-- Form of the search -->
  <div class="form-group" style="{$style}">    
      <section id="widget-grid" class="">
        <!-- row -->
        <div class="row">
          <article class="col-sm-12 col-md-12 col-lg-12">
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
               <h2>{_("Search Users")} </h2>      
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
                  <form class="smart-form" action="/user/" method="get">
                    <input type="hidden" value="1" name="search" /> 
                    <header>
                      {_("Search Users")}
                    </header>
                    <fieldset>
                      <div class="row">
                        <section class="col col-6">
                          <label class="input"> <i class="icon-append fa fa-user"></i>
                            <input type="text" class="form-control" placeholder="{_("FIRST NAME")}" value="{$date.firstname|default:""}" name="firstname" id="tagsfirst"></p>
                          </label>
                        </section>
                        <section class="col col-6">
                          <label class="input"> <i class="icon-append fa fa-user"></i>
                            <input type="text" class="form-control" placeholder="{_("LAST NAME")}" value="{$date.lastname|default:""}" name="lastname" id="tagslast"></p>
                          </label>
                        </section>
                      </div>

                      <div class="row">
                        <section class="col col-6">
                          <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                            <input type="text" class="form-control" placeholder="{_("Email")}" value="{$date.email|default:""}" name="email" id="email" id="tagsemail"></p>
                          </label>
                        </section>
                        <section class="col col-6">
                          <label class="input"> <i class="icon-append fa fa-calendar"></i>
                            <input type="text" class="form-control" id="datepicker" placeholder="{_("DATE")}" value="{$date.date|default:""}" name="date" id="datepicker"></p>
                          </label>
                        </section>
                      </div>
                    </fieldset>                    
                    <footer>
                      <button type="submit" class="btn btn-success">{_("Search")}</button>
                    </footer>
                  </form>
                </div>
                <!-- end widget content -->
              </div>
              <!-- end widget div -->
            </div>
              <!-- end widget -->
          </article>
        </div> 

  <!-- Fin Form -->
  <!-- widget grid -->
  <section id="widget-grid" class="">
    <!-- row -->
    <div class="row">
      <!-- NEW WIDGET START -->
      <article class="col-sm-12 col-md-12 col-lg-12">
        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-deletebutton="false">
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
            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
              <h2>{_("Table Users")} </h2>
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
              <div class="table-responsive">
                {if isset($users) && count($users)}
                  <table class="table table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th> <i class="fa fa-user"></i> {_("FIRST NAME")}</th>
                        <th> <i class="fa fa-user"></i> {_("LAST NAME")}</th>
                        <th> <i class="fa fa-envelope-o"></i> {_("EMAIL")}</th>
                        <th> <i class="fa fa-calendar"></i> {_("DATE")}</th>
                      </tr>
                    </thead>
                    {foreach item=date from=$users}
                      <tbody>
                        <tr>
                          <td>{$date.id_user}</td>
                          <td>{$date.firstname}</td>
                          <td>{$date.lastname}</td>
                          <td>{$date.email}</td>
                          <td>{$date.date}</td>
                          {if $_acl->permiso('edit_user')}
                            <td><a href="{$_layoutParams.root}user/editUser/{$date.id_user}"><img src='{$_layoutParams.root}public/img/editar–iconos_obelisk.png' title='{_("Edit")}'></a></td>
                          {/if}
                          {if $_acl->permiso('delete_user')}
                            <td><a href="#" class="delete" alt="{$date.id_user}"><img src='{$_layoutParams.root}public/img/eliminar_obelisk.png' title='{_("Delete")}'></a></td>
                          {/if}
                        </tr>          
                      </tbody>
                    {/foreach}
                  </table>
                {else}
                  <p><strong>Not Users!</strong></p>
                  </div>  
                {/if}
              </div>
              <footer>
                {if isset($pagination)}{$pagination}{/if}
              </footer>
            </div>

            <!-- end widget content -->
          </div>
          <!-- end widget div -->

        </div>
        <!-- end widget -->
      </article>
      <!-- WIDGET END -->
    </div>
    <!-- row -->
       </section>  
    </div>

<div id="dialog" title="Delete">
  <p>{_("Delete this Record")}?</p>
</div>

