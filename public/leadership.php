<?php

if( isset($_POST['submit']) ) {
	//if user submitted from index
	
	require_once('library/includes/db.php');
	
	if( $_POST['email'] != '' ) {
		// if email was submitted
		$participant = mysqli_real_escape_string($db, $_POST['participant']);
		$company = mysqli_real_escape_string($db, $_POST['company']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$date = $_POST['date'];
		
		//checks in email exists in db so users can return if disconnected
		$check_sql = "SELECT id FROM survey WHERE email = '$email' AND date = '$date'";
		$check_result = mysqli_query($db, $check_sql);
		
		if( $check_result->num_rows > 0 ) {
			// if the email exists in db, $id is set
			$user = $check_result->fetch_assoc();
			$id = $user['id'];
		} else {
			// if email does not exist, it will be added
			$insert_sql = "INSERT INTO survey (date, participant, company, email) VALUES ($date, $participant, $company, $email)";
			$insert_result = mysqli_query($db, $insert_sql);
			
			if( $insert_result && mysqli_affected_rows($db) == 1 ) {
				//success
			} else {
				//fail
				header('Location: index.php?m=index_error');
			}
			
		}
		
	} else {
		// if empty email field
		header("Location: index.php?m=Please%20enter%20an%20email%20address.");
	}
} else {
	// if user comes without going through index first
	header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="">
	
	<title>Leadership</title>
	
	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<link href="library/css/survey.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<form class="form-signin" method="post" action="customer.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		
		<h2>Leadership</h2>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Clear common purpose</h3>
				<p>The organization has a clearly defined common purpose that the leadership team understands and supports.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="leadership1" id="q1o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="leadership1" id="q1o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="leadership1" id="q1o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Process for communicating common purpose</h3>
				<p>The organization has processes in place for clearly communicating the common purpose to all stakeholders, including current employees, new employees, contractors, and partner organizations.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="leadership2" id="q2o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="leadership2" id="q2o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="leadership2" id="q2o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Clear responsibility for CX</h3>
				<p>A single individual <strong>other than the CEO</strong> has a clear responsibility and authority for designing, implementing, and measuring customer experience across the organization.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="leadership3" id="q3o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="leadership3" id="q3o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="leadership3" id="q3o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Leadership commitment to CX</h3>
				<p>The organization’s leadership has a clear understanding of the organization’s customer experience goals and is committed to achieving those goals.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="leadership4" id="q4o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="leadership4" id="q4o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="leadership4" id="q4o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Clear service theme</h3>
				<p>The leadership team or CX organization has created a clear service theme that supports the common purpose. Leadership continuously communicates the service theme throughout the organization.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="leadership5" id="q5o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="leadership5" id="q5o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="leadership5" id="q5o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Approach for measuring CX ROI</h3>
				<p>The leadership team or CX organization has an approach for measuring the real‐world financial and business goal outcomes that result from the organization’s CX efforts.</p>
				<fieldset class="form-group">
					<legend>The organization meets this objective:</legend>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="leadership6" id="q6o1" value="0" checked>Not at all</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="leadership6" id="q6o2" value="1">Inconsistently</label>
					</div>
					<div class="form-check">
						<label class="form-check-label"><input type="radio" class="form-check-input" name="leadership6" id="q6o3" value="2">Consistently</label>
					</div>
				</fieldset>
			</div>
		</div>
		
		<input type="submit" class="btn btn-lg btn-primary" name="submit" id="submit" value="Next" />
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