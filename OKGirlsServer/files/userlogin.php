<?php
	header("Access-Control-Allow-Origin:*");
	if(isset($_POST['username']))
	{
		if($_POST['username']=='okgirls' && $_POST['password']=='okgirls969')
		{
			//echo true;
			$data=array("status"=>"101","code"=>"564646765");
			echo json_encode($data);
		}
		else
		{
			echo false;
		}
	}
?>