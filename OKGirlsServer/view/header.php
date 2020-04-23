<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Capt Ar Kar Myo">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>OKGirls</title>
	


	<!-- Font Awesome -->
	<link rel="stylesheet" href="css/all.css">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="css/mdb.min.css">
	<!-- Our custom styles (optional) -->
	<link rel="stylesheet" href="css/teamcs.css">
	<link rel="stylesheet" href="css/rkmCustom.css">
	

	<link rel="icon" href="images/app_icon.png" type="image/gif" sizes="16x16">

	<style>
		@font-face 
		{
		  font-family: 'Pyidaungsu';
		  src: URL('font/Pyidaungsu.ttf') format('truetype');
		}
		body
		{
			font-family: Pyidaungsu;
			background-color: wheat;
		}	
		.my_card{
			margin-bottom: 20px;
		}
		.no_link{
			text-decoration: none;
		}
		.btn
		{
			border: none;
			border-radius: 5px;
			color: #ffffff;
			background-color: #36B9CC;
			box-shadow: 5px 10px 10px #3F729B;
		}
		#loading{display: none;}
		.innerbody,.innerbody1
		{
			width: 48%;height: auto;float: left;margin-left: 1%;
		}
		@media screen and (max-width:600px)
		{
			.innerbody,.innerbody1
			{
				width: 100%;
			}
			.innerbody1
			{
				margin-top: 20px;
			}
		}
		
	</style>
</head>

<body class="fixed-sn white-skin">

	<!-- Main Navigation -->
	<header>
		<!-- Sidebar navigation -->
		<div id="slide-out" class="side-nav sn-bg-4 fixed">
			<ul class="custom-scrollbar">
				<!-- Logo -->
				<li class="logo-sn waves-effect py-3">
					<div class="text-center">
						
						<p style="color:black; font-size:12px; padding-top: 50px;">
							မာတိကာ
						<p>
					</div>
				</li>
				<!-- Side navigation links -->
				<li>
					<ul class="collapsible collapsible-accordion">
						<!-- Simple link -->
						<li> 
							<a href="index.php" class="collapsible-header waves-effect ui_navigation" id="developreportbtn"><i class="w-fa fas fa-chart-pie  ui_navigation"></i>သတင်းတင်ရန်</a>
						</li>
						<li> 
							<a href="index.php?operation=newsEdit" class="collapsible-header waves-effect ui_navigation newsEdit" id="developreportbtn"><i class="w-fa fas fa-chart-pie  ui_navigation"></i>သတင်းပြင်ရန်/ဖျက်ရန်</a>
						</li>
						<li> 
							<a href="about.html" class="collapsible-header waves-effect ui_navigation" id="developreportbtn"><i class="w-fa fas fa-chart-pie  ui_navigation"></i>About</a>
						</li>
					</ul>
				</li>
				<!-- Side navigation links -->
			</ul>
			<div class="sidenav-bg mask-strong"></div>
		</div>
		<!-- Sidebar navigation -->
		<!-- Navbar -->
		<nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav" id="nav_id">
			<!-- SideNav slide-out button -->
			<div class="float-left"> <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
			</div>
			<!-- Breadcrumb -->
			<div class="breadcrumb-dn mr-auto align-center">
				<p></p>
			</div>
			<div class="title_text mr-auto align-center text-center">
				<h5 id="header_id" style="padding-left: 15px;">သတင်းတင်ရန်</h5>
			</div>
			<div class="d-flex change-mode">
				<!-- Navbar links -->
				<ul class="nav navbar-nav nav-flex-icons ml-auto" style="display: none;">
					<li class="nav-item dropdown">
						<a  href="index.html" class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-comments-dollar"></i>  <span class="clearfix d-none d-sm-inline-block"></span>
						</a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown"> <a   href="index.html"  class="dropdown-item ui_navigation" href="#login_section" id="logout_btn">မူလစာမျက်နှာ</a>
						</div>
					</li>
				</ul>
				<!-- Navbar links -->
			</div>
		</nav>
		
	</header>
	<!-- Main Navigation -->

	<!-- Main layout -->
	<main>
		<div class="container-fluid">
			<!-- Section: Intro -->
			<section id="intro_section">