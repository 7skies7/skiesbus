<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- <link href="{{ asset('css/jquery.datetimepicker.css') }}" rel="stylesheet"> -->
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-bootstrap/0.5pre/assets/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Skies Bus</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
           <li class="nav-item active">
           		<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
           </li>
          	@if (Auth::guest())
	          	<li class="nav-item">
	            	<a class="nav-link" href="{{ route('login') }}">Sign In</a>
	          	</li>
	          	<li class="nav-item">
	            	<a class="nav-link" href="{{ route('register') }}">Sign Up</a>
	          	</li>
          	@else
          	
          		@if(App\User::find(Auth::user()->id)->roles()->first()->id == 1)
          			<li class="nav-item">
	            		<a class="nav-link" href="{{ route('routes') }}">Users</a>
	          		</li>
	            	<li class="nav-item">
	            		<a class="nav-link" href="{{ route('routes') }}">Routes</a>
	          		</li>
	          		<li class="nav-item">
	            		<a class="nav-link" href="{{ route('buses') }}">Buses</a>
	          		</li>
	          		<li class="nav-item">
	            		<a class="nav-link" href="{{ route('register') }}">Bookings</a>
	          		</li>
          		@endif
          		<li class="nav-item">
	            	<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
	          	</li>
	          	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
          	@endif
        </ul>
        
      </div>
    </nav>

    <div class="container">
     	@yield('content')
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- <script src="{{ asset('js/jquery.datetimepicker.min.js') }}"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script> -->
    @yield('script')
    <script type="text/javascript">
    // $(function () {
    //     jQuery('#datetimepicker').datetimepicker({value:'2015/04/15 05:06'});
    // });
</script>
  </body>
</html>
