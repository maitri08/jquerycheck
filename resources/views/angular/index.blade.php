<!DOCTYPE html>
<html>
<head>
	<title>Builder</title>
<!-- 	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
    <script type="text/javascript" src="{{ asset('content/angular_lib/angular-drag-and-drop-lists.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('content/angular_lib/nested.css') }}"> 
	<link rel="stylesheet" href="{{ asset('content/angular_lib/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('content/angular_lib/vendor/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{ asset('content/angular_lib/vendor/prism.css')}}"> -->
    <!-- CSS End -->

    <!-- JS Start -->

    <!-- <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular-route.min.js"></script>  -->
    
    <!-- <script type="text/javascript" src="{{ asset('content/angular_lib/nested.js') }}"></script> -->
<!-- jhsvdcjhdacjsjkc -->

    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
    <script type="text/javascript" src="{{ asset('content/angular_lib/angular-drag-and-drop-lists.js') }}"></script>
    <!-- Stuff that is only required in this demo (no need to copy) -->
    <link rel="stylesheet" href="{{ asset('content/angular_lib/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('content/angular_lib/vendor/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{ asset('content/angular_lib/vendor/prism.css')}}">
    <link rel="stylesheet" href="{{ asset('content/angular_lib/demo-framework.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('content/angular_lib/simple.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('content/angular_lib/nested.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('content/angular_lib/types.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('content/angular_lib/advanced.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('content/angular_lib/multi.css')}}" />

    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular-route.min.js"></script>
    <script src="{{ asset('content/angular_lib/vendor/prism.js')}}"></script>
    <script src="{{ asset('content/angular_lib/demo-framework.js')}}"></script>
    <script src="{{ asset('content/angular_lib/view-source.js')}}"></script>
    <script src="{{ asset('content/angular_lib/simple.js')}}"></script>
    <script src="{{ asset('content/angular_lib/nested.js')}}"></script>
    <script src="{{ asset('content/angular_lib/types.js')}}"></script>
    <script src="{{ asset('content/angular_lib/advanced.js')}}"></script>
    <script src="{{ asset('content/angular_lib/multi.js')}}"></script>

</head>
<body ng-app="demo">

    <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- Markup for lists inside the dropzone. It's inside a seperate template
     because it will be used recursively. The dnd-list directive enables
     to drop elements into the referenced array. The dnd-draggable directive
     makes an element draggable and will transfer the object that was
     assigned to it. If an element was dragged away, you have to remove
     it from the original list yourself using the dnd-moved attribute -->
<script type="text/ng-template" id="list.html">
    <ul dnd-list="list">
        <li ng-repeat="item in list"
            dnd-draggable="item"
            dnd-effect-allowed="move"
            dnd-moved="list.splice($index, 1)"
            dnd-selected="models.selected = item"
            ng-class="{selected: models.selected === item}"
            ng-include="item.type + '.html'">
        </li>
    </ul>
</script>

<!-- This template is responsible for rendering a container element. It uses
     the above list template to render each container column -->
<script type="text/ng-template" id="container.html">
    <div class="container-element box box-blue">
        <h3>Container @{{item.id}}</h3>
        <div class="column" ng-repeat="list in item.columns" ng-include="'list.html'"></div>
        <div class="clearfix"></div>
    </div>
</script>

<!-- Template for a normal list item -->
<script type="text/ng-template" id="item.html">
    <div class="item">Item @{{item.id}}</div>
</script>

<!-- Main area with dropzones and source code -->
<div class="col-md-10">
    <div class="row">
        <div ng-repeat="(zone, list) in models.dropzones" class="col-md-6">
            <div class="dropzone box box-yellow">
                <!-- The dropzone also uses the list template -->
                <h3>Dropzone @{{zone}}</h3>
                <div ng-include="'list.html'"></div>
            </div>
        </div>
    </div>

    <div view-source="nested"></div>

    <h2>Generated Model</h2>
    <pre>@{{modelAsJson}}</pre>
</div>

<!-- Sidebar -->
<div class="col-md-2">

    <div class="toolbox box box-grey box-padding">
        <h3>New Elements</h3>
        <ul>
            <!-- The toolbox only allows to copy objects, not move it. After a new
                 element was created, dnd-copied is invoked and we generate the next id -->
            <li ng-repeat="item in models.templates"
                dnd-draggable="item"
                dnd-effect-allowed="copy"
                dnd-copied="item.id = item.id + 1"
                >
                <button type="button" class="btn btn-default btn-lg" disabled="disabled">@{{item.type}}</button>
            </li>
        </ul>
    </div>

    <div ng-if="models.selected" class="box box-grey box-padding">
        <h3>Selected</h3>
        <strong>Type: </strong> @{{models.selected.type}}<br>
        <input type="text" ng-model="models.selected.id" class="form-control" style="margin-top: 5px" />
    </div>

    <div class="trashcan box box-grey box-padding">
        <!-- If you use [] as referenced list, the dropped elements will be lost -->
        <h3>Trashcan</h3>
        <ul dnd-list="[]">
            <li><img src="{{ asset('content/angular_lib/trashcan.jpg')}}"></li>
        </ul>
    </div>

</div>


    <div class="container">
        <div ng-view></div>

    </div>

</body>
</html>