<?php
include('php/constants.php');
?>

<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Optional theme -->
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		
		<!-- Custom JS files -->
		<script src="js/custom-constants.js"></script>

		<title>DNS Cleanup</title>
	</head>
	<body>
		
		<div class="section">
			<div class="container">
			
				<div class="row">
					<h1 class="text-center">DNS Cleanup</h1>
				</div>
				
				<br>
			
				<div class="row">
					<div class="col-md-10">
						<div class="input-group has-success">
							<span class="input-group-addon">GET</span>
							<input class="form-control" type="text" placeholder="DNS Endpoint" name="getApi" id="getApi" value="<?php echo $GET_DNS_ENDPOINT ?>" readonly="readonly" />
						</div>
					</div>
					<div class="col-md-2">
						<button type="button" class="btn btn-primary" onclick="getDnsEntries();">Get DNS</button>
					</div>
				</div>
				
				<br>
				
				<div class="row">
					<div class="col-md-11">
						<textarea class="form-control" rows="20" name="apiBody" id="apiBody" disabled></textarea>
					</div>
				</div>
				
				<br>
				<br>
				<br>
				
				<div class="row">
					<div class="col-md-10">
						<input class="form-control" type="text" placeholder="Enter the DNS entries to filter..." name="filterText" id="filterText" value="" />
					</div>
					<div class="col-md-2">
						<button type="button" class="btn btn-primary" onclick="filterDnsEntries();">Filter DNS</button>
					</div>
				</div>
				
				<br>
				
				<div class="row">
					<div class="col-md-11">
						<textarea class="form-control" rows="20" name="updatedApiBody" id="updatedApiBody"></textarea>
					</div>
				</div>
				
				<br>
				
				<div class="row">
					<div class="col-md-10">
						<div class="input-group has-success">
							<span class="input-group-addon">PUT</span>
							<input class="form-control" type="text" placeholder="DNS Endpoint" name="putApi" id="putApi" value="<?php echo $PUT_DNS_ENDPOINT ?>" readonly="readonly" />
						</div>
					</div>
					<div class="col-md-2">
						<button type="button" class="btn btn-primary" onclick="updateDnsEntries();">Update DNS</button>
					</div>
				</div>
				
				<br>
				<br>
				<br>
				
			</div>
		</div>
		
		<br>
		<br>
		<br>
		
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="text-center">
							Copyright &copy; 2020, <a href="https://google.com/search?q=Pratik Bhudke">Pratik Bhudke</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		
		
		

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
		
		<style>
			textarea#apiBody, textarea#updatedApiBody {
				resize: none;
				overflow-y: scroll;
				overflow-wrap: break-word;
			}
		</style>
		
	</body>
</html>