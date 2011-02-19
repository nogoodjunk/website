
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php $name='mailinglist'; ?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>CDepot : New and Used CDs and DVDs : Mailing List</title>  
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<?php include('meta.inc'); ?>
		<link href="posstyle.css" rel="stylesheet" media="screen" />
		<style type="text/css" media="screen"><!----></style>
	</head>

	<body>
		<div id="container">
<?php include('head.inc'); ?>
<?php include('side.inc'); ?>
			<div id="main">
			
			
<h2>Mailing List</h2>
								
<p>To subscribe to the CDepot.com Mailing List, enter your information below. This will let you know via email about important CDepot events, such as Sales, changes in hours, etc.</p>

								<p>NOTE: Postings to the mailing list will be made INFREQUENTLY. We do not want to abuse the privilege of being able to email you. We WILL NOT distribute your email address to ANYONE ELSE, under ANY CIRCUMSTANCES.</p>
								<form action="http://scripts.dreamhost.com/add_list.cgi" method="post">
									<input type="hidden" name="list" value="news" /> 
									<input type="hidden" name="url" value="" /> 
									<input type="hidden" name="unsuburl" value="" /> 
									<input type="hidden" name="alreadyonurl" value="" /> 
									<input type="hidden" name="notonurl" value="" /> 
									<input type="hidden" name="invalidurl" value="" /> 
									<input type="hidden" name="emailconfirmurl" value="" /> 
									<input type="hidden" name="domain" value="cdepot.com" /> 
									<input type="hidden" name="emailit" value="1" /> 
									
									<label for="name">Name (optional):</label><input name="name" id="name" value="enter your name here" /> 
									<label for="address">E-mail:</label><input name="address" id="address" value="enter email address here" />

									<p>
									<input type="submit" name="submit" value="Join Our Announcement List" /> 
									<input type="submit" name="unsub" value="Unsubscribe" /></p>
								</form>
				
				
				</div>
<?php include('footer.inc'); ?>
		</div>
	</body>

</html>