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
         .draggableRect { width: 100px; height: 120px;background: #f7f5f5;position: absolute !important }
         #rightCanvas{width: 50%;height: 400px;background-image:url('');
         background-size:cover;
         background-position: center; margin: auto;}
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
         border:1px solid #000000;
         display: inline-block;
         position: absolute !important;
         }
         .optionPanel{
         left: 630px;
         top: 105px;
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
         max-height: 400px;
         max-width: 100%;
         padding: 1px;
         cursor: pointer;
         }
         .text-coordinate{
          display: none;
         }
      </style>
      <script src="{{ asset('common/js/bootstrap.min.js')}}"></script>
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="http://bgrins.github.io/spectrum/spectrum.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,600,700|Pacifico|Passion+One|Roboto+Mono:400,500,700|Sedgwick+Ave+Display&amp;subset=latin-ext" rel="stylesheet">
   </head>
   <body>
      <div class="bar-1">
      	<ul class="list-inline">
      		<li><a class="btn-shape" id="create_block"><img src="{{ asset('common/images/shape-icon.png')}}"></a></li>
      		<li><a class="btn-text" id="create_text"><img src="{{ asset('common/images/text-icon.png')}}"></a></li>
      		<li><input type='file' id='getval' name="background-image" onchange="readURL(event)" /></li>
      		<li><input type="file" id="stickers" name="stickers[]" multiple /></li>
      	</ul>
      </div>
      <div class="bar-2">
      <div class="left-sidebar">
          <h5>Pages</h5>
          <ul class="list-unstyled">
            <li><img src="{{ asset('common/images/page-icon.png')}}"> Page1</li>
          </ul>
      </div>
      <div class="central-canvas">
      <div id="rightCanvas" class="canvasmodule">
         <div id="shapePanel">
         </div>
      </div>
      </div>
      <div class="right-sidebar">
      	<div id="area">
      	</div>
      	<div class="customtextPanel"> <h5>Textarea</h5></div>
      	<button id="save-coordinate">Save</button>
      </div>

      </div>
      
   </body>



