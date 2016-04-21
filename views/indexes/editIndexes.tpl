<script type="text/javascript" src="{$_layoutParams.root}public/js/jquery.js"></script>
<div class="form-group" style="{$style}">
  <section id="widget-grid" class="">
    <div class="row">
      <article class="col-sm-12 col-md-12 col-lg-6">
        <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-deletebutton="false">
          <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2>{$titulo} </h2>              
          </header>
          <div>
            <div class="jarviswidget-editbox">
                <!-- This area used as dropdown edit box -->                
            </div>
            <div class="widget-body no-padding">
              <form class="smart-form" novalidate="novalidate" role="form" action="" method="post" id="form1">
                <input type="hidden" value="1" name="edit" /> 
                <header>
                    {$titulo}
                </header>
                <fieldset>
                  <section>
                    <label class="input"> <i class="icon-append fa fa-italic"></i>
                      <input type="text" class="form-control" placeholder="Index" value="{$dates.indexes|default:""}" name="indexes">
                      <b class="tooltip tooltip-bottom-right">Needed to enter the website</b>
                    </label>
                  </section>
                  <section>
                     <label class="select">
                         <select id="type" class="form-control" name="type">
                          <option value="{$types.id_type|default:""}"> {$types.type|default:""} </option>
                          {foreach from=$type item=p}
                              
                              <option value="{$p.id_type}">{$p.type}</option>
                              
                          {/foreach}
                      </select><i></i>
                    </label>
                  </section>
                  <section>
                     <label class="select">
                         <select id="status" class="form-control" name="status">
                          <option value="{$stat.id_status|default:""}"> {$stat.status|default:""} </option>
                          {foreach from=$status item=p}
                              
                              <option value="{$p.id_status}">{$p.status}</option>
                              
                          {/foreach}
                      </select><i></i>
                    </label>
                  </section>
                  <section>
                    <label class="textarea"> <i class="icon-append fa fa-comment"></i> 
                      <textarea class="form-control" rows="3" name="description">{$dates.description|default:""}</textarea>
                    </label>
                  </section>
                </fieldset>    
                <footer>
                  <button type="submit" class="btn btn-primary">
                    Edit
                  </button>
                  <button type="button" class="btn btn-warning" onClick="location.href='/indexes/';" >Cancel</button>
                </footer>
              </form>
            </div>
          </div>
        </div>
      </article>
    </div>   
  </section>
</div>