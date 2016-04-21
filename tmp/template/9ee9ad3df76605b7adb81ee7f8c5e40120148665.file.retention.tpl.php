<?php /* Smarty version Smarty-3.1.8, created on 2016-02-04 15:34:16
         compiled from "/var/www/obelisksoft.com/obelisksoft/views/table/retention.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213777927456b3b5c87efa57-64750888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ee9ad3df76605b7adb81ee7f8c5e40120148665' => 
    array (
      0 => '/var/www/obelisksoft.com/obelisksoft/views/table/retention.tpl',
      1 => 1449006002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213777927456b3b5c87efa57-64750888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'style' => 0,
    'titulo' => 0,
    'data' => 0,
    'tales' => 0,
    'type' => 0,
    'p' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b3b5c8963224_40247028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b3b5c8963224_40247028')) {function content_56b3b5c8963224_40247028($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.menu/jquery.contextMenu.js" type="text/javascript"></script>
	<link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.menu/jquery.contextMenu.css" rel="stylesheet" type="text/css" />
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
<div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">    
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
							<h2>Table de <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h2>
		
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
								<button id="add" class="btn btn-success"><?php echo _("Add");?>
!</button>
								<button id="newtype" class="btn btn-primary btn-sm"><?php echo _("New Type Document");?>
</button>
								<button id="newindice" class="btn btn-primary btn-sm"><?php echo _("New Field Index");?>
</button>
								<br><hr>
								<div class="tree smart-form">
									<ul>
										<?php echo $_smarty_tpl->tpl_vars['data']->value;?>

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

<!--<div id="subseriedelete" title="<?php echo _("Alert");?>
">
  <p><?php echo _("delete Serie");?>
?</p>
</div>-->

<?php echo $_smarty_tpl->tpl_vars['tales']->value;?>


<div id="deletesub1" class="modal fade" >
  <div class="modal-dialog modal-sm" >
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?php echo _("Delete Serie");?>
</h4>
      </div>
      <div class="modal-body">
	  		<p><?php echo _("delete Serie");?>
?</p>
		</div>
      	<div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo _("Cancel");?>
</button>
	        <button type="submit" class="btn btn-success" data-dismiss="modal" id="deleteSub"><?php echo _("Delete");?>
</button>
      	</div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="deleteserie" class="modal fade" >
  <div class="modal-dialog modal-sm" >
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?php echo _("Delete Serie");?>
</h4>
      </div>
      <div class="modal-body">
	  		<p><?php echo _("delete Serie");?>
?</p>
		</div>
      	<div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo _("Cancel");?>
</button>
	        <button type="submit" class="btn btn-success" data-dismiss="modal" id="deleteSerie"><?php echo _("Delete");?>
</button>
      	</div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="dialog3" class="modal fade" >
  <div class="modal-dialog" style:'width: 200px;'>
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?php echo _("Add Index");?>
</h4>
      </div>
      <div class="modal-body">
	  		<div class="form-group">
			  	<iframe
					id="ifindex" name="typeindex" frameborder='no' width='100%'
					height='300px' aling="center"></iframe>
			</div>
		</div>
      	<div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo _("Close");?>
</button>
	        <button type="submit" class="btn btn-success" data-dismiss="modal" id="addIndex"><?php echo _("Save");?>
</button>
      	</div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="dialog2" class="modal fade" >
  <div class="modal-dialog" style:'width: 200px;'>
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?php echo _("Add Type Document");?>
</h4>
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
	        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo _("Close");?>
</button>
	        <button type="submit" class="btn btn-success" data-dismiss="modal" id="addType"><?php echo _("Save");?>
</button>
      	</div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="dialog1" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?php echo _("New SubSerie");?>
</h4>
      </div>
	  <form class="saveSubserie">
	  	<div class="modal-body">
	  		<div class="form-group">
            	 <label class="input"><?php echo _("Sub Serie");?>
</label>
                 <input type="text" class="form-control" placeholder="<?php echo _("SubSerie");?>
" name="nameSubSerie" id="nameSubSerie">                    
          	</div>    
	  	</div>
      	<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo _("Close");?>
</button>
        <button type="submit" class="btn btn-success" data-dismiss="modal" id="saveSub"><?php echo _("Save");?>
</button>
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
        <h4 class="modal-title"><?php echo _("New Serie");?>
</h4>
      </div>
	  <form class="saveSerie">
	  	<div class="modal-body">
	  		<div class="form-group">
            	 <label class="input"><?php echo _("Serie");?>
</label>
                 <input type="text" class="form-control" placeholder="<?php echo _("Serie");?>
" name="nameSerie">                    
          	</div>    
	  	</div>
      	<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo _("Close");?>
</button>
        <button type="submit" class="btn btn-success" data-dismiss="modal" id="savaSerie"><?php echo _("Save");?>
</button>
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
        <h4 class="modal-title"><?php echo _("Edit Serie or Subserie");?>
</h4>
      </div>
	  <form class="editSerie">
	  	<div class="modal-body">
	  		<div class="form-group">
            	 <label class="input"><?php echo _("Serie");?>
</label>
                 <input type="text" class="form-control" placeholder="<?php echo _("Serie");?>
" id="nameSerie2" name="nameSerie2">                    
          	</div>    
	  	</div>
      	<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo _("Close");?>
</button>
        <button type="submit" class="btn btn-success" data-dismiss="modal" id="editSerie"><?php echo _("Save");?>
</button>
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
        <h4 class="modal-title"><?php echo _("New Index");?>
</h4>
      </div>
	  <form class="saveIndex">
	  	<div class="modal-body">
	  		<div class="form-group">
            	 <label class="input"><?php echo _("Index");?>
</label>
                 <input type="text" class="form-control" placeholder="<?php echo _("Index");?>
" name="indexes">                    
          	</div>

          	<div class="form-group">
            	<label class="select"><?php echo _("Type");?>
</label>
                <select id="type" class="form-control" name="type">
                  	<option value=""> -<?php echo _("Type");?>
- </option>
                    <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id_type'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['type'];?>
</option>
                    <?php } ?>
                </select><i></i>
          	</div>
          	<div class="form-group">
          		<label class="select"><?php echo _("Status");?>
</label>
                    <select id="status" class="form-control" name="status">
	                    <option value=""> -<?php echo _("Status");?>
- </option>
	                    <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
	                        <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id_status'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['status'];?>
</option>
	                    <?php } ?>
                    </select>
          	</div>
          	<div class="form-group">
          		<label class="textarea"><?php echo _("Description");?>
</label> 
                <textarea class="form-control" rows="3" name="<?php echo _("description");?>
"></textarea>
          	</div>	        
	  	</div>
      	<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo _("Close");?>
</button>
        <button type="submit" class="btn btn-success" data-dismiss="modal" id="savaIn"><?php echo _("Save");?>
</button>
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
        <h4 class="modal-title"><?php echo _("New Type Document");?>
</h4>
      </div>
	  <form class="saveType">
	  	<div class="modal-body">
	  		<div class="form-group">
            	 <label class="input"><?php echo _("Type Document");?>
</label>
                 <input type="text" class="form-control" placeholder="<?php echo _("Type Document");?>
" name="doctype">                    
          	</div>
          	<div class="form-group">
          		<label class="select"><?php echo _("Status");?>
</label>
                    <select id="status" class="form-control" name="status">
	                    <option value=""> -<?php echo _("Status");?>
- </option>
                          <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                              
                              <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id_status'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['status'];?>
</option>
                              
                          <?php } ?>
                    </select>
          	</div>
          	<div class="form-group">
          		<label class="textarea"><?php echo _("Description");?>
</label> 
                <textarea class="form-control" rows="3" name="<?php echo _("description");?>
"></textarea>
          	</div>	        
	  	</div>
      	<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo _("Close");?>
</button>
        <button type="submit" class="btn btn-success" data-dismiss="modal" id="savaTy"><?php echo _("Save");?>
</button>
      	</div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --><?php }} ?>