<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tempalte</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://www.w3schools.com/lib/codemirror.js"></script>
  <style type="text/css">
    .divcanvas {
    /*width: 100px;*/
    height: 500px;
    margin: 10px;
    border: 1px solid black;
}

.divcanvas2 {
    /*width: 100px;*/
    height: 500px;
    margin: 10px;
    border: 1px solid black;
}
  </style>
  <style>
#div1 {
    float: left;
    width: 100px;
    height: 35px;
    margin: 10px;
    padding: 10px;
    border: 1px solid black;
}

#div2 {
    float: left;
    width: 100px;
    height: 35px;
    margin: 10px;
    padding: 10px;
    border: 1px solid black;
}
</style>
</head>
<body>

<div class="container-fluid">
  <h1>My Tempalte</h1>
  <p>Drag & Drop</p> 
</div>
<div class="row">
  <div class="col-sm-8">
  <div class="divcanvas">
<div class="row">

<div class="col-sm-8">
<div id="div2" class='clickable' ondrop="drop(event)" ondragover="allowDrop(event)" ></div>
</div>
<div class="col-sm-4">
    <div class="row">
    <div id="div2" class='clickable' ondrop="drop(event)" ondragover="allowDrop(event)" ></div>
    </div>
    <div class="row"><div class='clickable' id="div2" ondrop="drop(event)" ondragover="allowDrop(event)" ></div>
    </div>
    <div class="row"><div class='clickable' id="div2" ondrop="drop(event)" ondragover="allowDrop(event)" ></div>
    </div>
</div>

    <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)" ></div>

</div>

  </div>
  </div>
  <div class="col-sm-4">
  <div class="divcanvas2">
    <div class="row">
        <div class="col-sm-6">
        <p>Gallery</p>
        <div class="row" id="div1">
          <div ondrop="drop(event)" ondragover="allowDrop(event)">
  <img src="https://s-media-cache-ak0.pinimg.com/originals/67/0e/56/670e56446fee6214cffedc0c244bf4e9.jpg" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
</div>
 <div class="row" id="div1">

  <img draggable="true" ondragstart="drag(event)" src="https://wallpaperscraft.com/image/husky_dog_face_eyes_44555_1920x1080.jpg" id="drag3" width="100" height="100">
</div>
</div>
        </div>
        <div class="col-sm-6">
        <div class="col-sm-6">
          <p>Template</p>
</div>
<div class="col-sm-6">
<p>Page</p>
</div>
        </div>
    </div>
  </div>
  </div>
</div>
<script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));

}

function getCoordinates()
{

}

// Get coordinates

$('#div2').click(function(e)
{   
    var offset_t = $(this).offset().top - $(window).scrollTop();
    var offset_l = $(this).offset().left - $(window).scrollLeft();

    var left = Math.round( (e.clientX - offset_l) );
    var top = Math.round( (e.clientY - offset_t) );

    console("Left: " + left + " Top: " + top);

});

// Add Div 

$('#addPage').click(function(){

})

</script>
</body>
</html>