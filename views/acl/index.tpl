{if $_acl->permiso('new_permission')}
<div class="row">
  <div class="col-md-4 col-sm-8 col-xs-8">
    <a href="{$_layoutParams.root}acl/newPermission/" class="btn btn-primary btn-sm">{_("New Permissions")}</a></button>
  </div>
</div>
  {/if} 
  <br>
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
            <h2>{_("Search Permission")}</h2>       
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
              <form class="smart-form" action="/acl/" method="get">
                <input type="hidden" value="1" name="search" /> 
                <header>
                  {_("Search Permission")}
                </header>
                <fieldset>
                  <div class="row">
                    <section class="col col-8">
                      <label class="input"> <i class="icon-append fa fa-lock"></i>
                        <input type="text" class="form-control" id="tags" placeholder="{_("Permission")}" value="{$date.permiso|default:""}" name="permiso"></p>
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
              <h2>{_("Table Permissions")} </h2>
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
                {if isset($permisos) && count($permisos)}
                  <table class="table table-hover table-striped tablesorter" >
                    <thead>
                      <tr>
                        <th>#</th>
                        <th> <i class="fa fa-lock"></i> {_("PERMISSION")}</th>
                        <th> <i class="fa fa-key"></i> {_("KEY")}</th>
                      </tr>
                    </thead>
                    {foreach item=date from=$permisos}
                      <tbody>
                        <tr>
                          <td>{$date.id}</td>
                          <td>{$date.nombre}</td>
                          <td>{$date.key}</td>
                          {if $_acl->permiso('edit_permission')}
                            <td><a href="{$_layoutParams.root}rol/editRole/{$date.id_rol}"><img src='{$_layoutParams.root}public/img/editar–iconos_obelisk.png' title='{_("Edit")}'></a></td>
                          {/if}
                          {if $_acl->permiso('delete_permission')}
                            <td><a href="#" class="delete" alt="{$date.id_rol}"><img src='{$_layoutParams.root}public/img/eliminar_obelisk.png' title='{_("Delete")}'></a></td>
                          {/if}
                        </tr>          
                      </tbody>
                    {/foreach}
                  </table>
                {else}
                  <p><strong>{_("Not Permission")}!</strong></p>
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