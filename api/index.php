<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>Disaster Mangement</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

		<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css" rel="stylesheet" type="text/css">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">


	</head>


	<body>
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="dummy/img5.jpeg" alt="" class="logo" style="height:30px; width:45px">
						<div class="logo-copy">
							<h1 class="site-title">Disaster Management</h1>
							<small class="site-description">Save Yourself!!!</small>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.html">Prediction</a></li>
							<li class="menu-item"><a href="../weather_final/index1.html">Home</a></li>
							<li class="menu-item"><a href="../About/about.html">About</a></li>
							<li class="menu-item"><a href="../About/review.html">Review for us</a></li>
							<li class="menu-item"><a href="../About/joinus.html">Join us</a></li>
							<li class="menu-item"><a href="../About/contact.html">Contact</a></li>
						</ul> <!-- .menu -->


					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">

    			<form class="well form-horizontal" action="index.php" method="POST"  id="contact_form">
						<fieldset>

						<!-- Form Name -->
						<legend>Predict The Thunderstorm possibility!</legend>

						<!-- Text input-->

						<div class="form-group">
						  <label class="col-md-4 control-label">Highest Temperature</label>
						  <div class="col-md-4 inputGroupContainer">
						  <div class="input-group">
						  <span class="input-group-addon"></span>
						  <input  name="Hightemp" placeholder="Highest Temperature(in F)" class="form-control"  type="text">
						    </div>
						  </div>
						</div>

						<!-- Text input-->

						<div class="form-group">
						  <label class="col-md-4 control-label" >Average Temperature</label>
						    <div class="col-md-4 inputGroupContainer">
						    <div class="input-group">
						  <span class="input-group-addon"></span>
						  <input name="Avgtemp" placeholder="Average Temperature(in F)" class="form-control"  type="text">
						    </div>
						  </div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >Lowest Temperature</label>
								<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
							<span class="input-group-addon"></span>
							<input name="Lowtemp" placeholder="Lowest Temperature(in F)" class="form-control"  type="text">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >Highest Dew Point (F)</label>
								<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
							<span class="input-group-addon"></span>
							<input name="DewPointHigh" placeholder="Highest Dew Point(in F)" class="form-control"  type="text">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >Lowest Dew Point (F)</label>
								<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
							<span class="input-group-addon"></span>
							<input name="DewPointLow" placeholder="Lowest Dew Point(in F)" class="form-control"  type="text">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >Average Dew Point (F)</label>
								<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
							<span class="input-group-addon"></span>
							<input name="DewPointAvg" placeholder="Average Dew Point(in F)" class="form-control"  type="text">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >Highest Humidity (in %)</label>
								<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
							<span class="input-group-addon"></span>
							<input name="HumidityHigh" placeholder="Highest Humidity (in %)" class="form-control"  type="text">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >Average Humidity (in %)</label>
								<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
							<span class="input-group-addon"></span>
							<input name="HumidityAvg" placeholder="Average Humidity (in %)" class="form-control"  type="text">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >Lowest Humidity (in %)</label>
								<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
							<span class="input-group-addon"></span>
							<input name="HumidityLow" placeholder="Lowest Humidity (in %)" class="form-control"  type="text">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >Highest Sea Level Pressure (in inches)</label>
								<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
							<span class="input-group-addon"></span>
							<input name="SeaLevelPressureHigh" placeholder="Highest Sea Level Pressure (in inches)" class="form-control"  type="text">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >Average Sea Level Pressure (in inches)</label>
								<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
							<span class="input-group-addon"></span>
							<input name="SeaLevelPressureAvg" placeholder="Average Sea Level Pressure (in inches)" class="form-control"  type="text">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >Lowest Sea Level Pressure (in inches)</label>
								<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
							<span class="input-group-addon"></span>
							<input name="SeaLevelPressureLow" placeholder="Lowest Sea Level Pressure (in inches)" class="form-control"  type="text">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >Highest Visibility (in miles)</label>
								<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
							<span class="input-group-addon"></span>
							<input name="VisibilityHighMiles" placeholder="Highest Visibility (in miles)" class="form-control"  type="text">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >Average Visibility (in miles)</label>
								<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
							<span class="input-group-addon"></span>
							<input name="VisibilityAvgMiles" placeholder="Average Visibility (in miles)" class="form-control"  type="text">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >Lowest Visibility (in miles)</label>
								<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
							<span class="input-group-addon"></span>
							<input name="VisibilityLowMiles" placeholder="Lowest Visibility (in miles)" class="form-control"  type="text">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >Highest Wind Speed (in MPH)</label>
								<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
							<span class="input-group-addon"></span>
							<input name="WindHighMPH" placeholder="Highest Wind Speed (in MPH)" class="form-control"  type="text">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >Average Wind Speed (in MPH)</label>
								<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
							<span class="input-group-addon"></span>
							<input name="WindAvgMPH" placeholder="Average Wind Speed (in MPH)" class="form-control"  type="text">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >Lowest Wind Speed (in MPH)</label>
								<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
							<span class="input-group-addon"></span>
							<input name="WindGustMPH" placeholder="Lowest Wind Speed (in MPH)" class="form-control"  type="text">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" >Precipitation Sum (in inches)</label>
								<div class="col-md-4 inputGroupContainer">
								<div class="input-group">
							<span class="input-group-addon"></span>
							<input name="PrecipitationSumInches" placeholder="Precipitation Sum (in inches)" class="form-control"  type="text">
								</div>
							</div>
						</div>

						<!-- Text input-->



						<div class="form-group">
						  <label class="col-md-4 control-label">City</label>
						    <div class="col-md-4 inputGroupContainer">
						    <div class="input-group">
						        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
						  <!-- <input name="city" placeholder="city" class="form-control"  type="text"> -->Austin
						    </div>
						  </div>
						</div>

						<!-- Select Basic -->

						<div class="form-group">
						  <label class="col-md-4 control-label">State</label>
						    <div class="col-md-4 selectContainer">
						    <div class="input-group">
						        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
						    <select name="state" class="form-control selectpicker" >
						      <!-- <option value=" " >Please select your state</option> -->
						      <option >Texas</option>
						    </select>
						  </div>
						</div>
						</div>

						<!-- Text input-->


						<!-- Button -->
						<div class="form-group">
						  <label class="col-md-4 control-label"></label>
						  <div class="col-md-4">
						    <button type="submit" class="btn btn-warning" name="submit" >Send <span class="glyphicon glyphicon-send"></span></button>
						  </div>
						</div>

						</fieldset>
					</form>
				</div>
    </div><!-- /.container -->




			</main>
			<?php
				if(isset($_POST['submit'])){
					$Hightemp = $_POST['Hightemp'];
					$Avgtemp = $_POST['Avgtemp'];
					$Lowtemp = $_POST['Lowtemp'];
					$DewPointHigh = $_POST['DewPointHigh'];
					$DewPointAvg = $_POST['DewPointAvg'];
					$DewPointLow = $_POST['DewPointLow'];
					$HumidityHigh = $_POST['HumidityHigh'];
					$HumidityAvg = $_POST['HumidityAvg'];
					$HumidityLow = $_POST['HumidityLow'];
					$SeaLevelPressureHigh = $_POST['SeaLevelPressureHigh'];
					$SeaLevelPressureAvg = $_POST['SeaLevelPressureAvg'];
					$SeaLevelPressureLow = $_POST['SeaLevelPressureLow'];
					$VisibilityHighMiles = $_POST['VisibilityHighMiles'];
					$VisibilityAvgMiles = $_POST['VisibilityAvgMiles'];
					$VisibilityLowMiles = $_POST['VisibilityLowMiles'];
					$WindHighMPH = $_POST['WindHighMPH'];
					$WindAvgMPH = $_POST['WindAvgMPH'];
					$WindGustMPH = $_POST['WindGustMPH'];
					$PrecipitationSumInches = $_POST['PrecipitationSumInches'];

					$str = '{
			"Inputs":{
					"input1": {
						"ColumnNames": [
							"TempHighF",
							"TempAvgF",
							"TempLowF",
							"DewPointHighF",
							"DewPointAvgF",
							"DewPointLowF",
							"HumidityHighPercent",
							"HumidityAvgPercent",
							"HumidityLowPercent",
							"SeaLevelPressureHighInches",
							"SeaLevelPressureAvgInches",
							"SeaLevelPressureLowInches",
							"VisibilityHighMiles",
							"VisibilityAvgMiles",
							"VisibilityLowMiles",
							"WindHighMPH",
							"WindAvgMPH",
							"WindGustMPH",
							"PrecipitationSumInches"
						],
						"Values": [
							[
								"'.$Hightemp.'",
								"'.$Avgtemp.'",
								"'.$Lowtemp.'",
								"'.$DewPointHigh.'",
								"'.$DewPointAvg.'",
								"'.$DewPointLow.'",
								"'.$HumidityHigh.'",
								"'.$HumidityAvg.'",
								"'.$HumidityLow.'",
								"'.$SeaLevelPressureHigh.'",
								"'.$SeaLevelPressureAvg.'",
								"'.$SeaLevelPressureLow.'",
								"'.$VisibilityHighMiles.'",
								"'.$VisibilityAvgMiles.'",
								"'.$VisibilityLowMiles.'",
								"'.$WindHighMPH.'",
								"'.$WindAvgMPH.'",
								"'.$WindGustMPH.'",
								"'.$PrecipitationSumInches.'"
							]
						]
					}
				},
				"GlobalParameters": {}
			} ';

					//$body = json_encode($data);
					//echo $body;

					$url = 'https://ussouthcentral.services.azureml.net/workspaces/75db7323ce3148c385c6e3493a168335/services/4cc21d07da91497085c8925c46106808/execute?api-version=2.0&details=true';
					$api_key = 'uzPcr8K9qMmCcIfH7ubqlMlbtLocORGUZEA+N0MEQb43uOM0q9C5EXfMFiYRw9hvZFgSimhlwchECQoCVoOY7g==';

					$ch = curl_init($url);
					// curl_setopt($ch,CURLOPT_URL,$url);
					curl_setopt($ch,CURLOPT_POST,1);
					curl_setopt($ch,CURLOPT_POSTFIELDS,$str);

					$headers = array("Content-Type:application/json", "Authorization:Bearer " . $api_key,"Accept: application/json");
					//$myarr[""] = "";
					//$myarr[""] = "Bearer " . $api_key;
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
					//ADD 'Content-Type':'application/json',

					curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
					$response = curl_exec($ch);
					// echo $response;
					curl_close($ch);
					$result = json_decode($response);
					echo "<script>alert(".$result->Results->output1->value->Values[0][1]*100 .")</script>";
				}
			?>
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">About Us</h3>
								<p>We are the newest idea for diasater management and you have to visit us. That is all.</p>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Recent Review</h3>
								<ul class="no-bullet">
									<li>The use of the word</li>
									<li>'Recent' is redundant</li>
									<li>We always have an</li>
									<li>awesome review.</li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Help Center</h3>
								<ul class="no-bullet">
									<li>You don't actually</li>
									<li>need our help. This</li>
									<li>site is more friendly</li>
									<li>than your friend.</li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Join Us</h3>
								<ul class="no-bullet">
									<li>You don't know the</li>
									<li>best feeling ever;</li>
									<li>to be a part of</li>
									<li>Disaster Management.</li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Social Media</h3>
								<ul class="no-bullet">
									<li><a href="">Facebook</a></li>
									<li><a href="" >Twitter</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></li>
									<li><a href="">Google+</a></li>
									<li><a href="">Pinterest</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Newsletter</h3><div class="createsend-button" style="height:27px;display:inline-block;" data-listid="j/B5/B7F/351/0C5F2C3AF92E32D9">
</div><script type="text/javascript">(function () { var e = document.createElement('script'); e.type = 'text/javascript'; e.async = true; e.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://btn.createsend1.com/js/sb.min.js?v=3'; e.className = 'createsend-script'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(e, s); })();</script>

							</div>
						</div>
					</div> <!-- .row -->

					<div class="colophon"><center>This was tough to design and hence <br>Copyright Disaster Management 2018 | All rights reserved </center></div>
				</div>
			</footer>
		</div>
		<!-- Default snippet for navigation -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js" type="text/javascript"></script>


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		<script src="js/main.js"></script>

	</body>

</html>
