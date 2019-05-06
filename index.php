<?php

require "dbconnect.php";
$error = "";
$success = "";
if (isset($_POST['storeEmailBtn'])) {
	$inputEmail = $_POST['storeEmail'];

	if (empty($inputEmail)) {
		$error = "Email Address can't be empty";
	} else {
		$sqlQuery 	= "INSERT INTO `user_mail` (`mail_id`, `mail_address`) VALUES (NULL, '$inputEmail')";
		$result 	= mysqli_query($dbConnect, $sqlQuery);
		if ($result) {
			$success = "Mail Address Inserted";
		} else {
			$error = "Failed to Inserted Mail Address";
		}
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Mail</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		#error {
			position: relative;
		    padding: .75rem 1.25rem;
		    margin-bottom: 1rem;
		    border: 1px solid transparent;
		    border-radius: .25rem;
		    color: #721c24;
		    background-color: #f8d7da;
		    border-color: #f5c6cb;
		}
		#success {
			position: relative;
		    padding: .75rem 1.25rem;
		    margin-bottom: 1rem;
		    border: 1px solid transparent;
		    border-radius: .25rem;
		    color: #155724;
		    background-color: #d4edda;
		    border-color: #c3e6cb;
		}
	</style>
</head>
<body>
	<div class="container mt-4">
		<div class="row">
			<div class="col-md-12">
				<form class="card" method="post">
					<div class="card-body">
						<h3 class="card-title">Save Email Address</h3>
						<div class="form-group row">
							<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" name="storeEmail" placeholder="Email">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-10">
								
                                <?php
                                    if ($error) {
                                        echo '<p id="error">' . $error . '</p>';
                                    }
                                    if ($success) {
                                        echo '<p id="success">' . $success . '</p>';
                                    }
                                ?>
								<button type="submit" class="btn btn-primary" name="storeEmailBtn">Insert</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-md-12">
				<form class="card" method="post">
					<div class="card-body">
						<h3 class="card-title">Email Send</h3>
						<div class="form-group row">
							<label for="mailSubject" class="col-sm-2 col-form-label">Subject</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="mailSubject" placeholder="Subject">
							</div>
						</div>
						<div class="form-group row">
							<label for="mailMessage" class="col-sm-2 col-form-label">Message</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="mailMessage" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-10">
                                <?php
                                    // if ($error2) {
                                    //     echo '<p id="error">' . $error2 . '</p>';
                                    // }
                                    // if ($success2) {
                                    //     echo '<p id="success">' . $success2 . '</p>';
                                    // }
                                ?>
								<button type="submit" class="btn btn-primary" name="mailSendBtn">Send Email</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php
require "mail.php";
if (isset($_POST['mailSendBtn'])) {

	$mail 	= "imranhadid03@gmail.com";
	$name 	= "imranhadid";
	$subject = $_POST['mailSubject'];
	$message = $_POST['mailMessage'];

	$maildata = array();
    $mailquery = "SELECT * FROM `user_mail`";
    $mailresult = $dbConnect->query($mailquery);
    if ($mailresult) {
        while ($mailrows = $mailresult->fetch_array(MYSQLI_ASSOC)) {
            $maildata[] = $mailrows;
        }
        $mailresult->close();
    }
	foreach ($maildata as $mailAddress) {
		// echo sendMail($mailAddress['mail_address']);
		// echo "<br>";
		// sendmail($mail, $message);
		sendmail($mail, $name, $subject, $message, $message);
		// sendmail($mailAddress['mail_address'], $name, $subject, $message, $message);
	}
	// echo sendmail($mail, $name, $subject, $message, $message);
}

$mail 	= "imranhadid03@gmail.com";
$name 	= "imranhadid";
$subject = "hello";
$message = "hahahahaha";

$maildata = array();
$mailquery = "SELECT * FROM `user_mail`";
$mailresult = $dbConnect->query($mailquery);
if ($mailresult) {
    while ($mailrows = $mailresult->fetch_array(MYSQLI_ASSOC)) {
        $maildata[] = $mailrows;
    }
    $mailresult->close();
}
foreach ($maildata as $mailAddress) {
	// echo sendMail($mailAddress['mail_address']);
	// echo "<br>";
	// sendmail($mail, $message);
	sendmail($mail, $name, $subject, $message, $message);
	// sendmail($mailAddress['mail_address'], $name, $subject, $message, $message);
}

// echo "PHP_VERSION : " . PHP_VERSION;
?>