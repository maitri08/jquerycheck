<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PrintShoot | Sign up</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Customer Register </b>
  </div>
  <!-- /.login-logo -->
  @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif


  {{ Form::open(['url' => 'signup','method' => 'POST']) }}
  {{ csrf_field() }}
  <div class="login-box-body">
    <p class="login-box-msg">Sign up to start your session</p>

  <div class="form-group has-feedback">
          {{ Form::text('name','',['id'=> 'name','class'=> 'form_text','autofocus'=> ($errors->has('name') ? 'autofocus' : null)])}}
        @if ($errors->has('name')) <span class="help-block">{{ $errors->first('name') }}</span> @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
       {{ Form::text('email','',['id'=> 'email','class'=> 'form_text','autofocus'=> ($errors->has('email') ? 'autofocus' : null)])}}
        @if ($errors->has('email')) <span class="help-block">{{ $errors->first('email') }}</span> @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      {{ Form::text('contact','',['id'=> 'contact','class'=> 'form_text','autofocus'=> ($errors->has('contact') ? 'autofocus' : null)])}}
      @if ($errors->has('contact')) <span class="help-block">{{ $errors->first('contact') }}</span> @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        {{ Form::text('password','',['id'=> 'password','class'=> 'form_text','autofocus'=> ($errors->has('password') ? 'autofocus' : null)])}}
        @if ($errors->has('password')) <span class="help-block">{{ $errors->first('password') }}</span> @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
        <div class="form-group has-feedback">
        {{ Form::text('password','',['id'=> 'password_confirm','class'=> 'form_text','autofocus'=> ($errors->has('password_confirm') ? 'autofocus' : null)])}}
        @if ($errors->has('password_confirm')) <span class="help-block">{{ $errors->first('password_confirm') }}</span> @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
  
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign Up</button>
        </div>
        <!-- /.col -->
      </div>
    <!-- /.social-auth-links -->


  </div>
      {{ Form::close() }}

  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

</body>
</html>
