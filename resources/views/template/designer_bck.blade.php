<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Designer Draggable - Default functionality</title>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="{{ asset('common/css/bootstrap.min.css')}}">  
      <link rel="stylesheet" href="{{ asset('common/css/style1.css')}}">
      <link rel="stylesheet" type="text/css" href="http://bgrins.github.io/spectrum/spectrum.css">

      <meta name="csrf_token" content="{{ csrf_token() }}" />
      <style>
         .draggableRect { width: 50px; height: 40px;background: #c5c5c5;position: absolute !important }
         #safety-line{background-image:url('');
         background-size:cover;
         background-position: center; margin: auto;}
       /*  #bleed-line{
          overflow: hidden;z-index: 999999999;position: relative;
         }*/
         #nwgrip, #negrip, #swgrip, #segrip, #ngrip, #egrip, #sgrip, #wgrip {
         width: 10px;
         height: 10px;
         background-color: #a5d048;
         border: 1px solid #ffffff;
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
         .pip {
         display: inline-block;
         position: absolute !important;
         }
         .optionPanel {
          left: 630px;
          top: 105px;
          width: 90%;
          margin: 20px auto;
         }
         .ui-icon, .ui-widget-content .ui-icon {
          background-image :url('') !important;
         }
         /*.remove {
         display: block;
         background: #444;
         border: 1px solid black;
         color: white;
         text-align: center;
         cursor: pointer;
         max-height: 450px;
         max-width: 100%;
         }*/
         .imageThumb {
         max-height: 300px;
         max-width: 100%;
         padding: 1px;
         cursor: pointer;
         }
         .text-coordinate{
          display: none;
         }
         .alignment{
         	cursor: pointer;
         }
	.decoration {
    display: inline-block;
    text-decoration: underline;
    margin-right: 10px;
      cursor:pointer
}
.fontitalic {
    display: inline-block;
    font-style: italic;
    margin-right: 10px;
    cursor:pointer
}
.fontbold{
    display: inline-block;
    font-weight: bold;
    margin-right: 6px;
      cursor:pointer
}
.colorplt{
display: inline-block;
    float: initial;
      cursor:pointer

}
button#savencontinue {
    background-color: #a5d048;
    border: none;
    padding: 6px 10px;
    border-radius: 5px;
    color: #fff;
    outline: none !important;
}
button#savenexit {
    background-color: #a5d048;
    border: none;
    padding: 6px 10px;
    border-radius: 5px;
    color: #fff;
    outline: none !important;
}
.modal-body{
    text-align: center;
}
.modal-dialog {
    /*margin: 0;
    display: table;
    height: 100%;
    width: 100%;*/
    margin-top: 10%;
    width: 300px;
}
.modal-content {
    width: 300px;
    margin: auto;
}
.txtalignment-sec {
    display: inline-block;
    margin: 0 2px;
    width: 30px;
    height: 26px;
    cursor: pointer;
    background: #000;
}
.modifycoord {
    margin-top: 7px;
    margin-bottom: 20px;
}
.postxtY,.postxtX,.postxtheight,.postxtwidth{
    width: 34px;
    margin-right: 5px;
    text-align: center;
    margin-left: 4px;
}
.posXtxt,.posYtxt,.poswidthtxt,.posheighttxt{
   width: 34px;
    margin-right: 5px;
    text-align: center;
    margin-left: 4px;
        margin-top: 30px;
}
.posXimg,.posYimg,.poswidthimg,.posheightimg{
    width: 34px;
    margin-right: 5px;
    text-align: center;
    margin-left: 4px;
    margin-top: 30px;
}
      </style>
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="{{ asset('common/js/bootstrap.min.js')}}"></script>   
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="http://bgrins.github.io/spectrum/spectrum.js"></script>
      <script src="{{asset('common/js/jquery.panzoom.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,600,700|Pacifico|Passion+One|Roboto+Mono:400,500,700|Sedgwick+Ave+Display&amp;subset=latin-ext" rel="stylesheet">
   </head>
   <body>
      <div class="bar-1">
        <div class="logo">
            <img src="{{ asset('common/images/printshoot-logo.png')}}">
        </div>
        <div class="bar1-center">
      	<ul class="list-inline ul-1">
      		<li><a class="btn-shape" id="create_block" data-toggle="tooltip" data-placement="top" title="Shape"><img src="{{ asset('common/images/shape-icon.png')}}"></a></li>
          <li>|</li>
      		<li><a class="btn-text" id="create_text" data-toggle="tooltip" data-placement="top" title="Create Text"><img src="{{ asset('common/images/text-icon.png')}}"></a></li>
      	</ul>
        <ul class="list-inline ul-2">
          <li><span>BACKGROUND IMAGE</span><input type='file' id='getval' name="background-image" onchange="readURL(event)" /></li>
          <li><span>EMBELLISHMENT</span><input type="file" id="stickers" name="stickers[]" multiple /></li>
        </ul>
        </div>
      </div>
      <div class="bar-2">
      <div class="left-sidebar">
          <h5>Pages</h5>
          <ul class="list-unstyled">
            <li><img src="{{ asset('common/images/page-icon.png')}}"> Page1</li>
          </ul>
       <!--    <button class="zoom-in">Zoom In</button>
          <button class="zoom-out">Zoom Out</button>
          <input type="range" class="zoom-range">
          <button class="reset">Reset</button> -->
           <!-- <input id="btn-Preview-Image" type="button" value="Preview" />
            <a id="btn-Convert-Html2Image" href="#">Download</a> -->
            <button id="save-coordinate">Save</button>
      </div>
      <div class="central-canvas" id="panzoom">
      <div id="bleed-line" class="bleed-line">
      <div id="safety-line" style="width:{{$canvaswidth}}px;height:{{$canvasheight}}px">
      <div id="rightCanvas" class="canvasmodule">
         <div id="shapePanel">
         </div>
      </div>
      </div>
      </div>
    
      </div>
      <div class="right-sidebar">
      <input type="hidden" name="pageproductsize" id="pageproductsize" value="{{$pageproductsize}}">
      <input type="hidden" name="producttype"  id="producttype" value="{{$producttype}}">
      	<div id="area">
      	</div>
      	<div class="customtextPanel"> <h5>Textarea</h5>
        </div>
      	
      </div>

      </div>
      
      
      
      <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
        <div >
    <div class="modal-content">

      <div class="modal-body">
      <label>Please Enter File Name</label>
      <div class="previewImage" id="previewImage"></div>
        <input type="text" id="filename" name="filename" />
	
	<div style="text-align:center;margin-top: 30px;">	
	<button id="savenexit" class="save-template" data-task="exit">Save And Exit</button>
	<button id="savencontinue" class="save-template" data-task="continue">Save And Continue</button>
	</div>	
      </div>
      </div>
    </div>

  </div>
