<!DOCTYPE html>
<html>
<title>Printshoot</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div id="header-container">
<div id="header" class="col-full">
<div id="navigation" class="col-full">

<ul id="main-nav" class="nav fl"><li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-54"><a href="http://www.websitebuilderexpert.com/">Home</a></li>



@foreach($level1 as $products)
<li id="menu-item-5175" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5175"><a href="#">{{$products->product_name}}</a>

@foreach($products->children->take(5) as $level2)
<ul class="sub-menu">
<li id="menu-item-5174" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5174"><a href="">{{$level2->category_name}}</a></li>
</ul>
@endforeach

</li>
@endforeach

</ul>
</div> 

  {{ Form::open(['url' => 'autosearch','method' => 'POST']) }}
  {{ csrf_field() }}
<input type="text" name="searchtheme" id="search_text">
 <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Search</button>
 {{Form::close()}}


<!-- Newsletter Modal -->
<link href="{{asset('css/jquery.ui.autocomplete.css')}}" rel="stylesheet">
<script src="{{asset('js/jquery.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script>
   $(document).ready(function() {
    src = "{{ route('searchajax') }}";
     $("#search_text").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: src,
                dataType: "json",
                data: {
                    term : request.term
                },
                success: function(data) {
                    response(data);
                   
                }
            });
        },
        minLength: 3,
       
    });
});
</script>
</body>
</html>



