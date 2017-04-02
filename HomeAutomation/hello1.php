<!DOCTYPE html>
<html lang="en">
<?php  

  session_start();
   if($_SESSION['flag']!=1)
   {   include('index.html');
}
?>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets2/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets2/css/form-elements.css">
        <link rel="stylesheet" href="assets2/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

       
    </head>

    <body>
       <span class="li-social">
               
								<div><a href="logout.php"><p>     </p><img style="margin-left:900px;" src="exit.png" height="42" widhth="42"></i></a></div>
                                                                  <div style="margin-left:900px; color:#FFF;"><h3> Logout</h3></div> 
                        
		</span>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Bootstrap Registration Form Template</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>
				<?php
			
				session_start();
			        $uname=$_SESSION["uname"];
                                 echo("Welcome ".$uname);
                                   ?>
							</strong> </h1>
                            <div class="description">
                            	<p>
	                            	Get information about Temperature & Location and Control your Devices
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
					
                    	<a href="add.php"><div class="col-sm-6 phone">
                    		<a href="add.php"><img src="assets2/img/cloud.png" alt=""></a>
							<h2><font color="White">Add Device</font></h2>
                    	</div></a>
						<a href="control.php"><div class="col-sm-6 phone">
                    		<img src="assets2/img/control.png" alt="">
							<h2><font color="White">Control Device</font></h2>
                    	</div></a>
						
						<a href="location.php"><div class="col-sm-6 phone">
                    		<img src="assets2/img/map.png" alt="">
							<h2><font color="White">Get Location</font><h2>
                    	</div></a>
                       <a href="temperature.php"> <div class="col-sm-6 phone">
                    		<img src="assets2/img/temp.png" alt="">
							<h2><font color="White">Get Temperature</font></h2>
                    	</div></a>
                        
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets2/js/jquery-1.11.1.min.js"></script>
        <script src="assets2/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets2/js/jquery.backstretch.min.js"></script>
        <script src="assets2/js/retina-1.1.0.min.js"></script>
        <script src="assets2/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets2/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>				