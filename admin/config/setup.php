<?php
		//Setup file:
		error_reporting(0);
		
		//Database Connection:
		include('../config/connection.php');
		
	     //Constants
	     DEFINE('D_TEMPLATE','template');
	     
	    //functions:
		include('functions/data.php');
		include('functions/template.php');
		include('functions/sandbox.php');
		
		//Site Setup:
		$debug=data_setting_value($dbc,'debug-status');
		
		
		$site_title= 'Mogify';
		$page_title='Homepage';
		if(isset($_GET['page'])){
			$page= $_GET['page'];//set pageid equal to the value given in URL
		}else{
			$page= 'dashboard'; //set page value equal to 1 or homepage
		}

         //page setup:
        include('config/queries.php');
	    
	    //User Setup:
		$user= data_user($dbc, $_SESSION['username']);
			
	    ?>



