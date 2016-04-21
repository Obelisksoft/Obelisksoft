<link rel="stylesheet" href="{$_layoutParams.root}public/js/jsTree/dist/themes/default/style.min.css" />
<script type="text/javascript" src="{$_layoutParams.ruta_js}libs/jquery-2.0.2.min.js"></script>
<script src="{$_layoutParams.root}public/js/jsTree/dist/jstree.min.js"></script>

<div class="">
    <button type="button" class="btn btn-success btn-sm" onclick="demo_create();"><i class="glyphicon glyphicon-asterisk"></i> Create</button>
    <button type="button" class="btn btn-warning btn-sm" onclick="demo_rename();"><i class="glyphicon glyphicon-pencil"></i> Rename</button>
    <button type="button" class="btn btn-danger btn-sm" onclick="demo_delete();"><i class="glyphicon glyphicon-remove"></i> Delete</button>
</div>
<br>
<br>
<div class="row">
<div id="jstree">
    <!-- in this example the tree is populated from inline HTML -->
    <ul>
      <li class="">Departament
       
      </li>
    </ul>
  </div>
</div>

