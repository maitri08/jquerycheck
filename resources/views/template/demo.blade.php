<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<style>

#area{
width: 500px;
height: 500px;
border:5px solid blue;
}
h2 { 
   top: 200px; 
   left: 0; 
   width: 100%; 
}
.draggable { width: 150px; height: 150px;background: #ccc; }
.movingDiv { 
    border: 1px solid;
    width: 50px; 
    height: 50px; 
    overflow: hidden;
    position: absolute;

}
#nwgrip, #negrip, #swgrip, #segrip, #ngrip, #egrip, #sgrip, #wgrip {
    width: 10px;
    height: 10px;
    background-color: #ffffff;
    border: 1px solid #000000;
}
#nwgrip {
    left: -5px;
    top: -5px;
}
#negrip{
     top: -5px;
     right: -5px;
}
#swgrip{
    bottom: -5px;
    left: -5px;
}
#segrip{
     bottom: -5px;
    right:-5px;
}
#ngrip{
     top: -5px;
    left:50%;
}
#sgrip{
     bottom: -5px;
    left: 50%;
}
#wgrip{
     left:-5px;
     top:50%;
}
#egrip{
     right:-5px;
     top:50%;
}
input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
</style>
<body>
<div >
	<div class="image" id="area">




      <h2>Business Card</h2>


</div>


</div>
<input id="profile-image-upload" type="file" name="image-upload[]" multiple>

<button id="create_block">Add Image</button>

<input type="file" id="files" name="files[]" multiple />
</body>
<script>
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("#area").append($("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/></span><div class='ui-resizable-handle ui-resizable-nw' id='nwgrip'></div><div class='ui-resizable-handle ui-resizable-ne' id='negrip'></div><div class='ui-resizable-handle ui-resizable-sw' id='swgrip'></div><div class='ui-resizable-handle ui-resizable-se' id='segrip'></div><div class='ui-resizable-handle ui-resizable-n' id='ngrip'></div><div class='ui-resizable-handle ui-resizable-s' id='sgrip'></div><div class='ui-resizable-handle ui-resizable-e' id='egrip'></div><div class='ui-resizable-handle ui-resizable-w' id='wgrip'></div></div>").draggable().resizable({
               handles: {
                'nw': '#nwgrip',
                'ne': '#negrip',
                'sw': '#swgrip',
                'se': '#segrip',
                'n': '#ngrip',
                'e': '#egrip',
                's': '#sgrip',
                'w': '#wgrip'
              }
            }));
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });  
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
</script>

</html>
