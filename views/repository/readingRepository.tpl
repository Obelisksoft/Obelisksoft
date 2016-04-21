<link href="{$_layoutParams.root}public/css/drag-and-drop.css" rel="stylesheet" type="text/css" />

<div class="form-group" style="{$style}">
  <section id="widget-grid" class="">
    <div class="row">
      <article class="col-sm-12 col-md-12 col-lg-12">
        <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-deletebutton="false">
          <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2>{_("Order Repository")} </h2>       
          </header>
          <div>
            <!-- widget edit box -->
            <div class="jarviswidget-editbox">
              <!-- This area used as dropdown edit box -->
            </div>
            <!-- end widget edit box -->
            <!-- widget content -->
            <div class="widget-body no-padding">
              	<div class="dhe-example-section" id="ex-1-1">
					<div class="dhe-example-section-content">

						<!-- BEGIN: XHTML for example 1.1 -->

						<div id="example-1-1">

							<ul class="sortable-list">
								{foreach item=datas from=$data}
									<li class="sortable-item" id="{$datas.ID_REPOSITORY}">{$datas.NAME_REPOSITORY} - {$datas.PATH_REPOSITORY}</li>
								{/foreach}
							</ul>

						</div>

						<!-- END: XHTML for example 1.1 -->

					</div>
				</div>

            </div>
          <!-- end widget content -->
          </div>
        </div>
          <!-- end widget -->   
      </article>
    </div>
    <!-- end row -->
    <!-- row -->
  </section>
</div>