<script>
   // Code for generating draggable Text
    $(document).ready(function () {
        var designertext = 1;
        var counter = 1;
        $("#create_text").click(function () {
          $("#shapePanel").append($('<div class="draggableText" data-unique="draggableText'+designertext+'"  id="draggableText'+ designertext + '"><span class="posX text-coordinate"></span><span class="posY text-coordinate"></span><span class="poswidth text-coordinate"></span><span class="posheight text-coordinate"></span><div class="textShow">Click here To edit Text</div></div>').draggable({
            containment: '#rightCanvas'
          }));
          designertext++;
        });
    });
            
    // Code for generating Textarea panel for the Text 
    var counter = 1;
    $(document).on("click", ".draggableText", function () {
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
    
    // code to check if textbox area already exist
      if(uniquedataClass==0){

        var newTextBoxDiv = $(document.createElement('div')).attr("id", 'TextBoxDiv' + counter);
        newTextBoxDiv.after().html('<div class="optionPanel'+' '+uniqueclass+'" id="optionPanel' + counter + '">' + '<textarea id="textInsert' + counter + '" class="textInsert" placeholder="Enter Your Text" type="text"></textarea><select id="textSizeDropDown' + counter + '" class="textSizeDropDown"><option value="12px">12</option><option value="14px">14</option><option value="16px">16</option><option value="18px">18</option><option value="20px">20</option><option value="22px">22</option><option value="24px">24</option><option value="26px">26</option><option value="28px">28</option></select><select id="textFontDropDown' + counter + '" class="textFontDropDown"><option value="Lobster,cursive">Lobster</option><option value="Roboto Mono, monospace">Roboto Mono</option><option value="Pacifico, cursive">Pacifico</option><option value="Sedgwick Ave Display,cursive">edgwick Ave Display</option><option value="Passion One, cursive">Passion One</option><option value="Open Sans, sans-serif">Open Sans</option></select><div class="colorplt"><input type="text" class="full" id="full'+ counter +'"/></div><div class="removetxt">Remove</div></div>');
        newTextBoxDiv.appendTo(".customtextPanel");
      }
      var content = $('#textInsert' + counter).val();
      $('#textInsert' + counter).keyup(function () {
        if (this.value != content) {
          content = this.value.replace(/\n/g, "<br />");
          $('#' + textBoxid).find('.textShow').text(content);
          }
      });

      $('#textSizeDropDown' + counter).change(function () {
        var textSize = $(this).val();
        $('#' + textBoxid).css('font-size', textSize);
      });
      $('#textFontDropDown' + counter).change(function () {
        var textFont = $(this).val();
        $('#' + textBoxid).css('font-family', textFont);
      });

        $('#' + textBoxid).resizable({
          containment: "#rightCanvas"
        });

        //color palette start
          $("#full"+counter).spectrum({
          color: "#ECC",
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

          $('#draggableText1').css('color', color);
          },
          palette: [
              ["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
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
     $('.sp-choose').on('click',function(){
 var colorplate = $('.sp-preview-inner').attr('style');
          $('#' + textBoxid).css('color', colorplate);
      })
    
         counter++;


        
         
    });



      $(document).on('click','.colorplt',function(){
        alert(1);
         //  var fullcolor = $(this).id;
         //  var dd = ('#'+fullcolor).sibling().find('.sp-preview-inner').attr('style');
         // console.log(dd);
        })
    
      

      // $(document).on('click','.removetxt',function(){
      //   var prntClass = $(this).parent().attr('class').split(' ')[1];
      //   $(this).parent().parent().remove();
      //   $('#'+prntClass).remove();

      // });

      // Code to create Draggble shape block
    $( function() {
       var boXno = 1;
      $("#create_block").click(function () {
        $("#shapePanel").append($('<div id="draggableRect'+boXno+'"  class="draggableRect"><ul><li class="posX"></li><li class="posY"></li><li class="poswidth"></li><li class="posheight"></li></ul><div class="ui-resizable-handle ui-resizable-nw" id="nwgrip" style="display:none;"></div><div class="ui-resizable-handle ui-resizable-ne" id="negrip" style="display:none;"></div><div class="ui-resizable-handle ui-resizable-sw" id="swgrip" style="display:none;"></div><div class="ui-resizable-handle ui-resizable-se" id="segrip" style="display:none;"></div><div class="remove" id="remove'+boXno+'">Remove</div></div>').draggable({containment: "#rightCanvas"}));
        boXno++;
      });

      $(document).on('click','.remove',function(){
        $(this).parent().remove();
      });

    });
      
    // code to make the shape block resizable 
    $(document).on('mouseover','.draggableRect',function(e){
      $(this).find('.ui-resizable-handle').show(); // not if it is the handle
      $(this).resizable({containment: "#rightCanvas"}).mouseup(function(){
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
    });
      // $(this).find(".posY").text( "(" + width + "," + height + ")" );});  


    });
    
    // Resizable block pointer show and hide
    $(document).click(function(e) {
      if($(e.target).is(".draggableRect") ) {}
        else{
         $(".draggableRect").find(".ui-resizable-handle").hide();}
    });
          



    //Code for setting dynamic background image 
    function readURL(event){
     var getImagePath = URL.createObjectURL(event.target.files[0]);
     $('#rightCanvas').css('background-image', 'url(' + getImagePath + ')');
    }     
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
                  "<img id=\"imageThumb" +imgThumb+ "\" posx='' posy='' posheight='' poswidth='' class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/><span class=\"posX\"></span><div class=\"removeimg\">Remove</div></div>").draggable({  containment: "#rightCanvas"}));
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
  $(document).on('click','.removeimg',function(){
    $(this).parent().remove();
  })


  // Code to resize image and find the co-ordinates     
  $(document).on("mouseover",".imageThumb",function(){
    $(this).resizable({containment: "#rightCanvas",aspectRatio: true}).mouseup(function(){
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
      // console.log( "(" + posLayoutleft + "," + posLayoutright + ")" );
      // console.log( "(" + width + "," + height + ")" );

    });
  });


$( function() {
      $("#save-coordinate").click(function (){
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
        item = {}
        item ["txtId"] = imgId;
        item ["offsetX"] = offsetX;
        item ["offsetY"] = offsetY;
        item ["txtwidth"] = txtwidth;
        item ["txtheight"] = txtheight;
        item ["txtcontent"] = txtcontent;
        item["txtsize"] = txtsize;
        item["txtfont"] = txtfont;
        txtJson.push(item);   
      }

          // $.ajax({
          //   type: "POST",
          //   headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
          //   data:{shaperesult: JSON.stringify(boXjson),imgresult: JSON.stringify(imGjson),txtresult:JSON.stringify(txtJson)},
            
          //   url: "{{asset('/template-offset')}}", 
          //   success: function(result){
          //     // console.log(result);
          //   window.location = result;
          //   }
          // });
       
      });
});
      
  function hide(target) {document.getElementById(target).style.display = 'none';}
      
   </script>
</html>