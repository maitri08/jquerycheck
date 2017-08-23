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
<div class="row">
<div class="col-sm-6">
<ul id="main-nav" class="nav fl">
@foreach($category as $subcategory)
<li id="menu-item-5175" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5175"><a href="#">{{$subcategory->category_name}}</a>
</li>
@endforeach
</ul>
</div>
<div class="col-sm-6">

<ul id="main-nav" class="nav fl">
@foreach($bookcategory as $categorydetail)
<li id="menu-item-5175" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5175"><a href="#">{{$categorydetail->name}}</a>

</li>
@endforeach

</ul>
</div>
</div>
</div> 

</body>
</html>



