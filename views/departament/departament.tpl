{if $_acl->permiso('new_departament')}
<div class="row">
  <div class="col-md-4 col-sm-8 col-xs-8">
    <a href="{$_layoutParams.root}departament/createDepartament/" class="btn btn-primary btn-sm">{_("New Departament")}</a></button>
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
               <h2>{$titulo} </h2>      
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
              <form class="smart-form" action="/departament/departament/" method="get">
                <input type="hidden" value="1" name="search" /> 
                <header>
                  {_("Search Departament")}
                </header>
                <fieldset>
                  <div class="row">
                    <section class="col col-6">
                      <label class="input"> <i class="icon-append fa fa-cubes"></i>
                        <input type="text" class="form-control" id="tags" placeholder="{_("Departaent")}" value="{$date.departament|default:""}" name="departament"></p>
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
              <h2>{_("Table Departament")} </h2>
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
                {if isset($departament) && count($departament)}
                  <table class="table table-hover table-striped tablesorter" >
                    <thead>
                      <tr>
                        <th>#</th>
                        <th> <i class="fa fa-key"></i> {_("CODE")}</th>
                        <th> <i class="fa fa-cubes"></i> {_("DEPARTAMENT")}</th>
                        <th> <i class="fa fa-comment"></i> {_("DESCRIPTION")}</th>
                        <th> <i class="fa fa-calendar"></i> {_("DATE")}</th>
                      </tr>
                    </thead>
                    {foreach item=date from=$departament}
                      <tbody>
                        <tr>
                          <td>{$date.id_departament}</td>
                          <td>{$date.code}</td>
                          <td>{$date.departament}</td>
                          <td>{$date.description}</td>
                          <td>{$date.date}</td>
                          {if $_acl->permiso('edit_departament')}
                            <td><a href="{$_layoutParams.root}departament/editDepartament/{$date.id_departament}"><img src='{$_layoutParams.root}public/img/editar–iconos_obelisk.png' title='{_("Edit")}'></a></td>
                          {/if}
                          {if $_acl->permiso('delete_departament')}
                            <td><a href="#" class="delete" alt="{$date.id_departament}"><img src='{$_layoutParams.root}public/img/eliminar_obelisk.png' title='{_("Delete")}'></a></td>
                          {/if}
                          {if $_acl->permiso('edit_permission')}
                            <td><a href="{$_layoutParams.root}departament/userDepartament/{$date.id_departament}" class="permission"><img src='{$_layoutParams.root}public/img/nuevo_usuario.png' title='{_("Add User")}'></a></td>

                             <td><a href="{$_layoutParams.root}departament/permissionDepartament/?dept={$date.id_departament}" class="permission"><img src='{$_layoutParams.root}public/img/descripcion–iconos_obelisk.png' title='{_("Permission")}'></a></td>
                          {/if}
                        </tr>          
                      </tbody>
                    {/foreach}
                  </table>
                {else}
                  <p><strong>{_("Not Departament")}!</strong></p>
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
  <p>{_("delete this record")}?</p>
</div>
