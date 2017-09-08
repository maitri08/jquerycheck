<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Designer Draggable - Default functionality</title>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="{{ asset('common/css/bootstrap.min.css')}}">  
       <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="{{ asset('common/js/bootstrap.min.js')}}"></script>   
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
       <meta name="csrf_token" content="{{ csrf_token() }}" />
       <style>
       select{
           border: 1px solid #a5d048;
    padding: 6px 11px;
    outline: none;
       }
       button{
           background-color: #a5d048;
    border: none;
    padding: 6px 10px;
    border-radius: 5px;
    color: #fff;
    outline: none !important;
       }
       .selection-div {
    margin-top: 6%;
    margin-left: 3%;
}
       </style>
    </head>
    <body>
    <div style="margin-top: 30px;padding-left: 20px;width: 20%;">
    <img src="http://printshoot.tk/common/images/printshoot-logo.png" />
    </div>
    <div class="selection-div">
    	<h3>Select a product </h3>
    	<select id="dropproduct">
    		<option value="">Select a Product</option>
    		<option value="4">Visiting card</option>
    		<option value="1">PhotoBook</option>
    		<option value="5">Poster</option>
    	</select>


    	<select id="dropprosize">
    	</select>
    	<button id="submitpage">Submit</button>
	</div>
    </body>
<script>

 $("#dropproduct").change(function() {
var productval =$("#dropproduct").val();
          $.ajax({
            type: "POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
         	data:{selectsize:productval},           
            url: "{{asset('/template-product')}}", 
             success: function(data){
            	var resp = $.trim(data);
          		$("#dropprosize").html(resp);
            }
          });
      });


 $('#submitpage').click(function(){
	var pageproductval = $('#dropprosize option:selected').val();
	var pageproduct = $('#dropproduct').val();
	window.location='/testing-layout/'+pageproduct+'-'+pageproductval;
})
</script>

    </html>