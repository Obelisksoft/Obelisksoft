$(document).ready(function(){
  var iviewer = {};
  $("#viewer").iviewer({
    src: "/uploads/0e3a3d45/000267080000010.jpg",
    initCallback: function(){
      iviewer = this;
    }
  });
});
