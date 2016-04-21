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
								<button id="newtype" class="btn btn-primary btn-sm">{_("New Type Document")}</button>
								<button id="newindice" class="btn btn-primary btn-sm">{_("New Field Index")}</button>
								<br><hr>
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

<!--<div id="subseriedelete" title="{_("Alert")}">
  <p>{_("delete Serie")}?</p>
</div>-->

{$tales}

<div id="deletesub1" class="modal fade" >
  <div class="modal-dialog modal-sm" >
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{_("Delete Serie")}</h4>
      </div>
      <div class="modal-body">
	  		<p>{_("delete Serie")}?</p>
		</div>
      	<div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">{_("Cancel")}</button>
	        <button type="submit" class="btn btn-success" data-dismiss="modal" id="deleteSub">{_("Delete")}</button>
      	</div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="deleteserie" class="modal fade" >
  <div class="modal-dialog modal-sm" >
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{_("Delete Serie")}</h4>
      </div>
      <div class="modal-body">
	  		<p>{_("delete Serie")}?</p>
		</div>
      	<div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">{_("Cancel")}</button>
	        <button type="submit" class="btn btn-success" data-dismiss="modal" id="deleteSerie">{_("Delete")}</button>
      	</div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="dialog3" class="modal fade" >
  <div class="modal-dialog" style:'width: 200px;'>
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{_("Add Index")}</h4>
      </div>
      <div class="modal-body">
	  		<div class="form-group">
			  	<iframe
					id="ifindex" name="typeindex" frameborder='no' width='100%'
					height='300px' aling="center"></iframe>
			</div>
		</div>
      	<div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">{_("Close")}</button>
	        <button type="submit" class="btn btn-success" data-dismiss="modal" id="addIndex">{_("Save")}</button>
      	</div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="dialog2" class="modal fade" >
  <div class="modal-dialog" style:'width: 200px;'>
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{_("Add Type Document")}</h4>
      </div>
      <div class="modal-body">
	  		<div class="form-group">
			  	<iframe
					id="ifrtiposseries" name="tiposseries" frameborder='no' width='100%'
					height='300px'>
				</iframe>
			</div>
		</div>
      	<div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">{_("Close")}</button>
	        <button type="submit" class="btn btn-success" data-dismiss="modal" id="addType">{_("Save")}</button>
      	</div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="dialog1" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{_("New SubSerie")}</h4>
      </div>
	  <form class="saveSubserie">
	  	<div class="modal-body">
	  		<div class="form-group">
            	 <label class="input">{_("Sub Serie")}</label>
                 <input type="text" class="form-control" placeholder="{_("SubSerie")}" name="nameSubSerie" id="nameSubSerie">                    
          	</div>    
	  	</div>
      	<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">{_("Close")}</button>
        <button type="submit" class="btn btn-success" data-dismiss="modal" id="saveSub">{_("Save")}</button>
      	</div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="dialog" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{_("New Serie")}</h4>
      </div>
	  <form class="saveSerie">
	  	<div class="modal-body">
	  		<div class="form-group">
            	 <label class="input">{_("Serie")}</label>
                 <input type="text" class="form-control" placeholder="{_("Serie")}" name="nameSerie">                    
          	</div>    
	  	</div>
      	<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">{_("Close")}</button>
        <button type="submit" class="btn btn-success" data-dismiss="modal" id="savaSerie">{_("Save")}</button>
      	</div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="editdialog1" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{_("Edit Serie or Subserie")}</h4>
      </div>
	  <form class="editSerie">
	  	<div class="modal-body">
	  		<div class="form-group">
            	 <label class="input">{_("Serie")}</label>
                 <input type="text" class="form-control" placeholder="{_("Serie")}" id="nameSerie2" name="nameSerie2">                    
          	</div>    
	  	</div>
      	<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">{_("Close")}</button>
        <button type="submit" class="btn btn-success" data-dismiss="modal" id="editSerie">{_("Save")}</button>
      	</div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 

<div id="newIndex" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{_("New Index")}</h4>
      </div>
	  <form class="saveIndex">
	  	<div class="modal-body">
	  		<div class="form-group">
            	 <label class="input">{_("Index")}</label>
                 <input type="text" class="form-control" placeholder="{_("Index")}" name="indexes">                    
          	</div>

          	<div class="form-group">
            	<label class="select">{_("Type")}</label>
                <select id="type" class="form-control" name="type">
                  	<option value=""> -{_("Type")}- </option>
                    {foreach from=$type item=p}
                        <option value="{$p.id_type}">{$p.type}</option>
                    {/foreach}
                </select><i></i>
          	</div>
          	<div class="form-group">
          		<label class="select">{_("Status")}</label>
                    <select id="status" class="form-control" name="status">
	                    <option value=""> -{_("Status")}- </option>
	                    {foreach from=$status item=p}
	                        <option value="{$p.id_status}">{$p.status}</option>
	                    {/foreach}
                    </select>
          	</div>
          	<div class="form-group">
          		<label class="textarea">{_("Description")}</label> 
                <textarea class="form-control" rows="3" name="{_("description")}"></textarea>
          	</div>	        
	  	</div>
      	<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">{_("Close")}</button>
        <button type="submit" class="btn btn-success" data-dismiss="modal" id="savaIn">{_("Save")}</button>
      	</div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 

 <div id="newTypeDoc" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{_("New Type Document")}</h4>
      </div>
	  <form class="saveType">
	  	<div class="modal-body">
	  		<div class="form-group">
            	 <label class="input">{_("Type Document")}</label>
                 <input type="text" class="form-control" placeholder="{_("Type Document")}" name="doctype">                    
          	</div>
          	<div class="form-group">
          		<label class="select">{_("Status")}</label>
                    <select id="status" class="form-control" name="status">
	                    <option value=""> -{_("Status")}- </option>
                          {foreach from=$status item=p}
                              
                              <option value="{$p.id_status}">{$p.status}</option>
                              
                          {/foreach}
                    </select>
          	</div>
          	<div class="form-group">
          		<label class="textarea">{_("Description")}</label> 
                <textarea class="form-control" rows="3" name="{_("description")}"></textarea>
          	</div>	        
	  	</div>
      	<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">{_("Close")}</button>
        <button type="submit" class="btn btn-success" data-dismiss="modal" id="savaTy">{_("Save")}</button>
      	</div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->