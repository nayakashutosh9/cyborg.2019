<?php
	session_start();
	if (!isset($_SESSION['id']) && !isset($_SESSION['first_name']))
	{
		echo "Error connecting to the profile page";
		header('Location: signin.html');
		#header("Location: index.html");
	}
	// include 'db.php';
	
	// if (isset($_POST['username'])&&isset($_POST['password']))
	// {
	// 	echo ($_POST['username']);
	// }
?>

<!DOCTYPE html>

<html lang="en">

<head>

  <title>Cyborg- Room Automation</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<!-- ------------------------------------------------------------------------- -->



<script>
	
        $(document).ready(function() {
            setInterval("get_digital_output_status()", 100);
        });

		
		
        function get_digital_output_status() { var someUrl = "/digital_outputs";
            $.ajax({url: someUrl,dataType: "json",success: function(response) {
                    if (response.digital_outputs["switch1"] == 1)
                        $("#switch1").html("HIGH")
                    else
                        $("#switch1").html("LOW")
                    if (response.digital_outputs["switch2"] == 1)
                        $("#switch2").html("HIGH")
                    else
                        $("#switch2").html("LOW")
                    if (response.digital_outputs["switch3"] == 1)
                        $("#switch3").html("HIGH")
                    else
                        $("#switch3").html("LOW")
                    if (response.digital_outputs["switch4"] == 1)
                        $("#switch4").html("HIGH")
                    else
                        $("#switch4").html("LOW")
		            if (response.digital_outputs["switch5"] == 1)
                        $("#switch5").html("HIGH")
                    else
                        $("#switch5").html("LOW")
                    if (response.digital_outputs["switch6"] == 1)
                        $("#switch6").html("HIGH")
                    else
                        $("#switch6").html("LOW")
                    if (response.digital_outputs["switch7"] == 1)
                        $("#switch7").html("HIGH")
                    else
                        $("#switch7").html("LOW")
                    if (response.digital_outputs["switch8"] == 1)
                        $("#switch8").html("HIGH")
                    else
                        $("#switch8").html("LOW")}})}



        function digital_output_toggle(pinToToggle) {var someUrl = "/digital_outputs/toggle?pin=" + pinToToggle;
            $.ajax({url: someUrl,dataType: "text", success: function(response) {
                    if (response == '1') {
                        $('#' + pinToToggle).html("HIGH");
                    } else if (response == '0') {
                        $('#' + pinToToggle).html("LOW");
                    } else {
                        alert("failed to toggle digital output")
                    }}})}
	
    </script>

    <script>
        $(document).ready(function() {
            setInterval("getTemperature()", 5000);
        });
		
		
        function getTemperature() {
            var someUrl = "/analog_inputs";
            $.ajax({ url:someUrl,dataType:"text",success: function(response) {$("#temp").html(response + "&#8451;");}})}
	</script>





<!-- ------------------------------------------------------------------------- -->

<body style="background-color:#90a3c5;">

<div class="row">

<div class="container-fluid">

	<nav class="navbar" style="background-color:black">

		<div class="container-fluid">
		<div class="nav navbar-nav navbar-left">
			<h1 style="color:white"><b>CYBORG</b></h1>
		</div>

		<ul class="nav navbar-nav navbar-right">
			<li class="nav-item text-white"><a href="logout.php">LOGOUT</a></li>
		

		</ul>

	</div>

	</nav>

   
</div>

</div>
<br>
<div class="well container text-center"><h4>Hello..<?php echo $_SESSION['first_name']; ?></h4></div>
<div class="container">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
             	<div class="row">
                   <div class="btn-group">
					<div class="col-md-5">
                     <button type="button" id="club" class="btn btn-light btn-lg active">Lights</button>
					</div>
					<div class="col-md-5">
                     <button type="button" id="event" class="btn btn-light btn-lg">Fan</button>
					</div>
					<div class="col-md-7">
                     <button type="button" id="project" class="btn btn-light btn-lg">Workstation</button>
					</div>
					<div class="col-md-6">
                     <button type="button" id="project1" class="btn btn-light btn-lg">Temperature</button>
					</div>
                   </div>
                </div>
                    <br><br><br>
	
	

</div>

