<?php /* Smarty version Smarty-3.1.8, created on 2015-09-28 18:13:19
         compiled from "/var/www/html/obelisksoft/views/document/viewdocument.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63584500555735c7c0802d9-20346718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35716915c54696c5f36e660036be4d0d41f6dd53' => 
    array (
      0 => '/var/www/html/obelisksoft/views/document/viewdocument.tpl',
      1 => 1443463990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63584500555735c7c0802d9-20346718',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55735c7c33e853_84363709',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'style' => 0,
    'folder' => 0,
    'div' => 0,
    'count' => 0,
    'divs' => 0,
    'namedocument' => 0,
    'serie' => 0,
    'SubSerie' => 0,
    'typedoc' => 0,
    'typeindex' => 0,
    'date' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55735c7c33e853_84363709')) {function content_55735c7c33e853_84363709($_smarty_tpl) {?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.js" ></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/cssprueba/jquery.mousewheel.min.js" ></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/cssprueba/jquery.iviewer.js" ></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/cssprueba/jquery.iviewer.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/style2.css" />
        <style>
            .viewer
            {
                width: 100%;
                height: 600px;
                border: 1px solid black;
                position: relative;
            }
            
            .wrapper
            {
                overflow: hidden;
            }
        </style>
<div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">
<section id="widget-grid" class="">
	<!-- row -->
	<div class="row">
		<!-- NEW WIDGET START -->
		<article class="col-sm-8">
						
			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-white" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false">
				<!-- widget options:
				usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false" >

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
					<span class="widget-icon"> <i class="fa fa-file-image-o"></i> </span>
					<h2><?php echo _("Document");?>
! </h2>

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

						<div class="wrapper">
						   <span>
						   
						   
						   <a><div class="pagina"></div>
						   	<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/atras_obelisk.png" class="lefttem" alt="" title="Previous">
						   <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/adelante_obelisk.png" class="righttem" alt="" title="Next">
						   <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/zoom_mas_obelisk.png" id="in" class="zoom-in" alt="" title="Zoom In">
						   <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/zoom_menos_obelisk.png" id="out" class="zoom-out" alt="" title="Zoom Out">
						   <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/agregar_file_obelisk.png" id="addocuments" class="file-add-trd" alt="<?php echo $_smarty_tpl->tpl_vars['folder']->value;?>
" title="File Add">
							<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/eliminar_obelisk.png" id="delete" class="file-delete-trd" alt="<?php echo $_smarty_tpl->tpl_vars['folder']->value;?>
" title="Delete">
								</a>
						<!--<div id="viewer" class="viewer" alt='<?php echo $_smarty_tpl->tpl_vars['div']->value;?>
' scr='<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
' tal="<?php echo $_smarty_tpl->tpl_vars['folder']->value;?>
"></div>-->
						<br>
						<br>
						     <?php echo $_smarty_tpl->tpl_vars['div']->value;?>

						     <?php echo $_smarty_tpl->tpl_vars['divs']->value;?>

						   </span>
						   
						</div>

					</div>
					
					<!-- end widget content -->

				</div>
				<!-- end widget div -->

			</div>
			<!-- end widget -->

		</article>
		
          <article class="col-sm-4 col-md-4 col-lg-4">
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
                <h2><?php echo _("Data");?>
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
                <div class="widget-body no-padding">              
		              <form role="form" class="smart-form" novalidate="novalidate" method="get" id="formtrd">
		                <input type="hidden" value="searchtrd" name="searchtrd" /> 
		                <input type="hidden" value="1" name="trd" />
		                 <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['folder']->value;?>
" name="folder" />
		                <fieldset>
		                  <section>
		                    <div class="col-lg-12 ">
		                    	<label class="input"> <i class="icon-append fa fa-archive"></i>
	                            	<input type="text" class="form-control" placeholder="<?php echo _("Name Document");?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['namedocument']->value)===null||$tmp==='' ? '' : $tmp);?>
" readonly></p>
	                          	</label>
		                      <label for="disabledSelect">Serie:</label>
		                      <input type="text" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['serie']->value)===null||$tmp==='' ? '' : $tmp);?>
" readonly></p>
		                      		
		                      <label for="disabledSelect">SubSerie:</label>
		                      <input type="text" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SubSerie']->value)===null||$tmp==='' ? '' : $tmp);?>
" readonly></p>
		
		                      <label for="disabledSelect"><?php echo _("Document Type");?>
:</label>
		                      <input type="text" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['typedoc']->value)===null||$tmp==='' ? '' : $tmp);?>
" readonly></p>
		                    </div>
		                  </section>
		                  <br><br>
		                  
		                  	<fieldset>
		                      <div class="row">
		                    	<div class="col-lg-12 ">
		                    	<?php  $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['typeindex']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date']->key => $_smarty_tpl->tpl_vars['date']->value){
$_smarty_tpl->tpl_vars['date']->_loop = true;
?>
			                      <label for="disabledSelect"><?php echo $_smarty_tpl->tpl_vars['date']->value['indexes'];?>
:</label>
			                      <input type="text" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['date']->value['value'])===null||$tmp==='' ? '' : $tmp);?>
" readonly></p>
		                      	<?php } ?>
		                    </div>
		                    </div>
		                    </fieldset>

		                  
		                   
		                    <fieldset>
		                      <div class="row">
		                        <div class="fields"></div>
		                      </div>
		                    </fieldset>
		                  
		                </fieldset>
		
		                <footer>
		                  <!--<button type="button" class="btn btn-primary" id="savetrd"><span class="fa fa-save"></span> Save</button>-->
		                  
		                </footer>
		              </form>
               
                <!-- end widget content -->
              </div>
              <!-- end widget div -->
            </div>
              <!-- end widget -->
          </article>
	</div>
</select>
</div>


<div id="uploadlos" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?php echo _("Upload Logo");?>
</h4>
      </div>
	  	<div class="modal-body">
	  		<form action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
document/uploadTemp/" class="dropzone" id="mydropzones" name="formzone"></form>
	  	</div>
      	<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo _("Close");?>
</button>
        <button type="button" class="btn btn-success" data-dismiss="modal" id="uploadLos
        "><?php echo _("Upload");?>
</button>
      	</div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<?php }} ?>