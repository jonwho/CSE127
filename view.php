<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 3.2//EN">
<HEAD>
    <TITLE>Chattr</TITLE>
</HEAD>
<BODY BGCOLOR=WHITE>
<TABLE ALIGN="CENTER">
<TR><TD>
<H1>Chattr</H1>
</TD></TR>

<?php
	// The following <TR> element should only appear if the user is
	// logged in and viewing his own entry.
?>
    <TR><TD>
    <FORM ACTION="post.php" METHOD="POST">
    <TABLE CELLPADDING=5>
    <TR><TD>Message:</TD><TD><INPUT TYPE="TEXT" NAME="TEXT">
    <INPUT TYPE="SUBMIT" VALUE="Submit"></TD></TR>
    </TABLE>
    </FORM>
    </TD></TR>  
<?php
	// The following <TR> element should always appear if the user
	// exists.
?>
    <TR><TD>
    <TABLE CELLPADDING=5>
    <TR><TH>When</TH><TH>Who</TH><TH>What</TH></TR>
	<?php
		// Display user's posts here. The structure is:
		//
		//     <TR>
		//         <TD>DATE GOES HERE</TD>
		//         <TD>USER NAME GOES HERE</TD>
		//         <TD>MESSAGE TEXT GOES HERE</TD>
		//     </TR>
    ?>
    </TABLE>
    </TD></TR>
<?php
	// The following <TR> element should be displayed if the user
	// name does not exist. Add code to display user name.
?>
    <TR><TD>
    <H2>User <?php echo "USER NAME GOES HERE" ?> does not exist!</H2>
    </TD></TR>
<?php
	// The following <TR> element should only be shown if the user
	// is logged in.
?>
<TR><TD><A HREF="logout.php">Logout</A></TR></TD>
<?php
	// Done!
?>
</TABLE>
</BODY>

