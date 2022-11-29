<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.8.2/css/all.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.css.map')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css.map')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css.map')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css.map')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    

</head>

<body class="fix-header fix-sidebar">

@include('Layout.menu')


@yield('content')

@include('Layout.footer')


</div>





<script src="{{asset('js/anim.js')}}"> </script>

<script src="{{asset('js/bootstrap.js')}}"> </script>
<script src="{{asset('js/bootstrap.min.js')}}"> </script>
<script src="{{asset('js/jquery-.js')}}"> </script>
<script src="{{asset('js/npm.js')}}"> </script>
<script src="{{asset('js/validate.js')}}"> </script>



<script>
//----HOVER CAPTION---//	  
jQuery(document).ready(function ($) {
	$('.fadeshop').hover(
		function(){
			$(this).find('.captionshop').fadeIn(150);
		},
		function(){
			$(this).find('.captionshop').fadeOut(150);
		}
	);
});
</script>



@yield('script')

</body>
</html>
