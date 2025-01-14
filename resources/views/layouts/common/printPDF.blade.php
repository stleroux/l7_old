<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title>TheWoodBarn.ca | @yield ('title')</title>

   {{--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
   --}}
   
   <!-- Font Awesome -->
   {{-- <link rel="stylesheet" href="/css/fontawesome/all.css"> --}}
   <!--load all styles 5.9.0-->

   {{-- {{ Html::style('css/font-awesome.css') }} --}}
   {{-- {{ Html::style('css/bootstrap_4/bootstrap.css') }} --}}
   {{-- <link rel="stylesheet" href="{{ asset('css/UI/__bootstrap.css') }}"> --}}
   {{-- {{ Html::style('css/print.css') }} --}}
   {{-- <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}"> --}}
   {{-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" > --}}
   
   @yield ('stylesheet')

   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
</head>
   <body style="font-size: 1.3em;">
      {{-- <div class="container"> --}}
         @yield ('content')
      {{-- </div> --}}
   </body>
</html>