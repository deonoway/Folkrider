<?php

	session_start();

	// In the code files, you'll need to link this way; they're all in the same
	// folder, so they can be linked by name only.
	require_once("globals.php");
	require_once("utility.php");

	/*
	This is another best-practice type thing that I don't really expect you to
	know (or easily find out, aside from a pro saying so):  use a single folder
	for code stuff.  Make sure to make it "non-indexable" (don't allow people to
	get a directory listing of it), and use ALL LOWER CASE in filenames and
	directory paths.  THIS IS VERY IMPORTANT because *NIX (in this case, CentOS)
	is CASE-SENSITIVE.  I don't have time to parse your whole tree, but I'd be
	willing to bet that at least ONE item is related to that; for example:  I 
	fixed your radio microphone image on the main page by proper casing.
	
	So, use this file and add your other files the way I did with the ones above.
	Dump all of your "utility" functions into the "utility.php" file, and all of
	the variables you want available site-wide into the "globals.php" file.
	
	Proper form for globals is like you see it there:  $ALL_CAPS_WITH_UNDERSCORES.
	Don't forget that you'll need to reference them that way as well.  It's good
	form because then you'll know easily when you're referencing something global
	versus something buried in your page code.  Also good form is to NOT CHANGE 
	THEM.  Set them in the globals file and leave them alone.
	*/

?>