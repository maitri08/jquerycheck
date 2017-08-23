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
      width: 75%;
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
      max-height: 450px;
      max-width: 100%;
      padding: 1px;
      cursor: pointer;
      }
      .pip {
      display: inline-block;
      margin: 10px 10px 0 0;
      position: absolute !important;
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
      #text-editor{
      cursor: pointer;
      }
      .lp-message{
      position: absolute !important;
      }
   </style>
   <body>
      <div class="image" id="area">
         <div contenteditable="true" id="text-editor">
            <div id="textstudio" class="textstudio"></div>
         </div>
      </div>
      <!--   <textarea id="message">Easy!</textarea> -->
      <!-- <div id="lp-message"></div> -->
      <!-- <input id="profile-image-upload" type="file" name="image-upload[]" multiple> -->
      <div class="row">
         <div class="col-sm-4">
            <input type="file" id="files" name="files[]" multiple />
         </div>
         <div class="col-sm-4">
            <button id="add-text" class="add-text">Add Text</button>
         </div>
      </div>
      <div class="customtextPanel"></div>
      <div id="optionPanel" style="display:none;left: 630px;top: 105px;">
         <div class="cross" onclick="hide('optionPanel')">Close</div>
         <textarea id="textInsert" class="textInsert" placeholder="Enter Your Text" type="text"></textarea>
         <select id="textSizeDropDown" class="textSizeDropDown">
            <option value="12pt">12</option>
            <option value="14pt">14</option>
            <option value="16pt">16</option>
            <option value="18pt">18</option>
            <option value="20pt">20</option>
            <option value="22pt">22</option>
            <option value="24pt">24</option>
            <option value="26pt">26</option>
            <option value="28pt">28</option>
         </select>
      </div>
   </body>
   <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
   <script>
      $(document).ready(function() {
         
         $('#add-text').click(function(){
           $('#textstudio').append($("<div id='lp-message' class='lp-message'>Click Here<div class='ui-resizable-handle ui-resizable-nw' id='nwgrip'></div><div class='ui-resizable-handle ui-resizable-ne' id='negrip'></div><div class='ui-resizable-handle ui-resizable-sw' id='swgrip'></div><div class='ui-resizable-handle ui-resizable-se' id='segrip'></div></div></div>").draggable({containment: "#area"}).resizable());
         });
      
      // $("#lp-message").resizable().draggable()
      //  .click(function() {
      //    $(this).draggable({containment: "#area" });
      //  });
      });
      
      $(document).on("click",".lp-message",function(){
       // $(this).resizable({
       //   handles: {
       //       'nw': '#nwgrip',
       //       'ne': '#negrip',
       //       'sw': '#swgrip',
       //       'se': '#segrip'
       //   }
       // });
      });
      
      
      
      $(document).on("click",".lp-message",function(){

          $("#optionPanel").show();
            // $(this).find('.ui-resizable-handle').show(); 
            // $(this).resizable();
       
      });

        //   $('.textstudio').click(function(){
        //  $("#optionPanel").show();
      
        // });
      
      
      
      
    
      $(function(){
               var content = $('.textInsert').val();
               $('.textInsert').keyup(function () {
                   if (this.value != content) {
                     content = this.value.replace(/\n/g, "<br />");
                        $('#lp-message').html(content );   
                    }
               });
               $('#textSizeDropDown').change(function(){
                   var textSize = $('#textSizeDropDown').val(); 
                   $('.lp-message').css('font-size',textSize);    
      
               })
         })
   </script>
   <!--   <script> $('#text-editor').click(
      function(){
        tinymce.init({
      selector: "textarea",
      height: 100,
      plugins: [
      "textcolor"
      ],toolbar1: "bold italic underline | alignleft aligncenter alignright alignjustify |   fontselect fontsizeselect forecolor",
      menubar: false,
      toolbar_items_size: 'small',
      setup : function(ed) {
      ed.on("keyup", function(){
          $('#lp-message').html(tinymce.activeEditor.getContent());
      });
      }
      });
      // var content = tinymce.get(message).getContent();
      // $('#text-editor').html(content);
      });
      </script> -->
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
                $("#area").append($("<div id=\"pip" +i+ "\" class=\"pip\">" +
                  "<img id=\"frogImg" +i+ "\" class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>"+"<div class=\"remove\">Remove</div></div>").draggable({
                     containment: "#area"
                  }));
                // $('.imageThumb').resizable();
                 // $("#frogImg").resizable({aspectRatio: true});
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
      
       $(document).on("click",".imageThumb",function(){
        $(this).resizable({
          containment: "#area"
        });
       });
      
      function hide(target) {
          document.getElementById(target).style.display = 'none';
      }
      
      
      
       
   </script>
</html>