<h1>{$titulo} <small>{$group}</small></h1>
<script type="text/javascript" src="{$_layoutParams.root}public/js/jquery.js"></script>
<script type="text/javascript" src="{$_layoutParams.ruta_js}jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.js"></script>
<script type="text/javascript" src="{$_layoutParams.root}public/js/ui.multiselect.js"></script>
<link type="text/css" href="{$_layoutParams.root}public/css/ui.multiselect.css" rel="stylesheet" />
<link type="text/css" href="{$_layoutParams.root}public/css/jquery-ui.css" rel="stylesheet" />
<link type="text/css" href="{$_layoutParams.root}public/css/style.css" rel="stylesheet" />

<div class="form-group" style="{$style}">
  <section id="widget-grid" class="">
  <!-- row -->
    <div class="row">
      <article class="col-sm-12 col-md-12 col-lg-6">
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
              <form method="post" id="addusers" action="" class="smart-form" novalidate="novalidate">
                <input type="hidden" name="idgroup" value="{$idgroup}">
                   <header>
                    {$group}
                  </header>
                  <fieldset>
                      <div class="row">
                         <section class="col col-12">                         
                            {if isset($groups) && count($groups)}
                            <select id="selected" class="selected" multiple="multiple"
                                name="multiple[]">            
                                {$groups}
                            </select>   
                          {/if} 
                        <input type='hidden' name='action' value='{$actUser}'>
                        </section>
                      </div>                  
                  </fieldset>
                  <footer>
                    <button type="submit" class="btn btn-primary btn-lg">{_("Save")}</button>
                    <button type="button" class="btn btn-warning btn-lg" onClick="location.href='/group/';" >{_("Cancel")}</button>
                  </footer>
              </form>
            </div>
          </div>
        </div>
      </article>
    </div>
  </section>
</div>