<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: TangledDemo';
    $to = 'theodiamand38@gmail.com';
    $subject = 'Feedback';
    $human = $_POST['human'];

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit'] && $human == '4') {
        if (mail ($to, $subject, $body, $from)) {
	    echo '<p>Σας ευχαριστούμε πολύ!</p>';
	} else {
	    echo '<p>Something went wrong, go back and try again!</p>';
	}
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>
