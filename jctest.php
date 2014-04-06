<?php

/*
This is about as simple a test as one can manage.  As you can see, everything I put
together for this test works just fine.  Admittedly, I don't have it hooked up to 
any forms or sessions or anything, but it's a start.  I set some simple session
variables in this page, added a link to a second test page, and retrieved those
variables on the second page.  You should see that it's not a session/configuration
issue right away.

I know that you're new to this stuff, so it's all forgivable, but that's why there
are standards to how this stuff is usually done.  I know you wouldn't know where to
look and that I wasn't able to provide a better learning experience.  Hopefully, the
example of these couple pages will show you how to get the rest of it done.

As for login forms, use the form structure I put into the second page and get it all
linked up in the PHP with the session.  That's your homework. ^_~
*/

	// Always make this require_once the second thing you include.
	// In the HTML page, you'll need to link this way (or use absolute paths).
	require_once("./code/master_include.php");
	
	$_SESSION["the_test_var"] = "This is a test var.";
	$_SESSION["another_var"] = "Second test var.";

?>
<!DOCTYPE html>
<html>

<head>

	<title>Test page</title>

</head>

<body>

	<?php echo $GLOBAL_TEST; ?>
	<?php echo DoStuff(); ?>
	
	<p><a href="./jctest2.php" title="test link">Test link</a></p>

</body>

</html>