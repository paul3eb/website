<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap, multi level menu, submenu, treeview nav menu examples" />
<meta name="description" content="Bootstrap 5 navbar multilevel treeview examples for any type of project, Bootstrap 5" />  

<title>Division of Davao del Norte</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> <!-- carousel header */ -->
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



<style>
	div.container {
		max-width: 1290px;
		margin: auto;
	}

	div.page-header{
		margin-top: 0;
		margin-bottom: 0;
	}

	nav.navbar{
		font-size:16px;
		margin-top: 0;
		margin-bottom: 0;		
	}

	.dropdown-menu{
		font-size:15px;
		
	}

	.dropdown-menu li {
		padding-top:7px;
		padding-bottom:7px;
	}
    	
</style>

<style type="text/css">

/* ============ desktop view ============ */
@media all and (min-width: 992px) {

  .navbar .nav-item .dropdown-menu{ display: none; }
  .navbar .nav-item:hover .nav-link{   }
  .navbar .nav-item:hover .dropdown-menu{ display: block; }
  .navbar .nav-item .dropdown-menu{ margin-top:0; }
  .navbar .nav-item .dropdown-menu .submenu{ display: none; }
  .navbar .nav-item .dropdown-menu > li:hover > .submenu{display: block; }


	.dropdown-menu li{
		position: relative;
	}
	.dropdown-menu .submenu{ 
		display: none;
		position: absolute;
		left:100%; top:-7px;
	}
	.dropdown-menu .submenu-left{ 
		right:100%; left:auto;
	}

	.dropdown-menu > li:hover{ background-color: #f1f1f1 }
	.dropdown-menu > li:hover > .submenu{
		display: block;
	}
  
}	

@media (max-width: 991px) {

.dropdown-menu .dropdown-menu{
		margin-left:0.7rem; margin-right:0.7rem; margin-bottom: .5rem;
}
}	

</style>

<script type="text/javascript">
//	window.addEventListener("resize", function() {
//		"use strict"; window.location.reload(); 
//	});


	document.addEventListener("DOMContentLoaded", function(){
        
		document.querySelectorAll('.dropdown-menu').forEach(function(element){
			element.addEventListener('click', function (e) {
			  e.stopPropagation();
			});
		})
	
		if (window.innerWidth < 992) {	
			document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
				everydropdown.addEventListener('hidden.bs.dropdown', function () {				
					  this.querySelectorAll('.submenu').forEach(function(everysubmenu){	
					  	everysubmenu.style.display = 'none';
					  });
				})
			});
			
			document.querySelectorAll('.dropdown-menu a').forEach(function(element){
				element.addEventListener('click', function (e) {
		
				  	let nextEl = this.nextElementSibling;
				  	if(nextEl && nextEl.classList.contains('submenu')) {
				  		e.preventDefault();
				  		console.log(nextEl);
				  		if(nextEl.style.display == 'block'){
				  			nextEl.style.display = 'none';
				  		} else {
				  			nextEl.style.display = 'block';
				  		}
				  	}
				});
			})
		}
	}); 
	
</script>

</head>
<body>
<!--
<div class="jumbotron">
<img src="{{asset('/images/WebsiteBanner.png')}}" alt="" width="100%" height="100px" />
  <h1 align="middle">Bootstrap Tutorial</h1>      
  <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
</div>
-->
<div class="container">


	<div class="page-header" >
		<img src="{{asset('/images/WebsiteBanner.png')}}" alt="" width="100%" height="100%" />
	</div>

<!--
 <div class="mainPage" id="mainPage" align="middle"><img src="{{asset('/images/WebsiteBanner.png')}}" alt="" width="1500px" height="550px" /></div>

	<h1>Bootstrap Tutorial</h1>      
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
  </div>
  //<p>This is some text.</p>      
  <p>This is another text.</p>      
</div>
-->
  @include('layouts.nav')

</div> <!--container //  -->

<div class="container">
  @yield('content')
</div>

<div class="container">
  @include('layouts.footer')
</div>  


</body>
</html