</div>

      
      
   </body>


<!-- <script>
$("#bleed-line").panzoom({
  $zoomIn: $(".zoom-in"),
  $zoomOut: $(".zoom-out"),
  $zoomRange: $(".zoom-range"),
  $reset: $(".reset"),
  disablePan: true
  // $(this).( "option", "transition", false ),
});
</script> -->

<script>
   // Code for generating draggable Text
    $(document).ready(function () {
        var designertext = 1;
        var counter = 1;
        $("#create_text").click(function () {
          $("#shapePanel").append($('<div class="draggableText" data-unique="draggableText'+designertext+'"  id="draggableText'+ designertext + '"><span class="posX text-coordinate"></span><span class="posY text-coordinate"></span><span class="poswidth text-coordinate"></span><span class="posheight text-coordinate"></span><span class="posrotate text-coordinate"></span><div class="textShow">Click here To edit Text</div></div>').draggable({
            containment: '#rightCanvas'
          }));
          designertext++;
        });
    });
            
    // Code for generating Textarea panel for the Text 
    var counter = 1;
    $(document).on("mousemove", ".draggableText", function () {

      // Code for finding the coordinates of text box start
      var parentcoord = $('.canvasmodule').position();
      var grntparntL = $('#shapePanel').position().left;
      var coord = $(this).position();
      var posLayoutleft = coord.left - grntparntL;
      var posLayoutright = coord.top - parentcoord.top;
      var width = $(this).width();
      var height = $(this).height();
      $(this).find(".posX").text(posLayoutleft);
      $(this).find(".posY").text(posLayoutright);
      $(this).find(".poswidth").text(width);
      $(this).find(".posheight").text(height);
    // Code for finding the coordinates of text box end
      var textBoxid = this.id;
      var uniqueclass = $(this).data('unique');
      var uniquedataClass = $("."+uniqueclass).length;

      $('#' + textBoxid).resizable({
        containment: ".canvasmodule"
      });
    
    // code to check if textbox area already exist
      if(uniquedataClass==0){
        var newTextBoxDiv = $(document.createElement('div')).attr("id", 'TextBoxDiv' + counter);
        newTextBoxDiv.after().html('<div class="optionPanel'+' '+uniqueclass+'" id="optionPanel' + counter + '">' + '<textarea id="textInsert' + counter + '" class="textInsert" placeholder="Enter Your Text" type="text"></textarea><input type="number" value="12" id="textSizeDropDown' + counter + '" name="fontSize" class="textSizeDropDown" min="1" max="72"><select id="textFontDropDown' + counter + '" class="textFontDropDown"><option value="Lobster,cursive">Lobster</option><option value="Roboto Mono, monospace">Roboto Mono</option><option value="Pacifico, cursive">Pacifico</option><option value="Sedgwick Ave Display,cursive">edgwick Ave Display</option><option value="Passion One, cursive">Passion One</option><option value="Open Sans, sans-serif">Open Sans</option></select><div class="fontbold" id="weightage'+counter+'">B</div><div class="fontitalic" id="txtstyling'+counter+'">I</div><div class="decoration" id="decoration'+counter+'">U</div><div data-align="left" class="alignment'+counter+' txtalignment-sec"><img src="{{asset("common/images/align-left.png")}}" alt="" /></div><div data-align="center"  class="alignment'+counter+' txtalignment-sec"><img src="{{asset("common/images/align-center.png")}}" alt="" /></div><div data-align="right" class="alignment'+counter+' txtalignment-sec"><img src="{{asset("common/images/align-right.png")}}" alt="" /></div><div class="colorplt"><input type="text" class="full" id="full'+ counter +'"/></div><div class="modifycoord">X:<input type="text" class="postxtX" value="'+posLayoutleft+'" readonly>Y:<input type="text" class="postxtY" value="'+posLayoutright+'" readonly>W:<input type="text" class="postxtwidth" value="'+width+'">H:<input type="text" class="postxtheight" value="'+height+'">R:<input type="text" class="postxtrotate" value=""></div><div>ROTATION SLIDER:</div><div id="slider" data-textrotate="'+uniqueclass+'" class="slider"></div><div class="removetxt">Remove</div></div>');
        newTextBoxDiv.appendTo(".customtextPanel");

      }


        $(".slider").slider({
          min: 0,
          max: 360,
          slide: function(event, ui) {
            // Set the slider's correct value for "value".
            $(this).slider('value', ui.value);
            var txtrotatefield = $(this).data('textrotate');
            $("#"+txtrotatefield).css('transform', 'rotate(' + ui.value + 'deg)')
            $('.optionPanel.'+uniqueclass).find('.postxtrotate').val(ui.value);
          }
        });



      $('.shapeboxcord').hide();
       $('.imgtagcord').hide();
      $('.optionPanel').hide();
      $('.optionPanel.'+uniqueclass).show();
      $('.optionPanel.'+uniqueclass).find('.postxtX').val(posLayoutleft);
      $('.optionPanel.'+uniqueclass).find('.postxtY').val(posLayoutright);
      $('.optionPanel.'+uniqueclass).find('.postxtwidth').val(width);
      $('.optionPanel.'+uniqueclass).find('.postxtheight').val(height);


         // $('.right-sidebar').click(function () {
         //      var txtwidth = $('.postxtwidth').val();
         //      var txtheight = $('.postxtheight').val();
         //      $('#'+textBoxid).css('width',txtwidth); 
         //      $('#'+textBoxid).css('height',txtheight); 
         //      $('#'+textBoxid).find(".poswidth").text(txtwidth);
         //      $('#'+textBoxid).find(".posheight").text(txtheight);
         //    });


      var content = $('#textInsert' + counter).val();
      $('#textInsert' + counter).keyup(function () {
        if (this.value != content) {
          content = this.value.replace(/\n/g, "<br />");
          $('#' + textBoxid).find('.textShow').text(content);
          }
      });


      $('#textSizeDropDown' + counter).keyup(function () {
        var textSize = $(this).val();
        $('#' + textBoxid).css('font-size', textSize+'px');
      });
      $('#textFontDropDown' + counter).change(function () {
        var textFont = $(this).val();
        $('#' + textBoxid).css('font-family', textFont);
      });



    $('.alignment'+ counter).click(function(){
		var shiftTxt = $(this).data('align');
		$('#'+textBoxid).find('.textShow').css('text-align',shiftTxt);
  	});

    $('#decoration'+ counter).click(function(){  	
	    $(this).toggleClass('active');

	    if($(this).hasClass('active')){
			$('#' + textBoxid).css('text-decoration','underline');
		}
		else{
			$('#' + textBoxid).css('text-decoration','');
		}
	});

	$('#weightage'+ counter).click(function(){
	$(this).toggleClass('active');
	if($(this).hasClass('active')){
	$('#' + textBoxid).css('font-weight','bold');
	}
	else{
	$('#' + textBoxid).css('font-weight','');
	}
	});

	$('#txtstyling'+ counter).click(function(){
	$(this).toggleClass('active');
	if($(this).hasClass('active')){
	$('#' + textBoxid).css('font-style','italic');
	}
	else{
	$('#' + textBoxid).css('font-style','');
	}
	});

        //color palette start
          $("#full"+counter).spectrum({
          color: "#848383",
          showInput: true,
          className: "full-spectrum",
          showInitial: true,
          showPalette: true,
          showSelectionPalette: true,
          maxSelectionSize: 10,
          preferredFormat: "hex",
          localStorageKey: "spectrum.demo",
          move: function (color) {
              
          },
          show: function () {
          
          },
          beforeShow: function () {
          
          },
          hide: function () {
          
          },
          change: function(color) {

          
          },
          palette: [
              [ "rgb(67, 67, 67)", "rgb(102, 102, 102)",
              "rgb(204, 204, 204)", "rgb(217, 217, 217)","rgb(255, 255, 255)"],
              ["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
              "rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"], 
              ["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)", 
              "rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)", 
              "rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", 
              "rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)", 
              "rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)", 
              "rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
              "rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
              "rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
              "rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", 
              "rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
          ]
        }); 
          //color palette end
        var parntembId;

        // $('.full-spectrum').on('click',function(){
        //   if(uniquedataClass==0){
        //   $('.full-spectrum').attr('id','palette'+uniqueclass);
        //    $('.sp-choose').attr('id','palette'+uniqueclass);
        // } 
        //      parntembId =  $(this).parent().find('.full').attr('id');
        // });

        $(".sp-choose").click(function(){
            //$(this).addClass("efewfweewfwfwef")
            var a = $(this).parent().siblings(".sp-thumb").find(".sp-thumb-active").children(".sp-thumb-inner").css('background-color');
            //var a = $(this).parent().addClass("avabababab")
            //alert(a);
	    var newid = $(this).attr('eleId');
	    //alert(newid)
            var b = $('#'+newid);
            //console.log(uniqueclass);
            $(b).css("color",a);
	    $(this).removeAttr("eleId");
        });
	
	$(".sp-replacer").click(function(){
	//alert(1)
	 var id = $(this).parent().parent().attr('class').split(' ')[1];
	 console.log(id)
	 $(".sp-choose").attr("eleId",id);
	 	})

      // $('.sp-choose').on('click',function(){
      //   console.log(this);
      //   var paletclr = this.id;
      //     var embclr = $('#'+paletclr).parent().parent().parent().attr('id');
      //     console.log(embclr);
      //     var colorplate = $('.'+uniqueclass).find('.sp-preview-inner').attr('style');
      //     // var embedId  = $('.sp-preview').parent().parent().find('.full').attr('id');
      //     // alert(colorplate);
      //     console.log(uniqueclass);
      //     $('#'+uniqueclass).css('color', colorplate);
      // })

    
        counter++;


        
         
    });


      $(document).on('click','.removetxt',function(){
        var prntClass = $(this).parent().attr('class').split(' ')[1];
        $(this).parent().parent().remove();
        $('#'+prntClass).remove();

      });

      // Code to create Draggble shape block
    $( function() {
       var boXno = 1;
      $("#create_block").click(function () {
        $("#shapePanel").append($('<div id="draggableRect'+boXno+'"  class="draggableRect"><ul class="list-unstyled" style="display:none;"><li class="posX" ></li><li class="posY" ></li><li class="poswidth" ></li><li class="posheight" ></li><li class="posrotate" ></li></ul><div class="ui-resizable-handle ui-resizable-nw" id="nwgrip" ></div><div class="ui-resizable-handle ui-resizable-ne" id="negrip" style="display:none;"></div><div class="ui-resizable-handle ui-resizable-sw" id="swgrip" style="display:none;"></div><div class="ui-resizable-handle ui-resizable-se" id="segrip" style="display:none;"></div></div>').draggable({containment: "#rightCanvas"}));
        boXno++;
      });

 
    });
      
    // code to make the shape block resizable 
    $(document).on('mousemove','.draggableRect',function(e){   
      var shapeId= this.id;
      $(this).find('.ui-resizable-handle').show(); // not if it is the handle
          $(this).resizable({containment: "#rightCanvas"}).mousemove(function(){
          var parentcoord = $('.canvasmodule').position();
          var grntparntL = $('#shapePanel').position().left;
          var coord = $(this).position();
          var posLayoutleft = (coord.left - grntparntL);
          var posLayoutright = coord.top - parentcoord.top;
          var width = $(this).width();
          var height = $(this).height();
          $(this).find(".posX").text(posLayoutleft);
          $(this).find(".posY").text(posLayoutright)
          $(this).find(".poswidth").text(width)
          $(this).find(".posheight").text(height);

          // $(".customtextPanel").html("");
           $('.customtextPanel').html($('<div class="shapeboxcord" data-rotationfield="shapeboxcord'+shapeId+'">X:<input type="text" value="'+posLayoutleft+'"  class="posXtxt" readonly>Y:<input type="text" class="posYtxt" value="'+posLayoutright+'" readonly>W:<input type="text" class="poswidthtxt" value="'+width+'">H:<input type="text" class="posheighttxt" value="'+height+'" >R:<input type="text" class="rotateshape" id="rotateshape'+shapeId+'" value="" ><div>ROTATION SLIDER:</div><div id="slidershape" data-shaperotate="'+shapeId+'" class="slider"></div><div class="removeShape" data-textparent="'+shapeId+'">Remove</div></div>'));

            $(".slider").slider({
              min: 0,
              max: 360,
              slide: function(event, ui) {
                // Set the slider's correct value for "value".
                $(this).slider('value', ui.value);
                var shaperotate = $(this).data('shaperotate');
                $("#"+shaperotate).css('transform', 'rotate(' + ui.value + 'deg)')
                $('#'+shapeId).find(".posrotate").text(ui.value);
                $('#rotateshape'+shapeId).val(ui.value);
              }
            });




            $('.right-sidebar').click(function () {
              var shapewidth = $('.poswidthtxt').val();
              var shapeheight = $('.posheighttxt').val();
              // var shapeposX = $('.posXtxt').val();
              // var shapeposY = $('.posYtxt').val(); 
              $('#'+shapeId).css('width',shapewidth); 
              $('#'+shapeId).css('height',shapeheight); 
              $('#'+shapeId).find(".poswidth").text(shapewidth);
              $('#'+shapeId).find(".posheight").text(shapeheight);
              //  $('#'+shapeId).find(".posX").text(shapeposX);
              // $('#'+shapeId).find(".posY").text(shapeposY);
            });
        });
          // $(this).find(".posY").text( "(" + width + "," + height + ")" );});  
    });

      $(document).on('click','.removeShape',function(){
        var rmvShape =  $(this).data('textparent');
        $('#'+rmvShape).remove();
        $('.shapeboxcord').remove();
      });

    
    // Resizable block pointer show and hide
    $(document).mouseover(function(e) {
      if($(e.target).is(".draggableRect") ) {}
        else if($(e.target).is(".draggableText") ){
          $('.draggableText').css('border','');
          $(e.target).css('border','1px dashed #848383');
        }
        else{
         $(".draggableRect").find(".ui-resizable-handle").hide();}
    });
          



    //Code for setting dynamic background image 
    function readURL(event){
     var getImagePath = URL.createObjectURL(event.target.files[0]);
     $('#safety-line').css('background-image', 'url(' + getImagePath + ')');
      if($('.rmvbckimg').hasClass('active')){

      }
      else{
         $('#safety-line').append($('<div class="rmvbckimg active">X</div>'));
      }
    }   

   $(document).on('click','.rmvbckimg',function(){
       $('#safety-line').css('background-image', '');
       $(this).remove();
    });  



</script>


<script>

// Code to upload ultiple image 
  $(document).ready(function() {
    if (window.File && window.FileList && window.FileReader) {
        var imgThumb = 0;
      $("#stickers").on("change", function(e) {
        var files = e.target.files,
        filesLength = files.length;
        for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("#shapePanel").append($("<div id=\"pip" +imgThumb+ "\" class=\"pip\">" +
                  "<img id=\"imageThumb" +imgThumb+ "\" posx='' posrot='' posy='' posheight='' poswidth='' class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/><span class=\"posX\"></span></div>").draggable({  containment: "#rightCanvas"}));
                // $('.imageThumb').resizable();
                 // $("#frogImg").resizable({aspectRatio: true});
                // $(".remove").click(function(){
                //   $(this).parent(".pip").remove();
                // });  
          });
          fileReader.readAsDataURL(f);
            imgThumb++;
          }

        });
    } else {
          alert("Your browser doesn't support to File API")
        }
  });


  // Code to resize image and find the co-ordinates     
  $(document).on("mouseover",".imageThumb",function(){
    $(this).resizable({containment: "#rightCanvas",aspectRatio: true}).mousemove(function(){
      
      var parentcoord = $('.canvasmodule').position();
      var $img = $(this);
      var imGid = $img.attr("id");
      var outerDiv = $(this).parent().parent().attr('id');
      var coord = $('#'+outerDiv).position();
      var grntparntL = $('#shapePanel').position().left;
      var posLayoutleft = coord.left - grntparntL;
      var posLayoutright = coord.top - parentcoord.top;
      var width = $('#'+imGid).width();
      var height = $('#'+imGid).height();
     
      $('#'+imGid).attr('posheight',height);
      $('#'+imGid).attr('poswidth',width);
      $('#'+imGid).attr('posx',posLayoutleft);
      $('#'+imGid).attr('posy',posLayoutright);

       $('.customtextPanel').html($('<div class="imgtagcord">X:<input type="text" value="'+posLayoutleft+'"  class="posXimg" readonly>Y:<input type="text" class="posYimg" value="'+posLayoutright+'" readonly>W:<input type="text" class="poswidthimg" value="'+width+'">H:<input type="text" class="posheightimg" value="'+height+'" >R:<input type="text" class="rotateimg" value="" ><div>ROTATION SLIDER:</div><div id="imgslider" data-imgrotate="'+imGid+'" class="slider"></div><div class="removeimg" data-textparent="'+imGid+'" >Remove</div></div>'));

         $(".slider").slider({
              min: 0,
              max: 360,
              slide: function(event, ui) {
                // Set the slider's correct value for "value".
                $(this).slider('value', ui.value);
                var imgrotate = $(this).data('imgrotate');
                $("#"+imgrotate).css('transform', 'rotate(' + ui.value + 'deg)')
                $('#'+imgrotate).attr("posrot",ui.value);
                // $(this).find('.rotateimg').val(ui.value);
              }
            });

        // $('.right-sidebar').click(function () {
        //       var imgwidth = $('.poswidthimg').val();
        //       var imgheight = $('.posheightimg').val();
        //       $('#'+imGid).css('width',imgwidth); 
        //       $('#'+imGid).css('height',imgheight); 
        //       $('#'+imGid).attr("poswidth",imgwidth);
        //       $('#'+imGid).attr("posheight",imgheight);
        // });
    });
  });


    $(document).on('click','.removeimg',function(){
    var imgtoremove = $(this).data('textparent');
    $('#'+imgtoremove).remove();
    $('.imgtagcord').remove();
  })





