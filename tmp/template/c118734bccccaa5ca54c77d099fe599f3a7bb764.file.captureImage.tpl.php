<?php /* Smarty version Smarty-3.1.8, created on 2016-02-04 15:05:02
         compiled from "/var/www/obelisksoft.com/obelisksoft/views/document/captureImage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1697051302566318ea39a9e6-52727959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c118734bccccaa5ca54c77d099fe599f3a7bb764' => 
    array (
      0 => '/var/www/obelisksoft.com/obelisksoft/views/document/captureImage.tpl',
      1 => 1454616297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1697051302566318ea39a9e6-52727959',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_566318ea531465_99829522',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'style' => 0,
    'folder' => 0,
    'div' => 0,
    'count' => 0,
    'divs' => 0,
    'serie' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566318ea531465_99829522')) {function content_566318ea531465_99829522($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
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
						   
						   	<h1 class="txt-color-blue"><div class="pagina"></div></h1>
						   
						   <a><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/atras_obelisk.png" class="lefttem" alt="" title="Previous">
						   <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/adelante_obelisk.png" class="righttem" alt="" title="Next">
						   <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/zoom_mas_obelisk.png" id="in" class="zoom-in" alt="" title="Zoom In">
						   <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/zoom_menos_obelisk.png" id="out" class="zoom-out" alt="" title="Zoom Out">
						   <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/agregar_file_obelisk.png" id="addocument" class="file-add-trd" alt="<?php echo $_smarty_tpl->tpl_vars['folder']->value;?>
" title="File Add">
							<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/eliminar_obelisk.png" id="delete" class="file-delete-trd" alt="<?php echo $_smarty_tpl->tpl_vars['folder']->value;?>
" title="Delete"></a>
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
" value="" name="namedocument"></p>
	                          	</label>
		                    
		                      <label for="disabledSelect">Serie:</label>
		                      <select id="serie" class="form-control serie" name="serie" >
		                          <option value=""> -<?php echo _("Select");?>
- </option>
		                          <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serie']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
		                                
		                          <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value['id_retention'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['retention'];?>
</option>
		                                
		                        <?php } ?>
		                      </select>
		
		                      <label for="disabledSelect">SubSerie:</label>
		                      <select id="subserie" class="form-control" name="subserie"></select>
		
		                      <label for="disabledSelect"><?php echo _("Document Type");?>
:</label>
		                      <select id="typedocment" class="form-control" name="tipodoc"></select>
		                    </div>
		                  </section>
		                   
		                    <fieldset>
		                      <div class="row">
		                        <div class="fields"></div>
		                      </div>
		                    </fieldset>
		                  
		                </fieldset>
		
		                <footer>
		                  <button type="button" class="btn btn-primary" id="savetrd"><span class="fa fa-save"></span> <?php echo _("Save");?>
</button>
		                  
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


<!--<div id="moda" title="Save Document?">
<br>
 <dl>
  <dt><span><p align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/warning_blue.png"> <?php echo _("SAVE");?>
 ?</p></span></dt>
</dl>
</div>-->





<div id="moda" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?php echo _("Save Document");?>
</h4>
      </div>
      <div class="modal-body">
        <dt><span><p align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/warning_blue.png"> <?php echo _("SAVE");?>
 ?</p></span></dt>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _("Close");?>
</button>
        <button type="submit" class="btn btn-success" data-dismiss="modal" id="saveDoc"><?php echo _("Save");?>
</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --><?php }} ?>