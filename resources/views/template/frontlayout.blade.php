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
       .mytemplate { width: 100px; height: 120px;background: #ccc;position: absolute !important }
       .profiletemplate{border:1px solid #000000; width: 50%;height: 400px;background-image:url('');
       background-size:cover;
       background-position: center;}
   </style>
   <body>
      <div class="profiletemplate" id="profiletemplate">
         
      </div>
   </body>
   <script>
   $(document).ready(function() {
      $('.profiletemplate').append($("<div id='mytemplate' class='mytemplate' ></div>"));

         var offset = 1;
         var height = 400;
         var width = 150;
         var top = 24 + "px";
         var right = 4 + "px";

         $('.mytemplate').css({
         'position': 'absolute',
         'left': right,
         'top': top
         }).show();


   });


   </script>

   </html>