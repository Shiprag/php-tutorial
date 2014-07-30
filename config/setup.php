<?php
		//Setup file:
		error_reporting(0);
		
		//Database Connection:
		include('config/connection.php');
		
		//Constants
	     DEFINE('D_TEMPLATE','template');
		 DEFINE('D_VIEW','view');
	     
	    //functions:
	    include('functions/sandbox.php');
		include('functions/data.php');
		include('functions/template.php');
		
		//Site Setup:
		$debug=data_setting_value($dbc,'debug-status');
		
		$path=get_path();//setup for clean urls
		
		$site_title= 'Mogify';
		$page_title='Homepage';
		if(isset($_GET['page'])){
			$pageid= $_GET['page'];//set pageid equal to the value given in URL
		}else{
			$pageid= 'home'; //set page value equal to 1 or homepage
		}

         //page setup:
	    $page= data_page($dbc,$pageid);
		$view= data_post_type($dbc,$page['type']);
		
	?>



