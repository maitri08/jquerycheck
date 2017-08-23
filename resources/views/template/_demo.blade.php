<!DOCTYPE HTML>
<html>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PS</title>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		#grid-snap {
  width: 40%;
  background-color: #29e;
  color: #fff;
  font-size: 1.2em;
  border-radius: 4px;
  padding: 2%;
  margin: 5%;
}
	</style>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="//code.interactjs.io/v1.2.9/interact.min.js"></script>
</head>
<body>
	<div class="container">
	<h1>Print Shoots</h1>
		<p>Drag & Drop</p> 
	</div>
<div class="row">
    <div class="col-sm-9">
      <div id="grid-snap">
  <div class="live-demo"><div id="grid-snap">
  Dragging is constrained to the corners of a grid
</div>
</div>
</div>
    </div>
    <div class="col-sm-3">


      <p>Sed ut perspiciatis...</p>
    </div>
  </div>

  <script type="text/javascript">
  	/* The dragging code for '.draggable' from the demo above
 * applies to this demo as well so it doesn't have to be repeated. */

// enable draggables to be dropped into this
interact('.dropzone').dropzone({
  // only accept elements matching this CSS selector
  accept: '#yes-drop',
  // Require a 75% element overlap for a drop to be possible
  overlap: 0.75,

  // listen for drop related events:

  ondropactivate: function (event) {
    // add active dropzone feedback
    event.target.classList.add('drop-active');
  },
  ondragenter: function (event) {
    var draggableElement = event.relatedTarget,
        dropzoneElement = event.target;

    // feedback the possibility of a drop
    dropzoneElement.classList.add('drop-target');
    draggableElement.classList.add('can-drop');
    draggableElement.textContent = 'Dragged in';
  },
  ondragleave: function (event) {
    // remove the drop feedback style
    event.target.classList.remove('drop-target');
    event.relatedTarget.classList.remove('can-drop');
    event.relatedTarget.textContent = 'Dragged out';
  },
  ondrop: function (event) {
    event.relatedTarget.textContent = 'Dropped';
  },
  ondropdeactivate: function (event) {
    // remove active dropzone feedback
    event.target.classList.remove('drop-active');
    event.target.classList.remove('drop-target');
  }
});
  </script>
</body>
</html>      