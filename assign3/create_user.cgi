#!/usr/bin/perl
use warnings;
use strict;
use DBI;
use CGI qw/:standard/;
use CGI::Carp qw/fatalsToBrowser/;

# this program will create user accounts with encrypted passwords

print httpheaderstuff();
print headstuff();
print "<h2>Create user</h2>";

if (param()) {
	my $uname = param("uname");
	my $role = param("role");
	my $pswd1 = param("pswd1");
	my $pswd2 = param("pswd2");
	my @errors;
	my $salt = join '', ('.', '/', 0..9, 'A'..'Z', 'a'..'z')[rand 64, rand 64]; # take 2 random chars for salt
	my $dbh =DBI->connect("DBI:mysql:host=db-mysql;database=int322_121b07", "int322_121b07", "ddEB3586") or die(DBI->errstr);
	# check username
	if ($uname !~ /^[a-zA-Z0-9_]{4,10}$/) {
		push @errors, "the username must be 4-10 characters long, only upper/lower case letters, digits, and _ allowed<br/>";
	} else {
		# see if username already exists in db
	  	my $query = "select username from users where username='$uname'";
		my $sth = $dbh->prepare($query);
		my $success = $sth->execute();
		if ($success != 0) {
			push @errors, "that username already exists<br/>";
		}
	}
	
	# see if two passwords are the correct kind and the same
	my $pattern = '^[a-zA-Z0-9]{4,10}$';
	if ($pswd1 !~ /$pattern/ || $pswd2 !~ /$pattern/) {
		push @errors, "passwords must be 4-10 characters long, only upper/lower case letters and digits allowed<br/>";
	}
	if ($pswd1 ne $pswd2) {
			push @errors, "passwords are not the same<br/>";
	}
	
	# check role
	unless ($role =~ /^admin|user$/) {
		push @errors, "the role must be admin or user<br/>";
	}

	if (@errors) {
		print "@errors";
		print create_user_form($uname,$role);
	} else {
		my $encrypted_pswd1 = crypt $pswd1, $salt;
		my $query = qq/insert into users values  ('$uname','$encrypted_pswd1','$role','')/;
		my $rows = $dbh->do($query);
		if ($rows == 1) {
			print "user $uname created with role $role<br/>";
		} else {
			print "couldn't add entry";
		}
	}
	$dbh->disconnect(); # release db connection
} else {
	print create_user_form();
}

print footstuff();


sub create_user_form {
	my ($uname,$role) = @_;
  	return<<FORM;
<form method="post" action="$0">
<table border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td align="right" width="50%">user name:</td>
		<td align="right" width="50%"><input type="text" name="uname"  size="10" value="$uname"/></td>
	</tr>
	<tr>
		<td align="right" width="50%">role (admin or user):</td>
		<td align="right" width="50%"><input type="text" name="role"  size="10" value="$role"/></td>
	</tr>
	<tr>
		<td align="right" width="50%">password:</td>
		<td align="right" width="50%"><input type="password" name="pswd1"  size="10"/></td>
	</tr>
	<tr>
		<td align="right" width="50%">password:</td>
		<td align="right" width="50%"><input type="password" name="pswd2"  size="10"/></td>
	</tr>
	<tr>
		<td align="right" width="50%"><input type="submit" value="Create user"/></td>
	</tr>
</table>
</form>
FORM
}

sub httpheaderstuff {
	return "Content-type: text/html\n\n";
}

sub headstuff {
	return <<HEAD;
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type" />
	  <title>$_[0]</title>
	</head>
	<body>
		<table width="1000" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0">
			<tr><td> 	
HEAD
}

sub footstuff {
	return <<FOOT;
			</td></tr>
		</table>
	</body>
</html>
FOOT
}
