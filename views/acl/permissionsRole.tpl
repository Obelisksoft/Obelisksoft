<div class="form-group" style="{$style}">    
  <section id="widget-grid" class="">
  <!-- row -->
    <div class="row">
      <article class="col-sm-8 col-md-8 col-lg-8">
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
            <span class="widget-icon"> <i class="fa fa-key"></i> </span>
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
              <form class="smart-form" name="form1" method="post" action="">
                <input type="hidden" value="1" name="save" /> 
                <header>
                  <h1>{$role.rol}</h1>
                </header>
                <fieldset>
                  {if isset($permisos) && count($permisos)}
                        <table class="table table-hover table-striped tablesorter" >
                            <thead>
                              <tr>
                                <th> <i class="fa fa-key"></i> {_("PERMISSION")}</th>
                                <th> <i class="fa fa-unlock"></i> {_("ENABLED")}</th>
                                <th> <i class="fa fa-lock"></i> {_("DENIED")}</th>
                                <th> <i class="fa"></i> {_("IGNORE")}</th>
                              </tr>
                            </thead>
                            {foreach item=pr from=$permisos}
                            <tbody>
                                <tr>
                                    <td>{$pr.nombre}</td>
                                    <td>
                                        <label class="radio">
                                        <input type="radio" name="perm_{$pr.id}" value="1" {if ($pr.valor == 1)}checked="checked"{/if}/>
                                        <i></i></label>
                                    </td>
                                    <td>
                                        <label class="radio">
                                        <input type="radio" name="perm_{$pr.id}" value="" 
                                        {if ($pr.valor == "")}checked="checked"{/if}/>
                                        <i></i></label>
                                    </td>
                                    <td>
                                        <label class="radio">
                                        <input type="radio" name="perm_{$pr.id}" value="x" {if ($pr.valor === "x")}checked="checked"{/if}/>
                                        <i></i></label>
                                    </td>
                                </tr>
                            </tbody>
                            {/foreach}
                        </table>
                    {/if}
                </fieldset>                    
                <footer>
                   <button type="submit" class="btn btn-primary">
                    {_("Save")}
                  </button>
                  <button type="button" class="btn btn-warning" onClick="location.href='/rol/';" >{_("Cancel")}</button>
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
    
      </article>
      <!-- WIDGET END -->
    </div>
    <!-- row -->
  </section>  
</div>