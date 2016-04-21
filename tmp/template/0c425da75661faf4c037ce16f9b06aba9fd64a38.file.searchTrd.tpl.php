<?php /* Smarty version Smarty-3.1.8, created on 2015-12-05 12:03:20
         compiled from "/var/www/obelisksoft.com/obelisksoft/views/search/searchTrd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1179300565566318d820ef72-99688539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c425da75661faf4c037ce16f9b06aba9fd64a38' => 
    array (
      0 => '/var/www/obelisksoft.com/obelisksoft/views/search/searchTrd.tpl',
      1 => 1449006002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1179300565566318d820ef72-99688539',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_acl' => 0,
    'style' => 0,
    'titulo' => 0,
    'serie' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_566318d82b7a85_28158701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566318d82b7a85_28158701')) {function content_566318d82b7a85_28158701($_smarty_tpl) {?><lu>
  <ul class="nav nav-tabs" role="tablist">
  <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('view_retention')){?>  
    <li class="active"><a href="#">TRD</a></li>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('view_valoration')){?>
    <li><a href="/search/searchTvd/">TVD</a></li>
  <?php }?>  
</ul>

<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('new_document')){?>
  <div class="newposition"><a href="/document/newdocumenttrd/" class="btn btn-primary active" role="button"><?php echo _("New Document");?>
</a></div>
<?php }?>
<br>
<div class="form-group" style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">
  <section id="widget-grid" class="">
    <div class="row">
      <article class="col-sm-12 col-md-12 col-lg-12">
        <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-deletebutton="false">
          <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h2>              
          </header>
          <div>
            <div class="jarviswidget-editbox">
                <!-- This area used as dropdown edit box -->                
            </div>
            <div class="widget-body no-padding">              
              <form role="form" class="smart-form" novalidate="novalidate" method="get" id="formtrd">
                <input type="hidden" value="searchtrd" name="searchtrd" />
                <input type="hidden" value="1" name="trd" /> 
                <fieldset>
                  <section>
                    <div class="col-lg-3 ">
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
  <!--<div class="resulsearch"></div>-->
</div>


<div class="row">
  <div class="col-sm-12">
    <div id="myTabContent1" class="tab-content bg-color-white padding-10">
      <div class="tab-pane fade in active" id="s1">
          <div class="resulttrd">
               
             </div>
      </div>
    </div>
  </div>
</div>  



<!---->
<?php }} ?>