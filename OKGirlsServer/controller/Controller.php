<?php
	include_once("model/Model.php");

	class Controller
	{
		public $model;
		
		public function __construct()  
	    {  
	        $this->model = new Model();

	    } 
		public function invoke()
		{
			if(!isset($_POST['operation']) && !isset($_GET['operation']))
			{
				include 'view/home.php';
			}
			if(isset($_POST['operation']))
			{
				switch ($_POST['operation'])
				{
					case 'newsinsert':
						$imgOrg=$_FILES['newsPhotos']['name'];
						$imgTemp=$_FILES["newsPhotos"]["tmp_name"];
						$data = $this->model->newsInsert($_POST['newsTitle'],$_POST['newsParagraph'],$imgOrg,$imgTemp);
						break;
					case 'newsdelete':
						$data=$this->model->newsDelete($_POST['dbId']);
						break;
					case 'newsUpdateData':
						$return=$this->model->updateNews($_POST['newsTitle'],$_POST['newsParagraph'],$_POST['dbId']);
						break;
					// case 'login':
					// 	$return=$this->model->login($_POST['username'],$_POST['password']);
					// 	break;
					
					default:
						include 'view/404.php';
					break;
				}
			}
			if(isset($_GET['operation']))
			{
				switch ($_GET['operation'])
				{
					case 'newsEdit':
						$data=$this->model->forEdit();
						include 'view/forEdit.php';
					break;

					case 'toupdate':
						$data=$this->model->toUpdate($_GET['dbId']);
						include 'view/toUpdate.php';
					break;

					case 'userRequest':
						$data=$this->model->forEdit();
						include 'view/toShowUser.php';
					break;

					case 'showDetail':
						$data=$this->model->toUpdate($_GET['id']);
						include 'view/detail.php';
					break;
					
					default:
						include 'view/404.php';
					break;
				}
			}
		}
	}

?>