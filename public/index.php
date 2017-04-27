<?php
	$today = date("Y-m-d");
	$message = "Please fill in these required fields";
	
	if ($_GET['m']){
		$message = $_GET['m'];
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Signin</title>
	
	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!-- Custom styles -->
	<link href="library/css/survey.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<form class="form-signin" method="post" action="leadership.php">
		<input type="hidden" name="date" value="<?php echo $today; ?>">
		
		<h2 class="form-signin-heading"><?php echo $message; ?></h2>
		
		<label for="participant" class="sr-only">Name</label>
		<input type="text" name="participant" id="participant" class="form-control" placeholder="Name" autofocus>
		
		<label for="company" class="sr-only">Company</label>
		<input type="text" name="company" id="company" class="form-control" placeholder="Company">
		
		<label for="email" class="sr-only">Email address (required)</label>
		<input type="email" name="email" id="email" class="form-control" placeholder="Email address (required)" required>
		
		<input type="submit" class="btn btn-lg btn-primary" name="submit" id="submit" value="Begin" />
	</form>
</div> <!-- /container -->

<!-- jQuery js CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- tether js CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<!-- bootstrap js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src="library/vendor/bootstrap/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>