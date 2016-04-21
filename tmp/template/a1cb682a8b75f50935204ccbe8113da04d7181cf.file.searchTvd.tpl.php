<?php /* Smarty version Smarty-3.1.8, created on 2015-07-06 02:58:17
         compiled from "/var/www/html/obelisksoft/views/search/searchTvd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87805498955770f2d9200a0-77214873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1cb682a8b75f50935204ccbe8113da04d7181cf' => 
    array (
      0 => '/var/www/html/obelisksoft/views/search/searchTvd.tpl',
      1 => 1436151493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87805498955770f2d9200a0-77214873',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55770f2da52210_11687736',
  'variables' => 
  array (
    'style' => 0,
    'titulo' => 0,
    'serie' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55770f2da52210_11687736')) {function content_55770f2da52210_11687736($_smarty_tpl) {?><lu>
  <ul class="nav nav-tabs" role="tablist">
  <li><a href="/search/searchTrd/">TRD</a></li>
  <li class="active"><a href="#">TVD</a></li>
</ul>
<div class="newposition"><a href="/document/newdocumenttvd/" class="btn btn-primary active" role="button">New Document</a></div>
<br>
<div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">
  <section id="widget-grid" class="">
    <div class="row">
      <article class="col-sm-12 col-md-12 col-lg-12">
        <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-deletebutton="false">
          <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2>Registration <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h2>              
          </header>
          <div>
            <div class="jarviswidget-editbox">
                <!-- This area used as dropdown edit box -->                
            </div>
            <div class="widget-body no-padding">              
              <form role="form" class="smart-form" novalidate="novalidate" method="get" id="formtrd">
                <input type="hidden" value="searchtrd" name="searchtrd" /> 
                <fieldset>
                  <section>
                    <div class="col-lg-3 ">
                      <label for="disabledSelect">Serie:</label>
                      <select id="serietvd" class="form-control serietvd" name="serietvd" >
                          <option value=""> -<?php echo _("Select");?>
- </option>
                          <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serie']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
                                
                          <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value['id_valoration'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['valoration'];?>
</option>
                                
                        <?php } ?>
                      </select>

                      <label for="disabledSelect">SubSerie:</label>
                      <select id="subserietvd" class="form-control" name="subserietvd"></select>

                      <label for="disabledSelect"><?php echo _("Document Type");?>
:</label>
                      <select id="typedocmenttvd" class="form-control" name="tipodoc"></select>
                    </div>
                  </section>
                   
                    <fieldset>
                      <div class="row">
                        <div class="fieldstvd"></div>
                      </div>
                    </fieldset>
                  
                </fieldset>

                <footer>
                  <button type="button" class="btn btn-success" id="searchtrd"><span class="fa fa-search"></span><?php echo _("Search");?>
</button>
                </footer>
              </form>



            </div>
            
          </div>
        </div>
      </article>
    </div>   
  </section>
  <div class="resulsearch"></div>
</div>



<!---->
<?php }} ?>