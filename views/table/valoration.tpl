<script type="text/javascript" src="{$_layoutParams.root}public/js/jquery.js"></script>
<script src="{$_layoutParams.root}public/js/jquery.menu/jquery.contextMenu.js" type="text/javascript"></script>
	<link href="{$_layoutParams.root}public/js/jquery.menu/jquery.contextMenu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
	
	$(document).ready(function() {
	
		$('.tree > ul').attr('role', 'tree').find('ul').attr('role', 'group');
		$('.tree').find('li:has(ul)').addClass('parent_li').attr('role', 'treeitem').find(' > span').attr('title', 'Collapse this branch').on('click', function(e) {
			var children = $(this).parent('li.parent_li').find(' > ul > li');
			if (children.is(':visible')) {
				children.hide('fast');
				$(this).attr('title', 'Expand this branch').find(' > i').removeClass().addClass('fa fa-lg fa-plus-circle');
			} else {
				children.show('fast');
				$(this).attr('title', 'Collapse this branch').find(' > i').removeClass().addClass('fa fa-lg fa-minus-circle');
			}
			e.stopPropagation();
		});			
	
	})

</script>

<div class="form-group" style="{$style}">    
  <section id="widget-grid" class="">
  <!-- row -->
    <div class="row">
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
							<span class="widget-icon"> <i class="fa fa-sitemap"></i> </span>
							<h2>Table de {$titulo} </h2>
		
						</header>
						
						<!-- widget div-->
						<div>
		
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
		
							</div>
							<!-- end widget edit box -->
		
							<!-- widget content -->
							<div class="widget-body">
								<button id="add" class="btn btn-success">{_("Add")}!</button>
								<div class="tree smart-form">

									<ul>
										{$data}
									</ul>
								</div>
		
							</div>
							<!-- end widget content -->
		
						</div>
						<!-- end widget div -->
		
					</div>
					<!-- end widget -->
		
				</article>
				<!-- WIDGET END -->
		
			</div>
		
			<!-- end row -->
		</section>
			<!-- row -->
		


<div id="dialog" title="{_("Create Serie")}">
<p>{_("Name of Serie")} :</p>
<input type="text" id="nameSerie"></div>

<div id="dialog1" title="{_("Create SubSerie")}">
<p>{_("Name Subserie")} :</p>
<input type="text" id="nameSubSerie"></div>

<div id="dialog2" title="{_("Add Type Document")}">
<iframe
	id="ifrtiposseries" name="tiposseries" frameborder='no' width='260px'
	height='300px' aling="center"></iframe></div>

<div id="dialog3" title="{_("Add Indexes")}">
<iframe
	id="ifindex" name="typeindex" frameborder='no' width='260px'
	height='300px' aling="center"></iframe>
</div>

<div id="editdialog" title="{_("Edit Serie or Subserie")}">
<p>{_("Name Serie")} :</p>
<input type="text" id="nameSerie2" name="nameSerie2" ></div>

<div id="seriedelete" title="{_("Alert")}">
  <p>{_("delete Serie")}?</p>
</div>

<div id="subseriedelete" title="{_("Alert")}">
  <p>{_("delete Serie")}?</p>
</div>

{$tales}
 