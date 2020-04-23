<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="author" content="Capt Ar Kar Myo">
	<title>OKGirls</title>
	<style type="text/css">
	    @font-face 
		{
		  font-family: 'Pyidaungsu';
		  src: URL('../font/Pyidaungsu.ttf') format('truetype');
		}
		body
		{
			font-family: Pyidaungsu;
		}
		.topnav {
		  background-color: #333;
		  overflow: hidden;
		}

		/* Style the links inside the navigation bar */
		.topnav a {
		  float: left;
		  color: #f2f2f2;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}

		/* Change the color of links on hover */
		.topnav a:hover {
		  background-color: #ddd;
		  color: black;
		}

		/* Add a color to the active/current link */
		.topnav a.active {
		  background-color: #4CAF50;
		  color: white;
		}
		.mainDiv
		{
			width: 98%;
			margin-left: 1%;
			margin-top: 15px;
			height: auto;
			background-color:rgba(0,0,0,0.1);
		}




		* {box-sizing: border-box}
	   
	    .mySlides {display: none}
	    img {vertical-align: middle;}

	    /* Slideshow container */
	    .slideshow-container {
	      max-width: 400px;
	      position: relative;
	      margin: auto;
	    }

	    /* Next & previous buttons */
	    .prev, .next {
	      cursor: pointer;
	      position: absolute;
	      top: 50%;
	      width: auto;
	      padding: 16px;
	      margin-top: -22px;
	      color: white;
	      font-weight: bold;
	      font-size: 18px;
	      transition: 0.6s ease;
	      border-radius: 0 3px 3px 0;
	      user-select: none;
	    }

	    /* Position the "next button" to the right */
	    .next {
	      right: 0;
	      border-radius: 3px 0 0 3px;
	    }

	    /* On hover, add a black background color with a little bit see-through */
	    .prev, .next {
	      background-color: rgba(0,0,0,0.5);
	    }

	    /* Caption text */
	    .text {
	      color: #f2f2f2;
	      font-size: 15px;
	      padding: 8px 12px;
	      position: absolute;
	      bottom: 8px;
	      width: 100%;
	      text-align: center;
	    }

	    /* Number text (1/3 etc) */
	    .numbertext {
	      color:red;
	      font-size: 12px;
	      padding: 8px 12px;
	      position: absolute;
	      top: 0;
	    }

	    .active {
	      background-color: #717171;
	    }

	    /* Fading animation */
	    .fade {
	      -webkit-animation-name: fade;
	      -webkit-animation-duration: 1.5s;
	      animation-name: fade;
	      animation-duration: 1.5s;
	    }

	    @-webkit-keyframes fade {
	      from {opacity: .4} 
	      to {opacity: 1}
	    }

	    @keyframes fade {
	      from {opacity: .4} 
	      to {opacity: 1}
	    }

	    /* On smaller screens, decrease text size */
	    @media only screen and (max-width: 350px) {
	      .prev, .next,.text {font-size: 11px}
	    }
	    .mySlideImg
	    {
	      width: 300px;height: 380px;
	    }

	</style>
</head>
<body>
	<div class="topnav">
		<a href="index.php?operation=userRequest"><span><<</span></a>
		<a class="active" href="#">
			<?php
			foreach ($data as $key => $value)
			{
				echo $value['newsTitle'];
			}
		?>
		</a>
	</div>

	<div class="mainDiv">
		<?php
			foreach ($data as $key => $value)
			{
				$expImg=explode(",", $value['newsImages']);
		?>

			<div class="slideshow-container">
			    <div class="mySlides fade">
			        <div class="numbertext"><span style='color:red;'>1/<?php echo count($expImg); ?></span></div>
			        <img class="mySlideImg" src="../uploadImg/<?php echo $value['postTime'].$expImg[0]; ?>" style="width:100%">
			    </div>

			    <div id="toAppendImg">
			    
			    </div>

			    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			    <a class="next" onclick="plusSlides(1)">&#10095;</a>

			    
			  </div>

			<span><?php echo $value['newsTime'];?></span>
			<p>
				<?php echo nl2br($value['newsBody']);?>
			</p>
		<?php
			}
		?>

	</div>


	<!-- JQuery -->
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		var imgCount='<?php
			foreach ($data as $key => $value)
			{
				$expImg=explode(",", $value["newsImages"]);
				echo count($expImg);
			}
			?>';

		var imgTime='<?php
			foreach ($data as $key => $value)
			{
				echo $value["postTime"];
			}
			?>';

		var imgStr='<?php
			foreach ($data as $key => $value)
			{
				$expImg=explode(",", $value["newsImages"]);
				echo json_encode($expImg);
			}
			?>';

		var imgArr=JSON.parse(imgStr);
		
		var slideIndex = 1;
		  showSlides(slideIndex);

		  function plusSlides(n)
		  {
		    showSlides(slideIndex += n);
		  }

		  function showSlides(n)
		  {
		    var i;
		    var slides = document.getElementsByClassName("mySlides");
		  
		    if (n > slides.length) {slideIndex = 1}    
		    if (n < 1) {slideIndex = slides.length}
		    for (i = 0; i < slides.length; i++) {
		        slides[i].style.display = "none";  
		    }
		    
		    slides[slideIndex-1].style.display = "block";  
		  }

		  for(i=1;i<imgCount;i++)
		  { //alert(imgArr);
		    $("#toAppendImg").append('<div class="mySlides fade"><div class="numbertext">'+(i+1)+' /'+imgCount+'</div><img class="mySlideImg" src="../uploadImg/'+imgTime+imgArr[i]+'" style="width:100%"></div>  ');
		  }
	</script>
</body>
</html>