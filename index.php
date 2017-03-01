<!DOCTYPE html>
<html>
<head>
	<title>Test Title</title>
</head>
<body>
	<form role="form" method="post" action="mail.php">

	    <label for="name">Full Name</label>
	    <input required name="contactname" type="text">

	    <label for="email">Email Address</label>
	    <input required name="contactemail" type="email">

	    <label for="phone">Phone Number</label>
	    <input required name="contactphone" type="tel">

	    <label for="message">Message</label>
	    <textarea required name="contactmessage" rows="3"></textarea>

	 	<button name="submit" type="submit" class="btn btn-default">Submit</button>
	</form>
</body>
</html>
