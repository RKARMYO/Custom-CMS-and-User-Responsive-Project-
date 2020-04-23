<?php
	include_once("../model/Model.php");

	class Controller
	{
		public $model;
		
		public function __construct()  
	    {  
	        $this->model = new Model();

	    } 
		public function userakm()
		{
			if(isset($_GET['operation']))
			{
				switch ($_GET['operation'])
				{
					case 'userRequest':
						$data=$this->model->forEdit();
						include '../view/toShowUser.php';
					break;

					case 'showDetail':
						$data=$this->model->toUpdate($_GET['id']);
						include '../view/detail.php';
					break;
					
					default:
						# code...
					break;
				}
			}
		}
	}

?>