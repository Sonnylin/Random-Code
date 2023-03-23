<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Air Pollution Indicator</title>
	<link rel="stylesheet" href="./style.css" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@700&family=Montserrat:wght@700&family=Poppins&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>
<body>
	<div class="root">
		<h1 class="heading">Air Pollution Indicator</h1>
		<div class="location-container">
			<h2 class="sub-heading">Your Location :</h2>
			<h1 class="heading">Air Pollution Indicator</h1>
                        <!-- <label for="chkLocation">
                            <input type="checkbox" id="chkLocation" />
                            Filter by Personal Location
                        </label> -->
                        <hr />
                        <div id="search-form" class="form-group mt-1 pt-1">
                            <input id="search" class="form-control" type="text" placeholder="Enter City" aria-label="Search"/>
                            <button id="search-btn" class="btn btn-block btn-info mt-3" type="submit">
                            Search
                            <i class="fas fa-search ml-1"></i>
                            </button>
						</div>
		</div>
		<div class="air-info">
			<h2 class="sub-heading">Air Quality Index :</h2>
			<span class="air-quality">...</span>
			<span class="arr">&nbsp;&rarr;&nbsp;</span>
			<span class="air-quality-status">...</span>
			<div class="component-container">
				<h2 class="sub-heading">
					Concentration of pollutants in air :
				</h2>

				<div>
					<h3 class="component-names">Carbon Monoxide :</h3>
					<span class="component-val" data-comp="co"></span>
				</div>
				<div>
					<h3 class="component-names">Nitrogen Monoxide :</h3>
					<span class="component-val" data-comp="no"></span>
				</div>
				<div>
					<h3 class="component-names">Nitrogen Dioxide :</h3>
					<span class="component-val" data-comp="no2"></span>
				</div>
				<div>
					<h3 class="component-names">Ozone :</h3>
					<span class="component-val" data-comp="o3"></span>
				</div>
				<div>
					<h3 class="component-names">Sulphur Dioxide :</h3>
					<span class="component-val" data-comp="so2"></span>
				</div>
				<div>
					<h3 class="component-names">Fine particles matter :</h3>
					<span class="component-val" data-comp="pm2_5"></span>
				</div>
				<div>
					<h3 class="component-names">Coarse particulate matter :</h3>
					<span class="component-val" data-comp="pm10"></span>
				</div>
				<div>
					<h3 class="component-names">Ammonia :</h3>
					<span class="component-val" data-comp="nh3"></span>
				</div>
				<!--  micrograms per cubic meter of air (μg/m3)  -->
			</div>
		</div>
		<footer>
			Plant more <img src="images/tree.svg" width="35" height="35" />
		</footer>
	</div>
	<script src="assets/js/air.js"></script>
</body>
</html>

<!--
<h1 class="heading">Air Pollution Indicator</h1>
                        <label for="chkLocation">
                            <input type="checkbox" id="chkLocation" />
                            Filter by Personal Location
                        </label>
                        <hr />
                        <form id="search-form" class="form-group mt-1 pt-1">
                            <input id="search" class="form-control" type="text" placeholder="Enter City" aria-label="Search"/>
                            <button id="search-btn" class="btn btn-block btn-info mt-3" type="submit">
                            Search
                            <i class="fas fa-search ml-1"></i>
                            </button>
                        </form>
--> 

