<?php

// The login.php is invoked when the user is either trying to create a new
// account or to login. If it's the former, the NEW parameter will be set.
// To send a user to a different page (after possibly executing some code,
// you can use the statement:
//
//     header('Location: view.php');
//
// This will send the user tp view.php. To use this mechanism, the
// statement must be executed before any of the document is output.

if(isset($_POST['NEW'])) {
	// Your new user creation code goes here. If the user name
	// already exists, then display an error. Otherwise, create a new
	// user account and send him to view.php.
} else {
	// Your user login code goes here. If the user name and password
	// are not correct, then display an error. Otherwise, log in the
	// user and send him to view.php.
}
?>
<DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 3.2//EN">
<HEAD>
    <TITLE>Chattr</TITLE>
</HEAD>
<BODY BGCOLOR=WHITE>
<TABLE ALIGN="CENTER">
<TR><TD>
<H1>Chattr</H1>
</TD></TR>
<TR><TD>
<H2><?php echo "YOUR ERROR MESSAGE GOES HERE" ?></H2>
<a href="index.php">Back</a>
</TD></TR>
</TABLE>
</BODY>