//*
// var element = $("#panzoom"); // global variable
// var getCanvas; // global variable

//     $("#btn-Preview-Image").on('click', function () {
//          html2canvas(element, {
//          onrendered: function (canvas) {
//                 $("#previewImage").append(canvas);
//                 getCanvas = canvas;
//              }
//          });
//     });
// //*


$("#btn-Convert-Html2Image").on('click', function () {
    var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    $("#btn-Convert-Html2Image").attr("download", "your_pic_name.png").attr("href", newData);
});




$( function() {
var element = $("#bleed-line"); // global variable
var getCanvas; // global variable
      $("#save-coordinate").click(function (){
      
        $('#myModal').modal('show');

        html2canvas(element, {
         onrendered: function (canvas) {
                $("#previewImage").html(canvas);
                getCanvas = canvas;
             }
         });
      });

      $('.save-template').click(function(){
        var templatetask = $(this).data('task');
        var filename = $('#filename').val();
        var producttype = $('#producttype').val();
        var productsize = $('#pageproductsize').val();
       if(filename==''){
        alert('Kindly enter the filename');
        return false;
       }
       else{
       var uniqueclass = $(".draggableRect").length;
       boXjson=[];
       imGjson=[];
       txtJson =[];
      for(var i=1;i<=uniqueclass;i++){
        var boXid = ("draggableRect"+i);
        var offsetX = $("#draggableRect"+i).find(".posX").text();
        var offsetY = $("#draggableRect"+i).find(".posY").text();
        var boXwidth = $("#draggableRect"+i).find(".poswidth").text();
        var boXheight = $("#draggableRect"+i).find(".posheight").text();
        item = {}
        item ["id"] = boXid;
        item ["offsetX"] = offsetX;
        item ["offsetY"] = offsetY;
        item ["boXwidth"] = boXwidth;
        item ["boXheight"] = boXheight;
        boXjson.push(item);
      }

     
      var imgUniqueClass = $(".imageThumb").length;
      for(j=1;j<=imgUniqueClass;j++){
        var imgId = ("imageThumb"+j);
        var offsetX = $("#imageThumb"+j).attr('posx');
        var offsetY = $("#imageThumb"+j).attr('posy');
        var imgwidth = $("#imageThumb"+j).attr('poswidth');
        var imgheight = $("#imageThumb"+j).attr('posheight');
        var imgupload = $("#imageThumb"+j).attr('src');
        item = {}
        item ["id"] = imgId;
        item ["offsetX"] = offsetX;
        item ["offsetY"] = offsetY;
        item ["imgwidth"] = imgwidth;
        item ["imgheight"] = imgheight;
        item ["imgupload"] = imgupload;
        imGjson.push(item);
        
      }


      var txtUnique = $(".draggableText").length;
      for(k=1;k<=txtUnique;k++){
        var txtId = ("draggableText"+k);
        var offsetX = $("#draggableText"+k).find('.posX').text();
        var offsetY = $("#draggableText"+k).find('.posY').text();
        var txtwidth = $("#draggableText"+k).find('.poswidth').text();
        var txtheight = $("#draggableText"+k).find('.posheight').text();
        var txtcontent = $("#draggableText"+k).find('.textShow').text();
        var txtsize = $("#draggableText"+k).css('font-size');
        var txtfont = $("#draggableText"+k).css('font-family');
        var txtcolor = $("#draggableText"+k).css('color');
        var txtalign = $("#draggableText"+k).find('.textShow').css('text-align');
        var txtdecoration = $("#draggableText"+k).css('text-decoration');
        var txtweightage = $("#draggableText"+k).css('font-weight');
        var txtstyling = $("#draggableText"+k).css('font-style');
        item = {}
        item ["txtId"] = imgId;
        item ["offsetX"] = offsetX;
        item ["offsetY"] = offsetY;
        item ["txtwidth"] = txtwidth;
        item ["txtheight"] = txtheight;
        item ["txtcontent"] = txtcontent;
        item["txtsize"] = txtsize;
        item["txtfont"] = txtfont;
        item["txtcolor"] = txtcolor;
        item["txtalign"] = txtalign;
        item["txtdecoration"] = txtdecoration;
        item["txtweightage"] = txtweightage;
        item["txtstyling"] = txtstyling;
        txtJson.push(item);   
      }

           $.ajax({
             type: "POST",
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
         data:{shaperesult: JSON.stringify(boXjson),imgresult: JSON.stringify(imGjson),txtresult:JSON.stringify(txtJson),templatename:filename,product:producttype,productsize:productsize,redirecttask:templatetask},
            
             url: "{{asset('/template-offset')}}", 
             success: function(result){
              console.log(result);
              if(result =='exit'){
                 window.location = '/product-selection';
              }
              else{
                $('#myModal').removeClass('in');
                $('.modal-backdrop').removeClass('in');
                alert('Template saved');
              }           
            }
          });
       }
       
      });
});
      
  function hide(target) {document.getElementById(target).style.display = 'none';}
      
   </script>
<script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });

   
</script>
</html>