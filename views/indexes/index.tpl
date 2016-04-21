<script type="text/javascript" src="{$_layoutParams.root}public/js/jquery.js"></script>
{if $_acl->permiso('new_rol')}
<div class="row">
  <div class="col-md-4 col-sm-8 col-xs-8">
    <a href="{$_layoutParams.root}indexes/createIndexes/" class="btn btn-primary btn-sm">{_("New Indexe")}</a></button>
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
              <form class="smart-form" method='get' action='/indexes/'>
                <input type="hidden" value="1" name="search" /> 
                <header>
                  {_("Search")}
                </header>
                <fieldset>
                  <div class="row">
                    <section class="col col-6">
                      <label class="input"> <i class="icon-append fa fa-italic"></i>
                        <input type="text" class="form-control" id="tags" placeholder="{_("Index")}" value="{$date.index|default:""}" name="index">
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
              <h2>{_("Table Indexes")} </h2>
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
               {if isset($indexes) && count($indexes)}
                  <table class="table table-hover table-striped tablesorter" >
                    <thead>
                      <tr>
                        <th>#</th>
                        <th> <i class="fa fa-italic"></i> {_("INDEX")}</th>
                        <th> <i class="fa fa-comment-o"></i> {_("DESCRIPTION")}</th>
                        <th> <i class="fa fa-thumb-tack"></i> {_("TYPE")}</th>
                        <th> <i class="fa fa-smile-o"></i> {_("STATUS")}</th>
                        <th> <i class="fa fa-calendar"></i> {_("DATE")}</th>
                      </tr>
                    </thead>
                    {foreach item=date from=$indexes}
                      <tbody>
                        <tr>
                          <td>{$date.id_index}</td>
                          <td>{$date.indexes}</td>
                          <td>{$date.description}</td>
                          <td>{$date.type}</td>
                          <td>{$date.status}</td>
                          <td>{$date.date}</td>
                          {if $_acl->permiso('edit_index')}
                          <td><a href="{$_layoutParams.root}indexes/editIndexes/{$date.id_index}"><img src='{$_layoutParams.root}public/img/editar–iconos_obelisk.png' title='{_("Edit")}'></a></td>
                          {/if}
                          {if $_acl->permiso('delete_index')}
                          <td><a href="#" class="delete" alt="{$date.id_index}"><img src='{$_layoutParams.root}public/img/eliminar_obelisk.png' title='{_("Delete")}'></a></td>
                          {/if}
                        </tr>          
                      </tbody>
                    {/foreach}
                  </table>
                {else}
                  <p><strong>{_("Not Indexs")}!</strong></p>
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
  <p>{_("Delete this record")}?</p>
</div>
