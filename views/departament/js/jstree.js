$(document).ready(function(){
	$('#jstree').jstree({
        

        "core" : {
           // so that create works
           "check_callback" : true
       },
    "plugins" : [ "contextmenu","json_data" ],
    "json_data" : {
        "ajax" : {
            "url" : "./server.php",
                "data" : function (n) {
                return {
                        "operation" : "get_children",
                        "id" : n.attr ? n.attr("id").replace("node_","") : 1
                    };
                }
            }
        }

})
    .bind("create.jstree", function (e, data) {
        $.post(
            "./server.php",
            {
                "operation" : "create_node",
                "id" : data.rslt.parent.attr("id").replace("node_",""),
                "position" : data.rslt.position,
                "title" : data.rslt.name,
                "type" : data.rslt.obj.attr("rel")
            },
            function (r) {
                if(r.status) {
                    $(data.rslt.obj).attr("id", "node_" + r.id);
                }
                else {
                    $.jstree.rollback(data.rlbk);
                }
            }
        );
    })
       
        

     /*   // 7 bind to events triggered on the tree
        $('#jstree').on("changed.jstree", function (e, data) {
          console.log(data.selected);
        });
        // 8 interact with the tree - either way is OK
        $('button').on('click', function () {
          $('#jstree').jstree(true).select_node('child_node_1');
          $('#jstree').jstree('select_node', 'child_node_1');
          $.jstree.reference('#jstree').select_node('child_node_1');
        });*/
    
});

function demo_create() {
    var ref = $('#jstree').jstree(true),
    sel = ref.get_selected();
    if(!sel.length) { return false; }
    sel = sel[0];
    sel = ref.create_node(sel, {"type":"file"});
    if(sel) {
        ref.edit(sel);
    }
};