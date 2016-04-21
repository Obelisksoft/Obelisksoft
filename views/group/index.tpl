{if $_acl->permiso('new_group')}
<div class="row">
  <div class="col-md-4 col-sm-8 col-xs-8">
    <a href="{$_layoutParams.root}group/createGroup/" class="btn btn-primary btn-sm">{_("New Group")}</a></button>
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
                <h2>{_("Search")} {$titulo}</h2>       
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
                  <form class="smart-form" action="/group/" method="get">
                    <input type="hidden" value="1" name="search" /> 
                    <header>
                      {_("Search")} {$titulo}
                    </header>
                    <fieldset>
                      <div class="row">
                        <section class="col col-6">
                          <label class="input"> <i class="icon-append fa  fa-group "></i>
                            <input type="text" class="form-control" id="tags" placeholder="{_("Group")}" value="{$date.group|default:""}" name="group"></p>
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
              <h2>{_("Table Group")} </h2>
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
                {if isset($group) && count($group)}
                  <table class="table table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th> <i class="fa fa-group "></i> {_("GROUP")}</th>
                        <th> <i class="fa fa-smile-o"></i> {_("STATUS")}</th>
                        <th> <i class="fa fa-calendar"></i> {_("DATE")}</th>
                      </tr>
                    </thead>
                    {foreach item=date from=$group}
                      <tbody>
                        <tr>
                            <td>{$date.id_group}</td>
                            <td>{$date.group}</td>
                            <td>{$date.status}</td>
                            <td>{$date.date}</td>
                            {if $_acl->permiso('edit_group')}
                            <td><a href="{$_layoutParams.root}group/editGroup/{$date.id_group}"><img src='{$_layoutParams.root}public/img/editar–iconos_obelisk.png' title='{_("Edit")}'></a></td>
                            {/if}
                            {if $_acl->permiso('edit_group')}
                            <td><a href="{$_layoutParams.root}group/addUsers/{$date.id_group}"><img src='{$_layoutParams.root}public/img/nuevo_usuario.png' title='{_("Add User")}'></a></td>
                            {/if}
                            {if $_acl->permiso('delete_group')}
                            <td><a href="#" class="delete" alt="{$date.id_group}"><img src='{$_layoutParams.root}public/img/eliminar_obelisk.png' title='{_("Delete")}'></a></td>
                            {/if}
                          </tr>            
                      </tbody>
                    {/foreach}
                  </table>
                {else}
                  <p><strong>{_("Not Group")}!</strong></p>
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

