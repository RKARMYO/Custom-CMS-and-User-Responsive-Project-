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
			background-color: wheat;
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

		.menudiv
		{
			width: 100%;height: 40px;left: 0%;top: 0%;
			background-color: green;
  			
		}
		.newsdiv
		{
			width: 100%;height: auto;display: flex;flex-wrap: wrap;
			margin-top: 15px;
		}
		.showDetail
		{
			width: 400px;height: auto;border-bottom:dashed;
			margin-top:5px;
		}
		.showDetail:hover
		{
			cursor: pointer;
		}
		@media screen and (max-width: 600px) {
          .showDetail
          {
            width:100%;   
          }
        }
	</style>
</head>
<body>

	<div class="topnav">
		<a class="active" href="#">မိန်းမလှကျွန်း</a>
	</div>

	<div class="newsdiv">
		<?php
			foreach ($data as $key => $value)
			{
				$expImg=explode(",", $value['newsImages']);
		?>
				<div class="showDetail">
					<div style="width: 25%;height: 60px;float: left;">
						<img src="../uploadImg/<?php echo $value['postTime'].$expImg[0]; ?>" style="width: 100%;height: 100%;">
					</div>
					<div style="width: 74%;height: 100%;float: left;margin-left: 1%;">
						<span><?php echo $value['newsTitle'];?></span>
						<br>
						<span><?php echo $value['newsTime'];?></span>
					</div>
				</div>
				<input type="hidden" value="<?php echo $value['dbId'];?>">
		<?php
			}
		?>
		<div style="width: 400px;height: 50px;"></div>
	</div>

	<!-- JQuery -->
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on("click",".showDetail",function(){
				var detailId=$(this).next().val();console.log("detailId :"+detailId);
				window.location.assign("index.php?operation=showDetail&id="+detailId+"");
			});
		});
	</script>
</body>
</html>