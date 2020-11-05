<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Zeerah Restaurant</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	@include('frontend.inc.css')
   

</head>
<style>
	.container-fluid {
    width: 100%;
    padding-right: 70px!important;
    padding-left: 70px!important;
    margin-right: auto;
	margin-left: auto;
}
@media (max-width: 991.98px){
.navbar-expand-lg>.container, .navbar-expand-lg>.container-fluid {
    padding-right: 10px !important;
    padding-left: 10px !important;
}
}
.sticky {
    position: fixed;
    top: 0;
	left: 0;
	right: 0;
	z-index: 99999;
	animation: fadeInDown .3s ease-out forwards;
}
.footer-right .head{
	margin-left: 5px;
}


</style>
<body class="host_version"> 

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	

@include('frontend.inc.header')


@yield('main_section')

<!---------------- Start Footer Section ------------------>

@include('frontend.inc.footer')


   @include('frontend.inc.js')
</body>
</html>
