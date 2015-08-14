<!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
    <!-- Bootstrap -->
    {!! Html::style('template/bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('template/bootstrap/css/bootstrap-responsive.min.css') !!}
    {!! Html::style('template/assets/styles.css') !!}
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    {!! Html::script('template/vendors/modernizr-2.6.2-respond-1.1.0.min.js') !!}
  </head>
  <body id="login">
    <div class="container">

      {!! Form::open(['url' => 'login', 'class'=> 'form-signin']) !!}
        <h2 class="form-signin-heading">Please sign in</h2>

        {!! Form::text('emailid', null, ['class' => 'input-block-level', 'placeholder' => 'Email address']) !!}

        {!! Form::password('password', ['class' => 'input-block-level', 'placeholder' => 'Password']) !!}
        <label class="checkbox">

        {!! Form::checkbox('remember', 'remember-me') !!} Remember me
        </label>

        {!! Form::submit('Sign in' , ['class' => 'btn btn-large btn-primary', 'name' => 'login']) !!}

      {!! Form::close() !!}

    </div> <!-- /container -->
    {!! Html::script('template/vendors/jquery-1.9.1.min.js') !!}
    {!! Html::script('template/bootstrap/js/bootstrap.min.js') !!}
  </body>
</html>