<br>
<div class="container" id="members" style="display: block;">
                    <div class="card">
                            <div class="card-body">
							<div class="row">
							 <div class="col-md-4">								
							  
								<div class="custom-control custom-switch">
								  <button type="checkbox" class="custom-control-input" id="switch1" data-size="large" name="example" onclick="digital_output_toggle('switch1')"></button>
								  <label class="custom-control-label" for="switch1">Light 1</label>
								</div>
								<br>
								<br>
								<br>
						
                                
								<div class="custom-control custom-switch">
								  <button type="checkbox" class="custom-control-input" id="switch2" name="example" onclick="digital_output_toggle('switch2')"></button>
								  <label class="custom-control-label" for="switch2">Light 2</label>
								</div>
								<br>
								<br>
								<br>
						
							  
								<div class="custom-control custom-switch">
								  <button type="checkbox" class="custom-control-input" id="switch3" name="example" onclick="digital_output_toggle('switch3')"></button>
								  <label class="custom-control-label" for="switch3">Light 3</label>
								</div>
								<br>
								<br>
								<br>
						
							  </div>
							  <div class="col-md-6">
								<img src="pic1.jpg" width="100%" height="100%">
							  </div>
							  </div>
                            </div>
                        </div>
                    </div>
              
                <!-- 2ND -->
                    <div class="container" id="events" style="display: none;">
                        <div class="card">
                            <div class="card-body">
							<div class="row">
							   <div class="col-md-4">
                             
								<div class="custom-control custom-switch">
								  <button type="checkbox" class="custom-control-input" id="switch4" name="example" onclick="digital_output_toggle('switch4')"></button>
								  <label class="custom-control-label" for="switch4">Fan 1</label>
								</div>
								<br>
								<br>
								<br>
						
                               
								<div class="custom-control custom-switch">
								  <button type="checkbox" class="custom-control-input" id="switch5" name="example" onclick="digital_output_toggle('switch5')"></button>
								  <label class="custom-control-label" for="switch5">Fan 2</label>
								</div>
								<br>
								<br>
								<br>
					
							  
								<div class="custom-control custom-switch">
								  <button type="checkbox" class="custom-control-input" id="switch6" name="example" onclick="digital_output_toggle('switch6')"></button>
								  <label class="custom-control-label" for="switch6">Fan 3</label>
								</div>
								<br>
								<br>
								<br>
				
							  </div>
							  <div class="col-md-6">
							   <img src="pic2.jpg" width="100%" height="100%">
							  </div>
							 </div>
                            </div>
                        </div>
                    </div>

                <!-- 3RD -->
                  <div class="container" id="projects" style="display: none;">
                  <div class="card">
                            <div class="card-body">
							 <div class="row">
							  <div class="col-md-4">
                              
								<div class="custom-control custom-switch">
								  <button type="checkbox" class="custom-control-input" id="switch7" name="example" onclick="digital_output_toggle('switch7')"></button>
								  <label class="custom-control-label" for="switch7">Workstation 1</label>
								</div>
								<br>
								<br>
								<br>
					
                           
								<div class="custom-control custom-switch">
								  <button type="checkbox" class="custom-control-input" id="switch8" name="example" onclick="digital_output_toggle('switch8')"></button>
								  <label class="custom-control-label" for="switch8">Workstation 2</label>
								</div>
								<br>
								<br>
								<br>
				
							
								<div class="custom-control custom-switch">
								  <button type="checkbox" class="custom-control-input" id="switch9" name="example" onclick="digital_output_toggle('switch9')"></button>
								  <label class="custom-control-label" for="switch9">Workstation 3</label>
								</div>
								<br>
								<br>
								<br>
						
							  </div>
							  <div class="col-md-6">
							   <img src="pic3.jpg" width="100%" height="100%">
							  </div>
							 </div>
                            </div>
                        </div>
                    </div>
                    

        <!-- 4th -->
        <div class="container" id="temp" style="display: none;">
                  <div class="card">
                            <div class="card-body">
                             <div class="row">
                              <div class="col-md-4">
                                
                                <div class="custom-control custom-switch">
                                  <button type="checkbox" class="custom-control-input" id="switch10" name="example" onclick="digital_output_toggle('switch10')"></button>
                                  <label class="custom-control-label" for="switch7">temp 1</label>
                                </div>
                                <br>
                                <br>
                                <br>
                         
                              
                                <div class="custom-control custom-switch">
                                  <button type="checkbox" class="custom-control-input" id="switch11" name="example" onclick="digital_output_toggle('switch11')"></button>
                                  <label class="custom-control-label" for="switch8">temp 2</label>
                                </div>
                                <br>
                                <br>
                                <br>
                           
                              
                                <div class="custom-control custom-switch">
                                  <button type="checkbox" class="custom-control-input" id="switch12" name="example" onclick="digital_output_toggle('switch12')"></button>
                                  <label class="custom-control-label" for="switch9">temp 3</label>
                                </div>
                                <br>
                                <br>
                                <br>
                         
                              </div>
                              <div class="col-md-6">
                               <img src="pic3.jpg" width="100%" height="100%">
                              </div>
                             </div>
                            </div>
                        </div>
                    </div>


            </div>
			
            </div>
			<!--4TH -->
				<div class="container" id="pro" style="display: none;">
                        <div class="card">
                            <div class="card-body">
                                <button type="button" class="btn btn-info">Temperature</button>
                            </div>
                        </div>
                    </div>
<br>
<br>
<br>



<footer>
		<div class="container-fluid" style="background-color:black">

		
			<div class="col-md-12 text-center">
          <center>
        <h5 style="color:white">FOLLOW US
          <a href="https://www.facebook.com/cyborg.nitr/?ref=aymt_homepage_panel" target="_blank"><img src="http://sundevilgymnastics.com/wp-content/uploads/2016/11/FB-Icon.png" height="25px" width="25px"></a>
          </h5>
      
   
			<!-- <div class="col-md-12 text-center"> -->
        <p style="color:white">Copyright &copy; Cyborg NITR<br>National Institute Of Technolgy Rourkela</p>	
			</center>
      </div>
		
		</div>
	</footer>
  	</div>

	<script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="assets/libs/flot/excanvas.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="assets/libs/flot/jquery.flot.time.js"></script>
    <script src="assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="dist/js/pages/chart/chart-page-init.js"></script>
    <script src="dist/js/cert_form.js"></script>
</body>
</html>