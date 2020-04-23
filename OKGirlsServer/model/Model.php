<?php
header("Access-Control-Allow-Origin:*");
	class Model 
	{
		private $pdo = null;
		private $stmt = null;

		function __construct()
		{
		    try
		    {
		      $this->pdo = new PDO(
		        "mysql:host=localhost;dbname=mmsoftwa_okBook;charset=utf8", 
		        "mmsoftwa_okbook", "MJWctUKM56ZZGnF", [
		          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		          PDO::ATTR_EMULATE_PREPARES => false,
		        ]
		      );
		      //echo "Connected successfully";
		    } 
		    catch (Exception $ex) 
		    { 
		    	die($ex->getMessage()); 
		    }
		}

		function __destruct()
		{
		    if ($this->stmt!==null) { $this->stmt = null; }
		    if ($this->pdo!==null) { $this->pdo = null; }
		}

		public function newsInsert($title,$body,$imagesOrg,$imagesTemp)
		{
			$times=Date("d-m-Y");
			$posttime=time();
			$check=0;
			$imgStr=implode(",",$imagesOrg);
			$targetDir = "uploadImg/";
	    	foreach($imagesOrg as $key=>$val)
	    	{
	        	$fileName = basename($imagesOrg[$key]);
	        	$targetFilePath = $targetDir.$posttime. $fileName;
	        	if(move_uploaded_file($imagesTemp[$key], $targetFilePath))
	        	{
	        		$check++;
	        	}
	    	}
	    	if($check>0)
	    	{
	    		try
			    {
			      $this->stmt = $this->pdo->prepare("INSERT INTO okgirls (newsTitle,newsBody,newsImages,newsTime,postTime) VALUES (:title,:body,:images,:newstime,:posttime)");
			      $this->stmt->bindParam(':title',$title);
			      $this->stmt->bindParam(':body',$body);
			      $this->stmt->bindParam(':images',$imgStr);
			      $this->stmt->bindParam(':newstime',$times);
			      $this->stmt->bindParam(':posttime',$posttime);
				  if($this->stmt->execute())
				  {
					  echo 101;
				  }
			      
			    }
			    catch (Exception $ex)
			    { 
			    	die($ex->getMessage()); 
			    }
			    $this->stmt = null;
	    	}
	    	else
	    	{
	    		echo "can't upload img.";
	    	}
		}
		public function forEdit()
		{
			$result = false;
		    try
		    {
		      $this->stmt = $this->pdo->prepare("SELECT * FROM okgirls  ORDER BY dbId DESC LIMIT 100 ");
		      $this->stmt->execute();
		      $result = $this->stmt->fetchAll();
		    }
		    catch (Exception $ex)
		    { 
		    	die($ex->getMessage());
		    }
		    $this->stmt = null;
		    return $result;
		}
		public function newsDelete($dbId)
		{
		    try
		    {
		      $this->stmt = $this->pdo->prepare("DELETE FROM okgirls WHERE dbId=:dbId");
		      $this->stmt->bindParam(':dbId',$dbId);
		      $this->stmt->execute();
		      $result = $this->stmt->fetchAll();
		      echo 101;
		    }
		    catch (Exception $ex)
		    { 
		    	die($ex->getMessage());
		    }
		    $this->stmt = null;
		}
		public function toUpdate($dbId)
		{
			$result = false;
		    try
		    {
		      $this->stmt = $this->pdo->prepare("SELECT * FROM okgirls WHERE dbId=:dbId");
		      $this->stmt->bindParam(':dbId',$dbId);
		      $this->stmt->execute();
		      $result = $this->stmt->fetchAll();
		    }
		    catch (Exception $ex)
		    { 
		    	die($ex->getMessage());
		    }
		    $this->stmt = null;
		    return $result;
		}
		public function updateNews($title,$body,$dbId)
		{
		    try
		    {
		      $this->stmt = $this->pdo->prepare("UPDATE okgirls SET newsTitle=:title,newsBody=:body WHERE dbId=:dbId");
		      $this->stmt->bindParam(':title',$title);
		      $this->stmt->bindParam(':body',$body);
		      $this->stmt->bindParam(':dbId',$dbId);
		      $this->stmt->execute();
		      $result = $this->stmt->fetchAll();
		      echo 101;
		    }
		    catch (Exception $ex)
		    { 
		    	die($ex->getMessage());
		    }
		    $this->stmt = null;
		}
		public function login($username,$password)
		{
			if($username=="kyawzinhein" && $password=="software55")
			{
				echo true;
			}
		}
		public function detail($id)
		{
			
		}
	}
?>