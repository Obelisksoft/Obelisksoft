<link rel="stylesheet" href="{$_layoutParams.root}public/css/treeStyle.css" />
<script type="text/javascript" src="{$_layoutParams.ruta_js}libs/jquery-2.0.2.min.js"></script>

<div class="form-group" style="{$style}">
  <section id="widget-grid" class="">
  <!-- row -->
    <div class="row">
      <article class="col-sm-6 col-md-6 col-lg-6">
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
              <form method="post" id="addpermission" action="" class="smart-form" novalidate="novalidate" name="addpermission">
                <input type="hidden" name="id_departament" value="{$iddeparuser}">
                   <header>
                    
                  </header>
                  <fieldset>
                      <div class="row">
                            <div id="page-wrap">   
               
                                <ul class="treeview">
                                    
                                        {$data}
                                    
                                </ul>
                            </div>

                      </div>                  
                  </fieldset>
                  <footer>
                    <button type="submit" class="btn btn-primary btn-lg" name="butonAddpermission">{_("Save")}</button>
                    <button type="button" class="btn btn-warning btn-lg" onClick="location.href='/departament/departament/';" >{_("Cancel")}</button>
                  </footer>
              </form>
            </div>
          </div>
        </div>
      </article>
    </div>
  </section>
</div>



                                  