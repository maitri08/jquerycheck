<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Designer Draggable - Default functionality</title>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <meta name="csrf_token" content="{{ csrf_token() }}" />
      <style>
         .draggableRect { width: 100px; height: 120px;background: #ccc;position: absolute !important }
         .draggableText{border:1px solid #000000;position: absolute !important;cursor: pointer;}
         #rightCanvas{border:1px solid #000000; width: 50%;height: 400px;background-image:url('');
         background-size:cover;
         background-position: center;}
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
         .pip {
         border:1px solid #000000;
         display: inline-block;
         position: absolute !important;
         }
         .optionPanel{
         left: 630px;
         top: 105px;
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
      </style>
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   </head>
   <body>
      <div id="area">
         <a class="btn btn-primary" id="create_block">Create</a>
         <a class="btn btn-primary" id="create_text">Create Text</a>
         <input type='file' id='getval' name="background-image" onchange="readURL(event)" />
         <input type="file" id="stickers" name="stickers[]" multiple />
         <!-- <div class="ui-widget-content draggable">
            </div> -->
      </div>
      <div id="rightCanvas" class="canvasmodule">
         <div id="shapePanel">
         </div>
      </div>
      <div class="customtextPanel"> Textarea</div>
      <button id="save-coordinate">Save</button>
   </body>



<script>
   // Code for generating draggable Text
    $(document).ready(function () {
        var designertext = 1;
        var counter = 1;
        $("#create_text").click(function () {
          $("#shapePanel").append($('<div class="draggableText" data-unique="draggableText'+designertext+'"  id="draggableText' + designertext + '"><span class="posX"></span><span class="posY"></span><span class="poswidth"></span><span class="posheight"></span>' + 'Click Here To Write</div>').draggable({
            containment: '#rightCanvas'
          }));
          designertext++;
        });
    });
            
    // Code for generating Textarea panel for the Text 
    var counter = 1;
    $(document).on("mouseover", ".draggableText", function () {
      var parentcoord = $('.canvasmodule').position();
      var coord = $(this).position();
      var posLayoutleft = coord.left - parentcoord.left;
      var posLayoutright = coord.top - parentcoord.top;
      var width = $(this).width();
      var height = $(this).height();
      $(this).find(".posX").text(posLayoutleft);
      $(this).find(".posY").text(posLayoutright)
      $(this).find(".poswidth").text(width)
      $(this).find(".posheight").text(height);

      var textBoxid = this.id;
      var uniqueclass = $(this).data('unique');
      var uniquedataClass = $("."+uniqueclass).length;
    // code to check if textbox area already exist
      if(uniquedataClass==0){

        var newTextBoxDiv = $(document.createElement('div')).attr("id", 'TextBoxDiv' + counter);
        newTextBoxDiv.after().html('<div class="optionPanel'+' '+uniqueclass+'" id="optionPanel' + counter + '">' + '<textarea id="textInsert' + counter + '" class="textInsert" placeholder="Enter Your Text" type="text"></textarea><select id="textSizeDropDown' + counter + '" class="textSizeDropDown"><option value="12pt">12</option><option value="14pt">14</option><option value="16pt">16</option><option value="18pt">18</option><option value="20pt">20</option><option value="22pt">22</option><option value="24pt">24</option><option value="26pt">26</option><option value="28pt">28</option></select></div>');
        newTextBoxDiv.appendTo(".customtextPanel");
      }

      var content = $('#textInsert' + counter).val();
      $('#textInsert' + counter).keyup(function () {
        if (this.value != content) {
          content = this.value.replace(/\n/g, "<br />");
          $('#' + textBoxid).text(content);

          }
      });

      $('#textSizeDropDown' + counter).change(function () {
        var textSize = $(this).val();
        $('#' + textBoxid).css('font-size', textSize);
        });

        $('#' + textBoxid).resizable({
          containment: "#rightCanvas"
        });

         counter++;
    });
      

      // Code to create Draggble shape block
    $( function() {
      $("#create_block").click(function () {
        $("#shapePanel").append($("<div  class='draggableRect'><ul><li class='posX'></li><li class='posY'></li><li class='poswidth'></li><li class='posheight'></li></ul><div class='ui-resizable-handle ui-resizable-nw' id='nwgrip' style='display:none;'></div><div class='ui-resizable-handle ui-resizable-ne' id='negrip' style='display:none;'></div><div class='ui-resizable-handle ui-resizable-sw' id='swgrip' style='display:none;'></div><div class='ui-resizable-handle ui-resizable-se' id='segrip' style='display:none;'></div></div>").draggable({containment: "#rightCanvas"}));
      });
    });
      
    // code to make the shape block resizable 
    $(document).on('mouseover','.draggableRect',function(e){
      $(this).find('.ui-resizable-handle').show(); // not if it is the handle
      $(this).resizable({containment: "#rightCanvas"}).mouseup(function(){
      var parentcoord = $('.canvasmodule').position();
      var coord = $(this).position();
      var posLayoutleft = coord.left - parentcoord.left;
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
                  "<img id=\"imageThumb" +imgThumb+ "\" posx='' posy='' posheight='' poswidth='' class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/><span class=\"posX\"></span></div>").draggable({  containment: "#rightCanvas"}));
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
    $(this).resizable({containment: "#rightCanvas",aspectRatio: true}).mouseup(function(){
      var parentcoord = $('.canvasmodule').position();
      var $img = $(this);
      var imGid = $img.attr("id");
      var outerDiv = $(this).parent().parent().attr('id');
      var coord = $('#'+outerDiv).position();
      var posLayoutleft = coord.left - parentcoord.left;
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


          $.ajax({
            type: "POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
            data:{shaperesult: JSON.stringify(boXjson),imgresult: JSON.stringify(imGjson)},
            
            url: "{{asset('/template-offset')}}", 
            success: function(result){
              // console.log(result);
            window.location = result;
            }
          });
       
      });
});
      
  function hide(target) {document.getElementById(target).style.display = 'none';}
      
   </script>
</html>