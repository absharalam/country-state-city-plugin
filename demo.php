<!doctype html>
<html lang="en">
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	
</head>
<body>
	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <div class="row">
			
			<div class="col-md-4">
				<label>Country</label>
				<select name="country" element-id="country" dependent-state-id="state_id2" dependent-city-id="city_id2" selected-value="101" id="country_id2" class="countrystatecity">
					<option value="">select</option>
				</select>
			</div>
			<div class="col-md-4">
				<label>State</label>
				<select name="state" element-id="state" dependent-city-id="city_id2" selected-value="5" id="state_id2" class="countrystatecity">
					<option value="">select</option>
				</select>
			</div>
			<div class="col-md-4">
				<label>City</label>
				<select name="city" element-id="city" selected-value="459" id="city_id2" class="countrystatecity">
					<option value="">select</option>
				</select>
			</div>
		</div>

	  </div>
	</div>
	<hr>
	
	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <div class="row">
			
			<div class="col-md-4">
				<label>Country</label>
				<select name="p_country" element-id="country" dependent-state-id="state_id1" dependent-city-id="city_id1" selected-value="102" id="country_id1" class="countrystatecity">
					<option value="">select</option>
				</select>
			</div>
			<div class="col-md-4">
				<label>State</label>
				<select name="p_state" element-id="state" dependent-city-id="city_id1" selected-value="1666" id="state_id1" id="state_id1" class="countrystatecity">
					<option value="">select</option>
				</select>
			</div>
			<div class="col-md-4">
				<label>City</label>
				<select name="p_city" element-id="city" selected-value="21460" id="city_id1" class="countrystatecity">
					<option value="">select</option>
				</select>
			</div>
		</div>

	  </div>
	</div>
		
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script type="text/javascript" src="countrystatecity.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.countrystatecity').countrystatecity();
	});
</script>
</body>
</html>