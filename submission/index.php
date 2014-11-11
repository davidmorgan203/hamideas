<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hamilton Ideas - What's Your Idea?</title>
<meta name="description" content="A crowd-sourced innovation platform aimed at improving the Hamilton College Community" />
<meta name="keywords" content="" />
<link rel="shortcut icon" href="favicon.ico" />
<!-- Style -->
<link rel="stylesheet" media="screen" type="text/css" href="css/reset.css" />
<link rel="stylesheet" media="screen" type="text/css" href="css/style.css" />

<!-- Javascript -->
<!-- Including Jquery Library in Code -->
<script src="js/jquery.js"></script>
<script src="js/wordcount.js"></script>
<script> 
	$(document).ready(function () {
		$("textarea").textareaCounter({ limit: 100 });
	});
</script>
<!-- Validate that e-mails are @hamilton.edu & submit the form via javascript -->
<script>
function submitform(){
	document.bigform.submit(function() {
		validateEmail($('input').val());
		return false;
	});
}

function validateEmail(email) {
    var re = /^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/;
    if (re.test(email)) {
        if (email.indexOf('@hamilton.edu', email.length - '@hamilton.edu'.length) !== -1) {
            alert('Submission was successful.');
        } else {
            alert('Email must be a Hamilton e-mail address.');
        }
    } else {
        alert('Not a valid e-mail address.');
    }
}

function submitform()
{
  document.bigform.submit();
}
</script>
</head>
<body>
	<div id="big">
	<div class="ribbon">
		<p>Voting Starts October 1st!</p>
	</div>
		<div id="logo-block">
			<img src="img/logo.png" width="150px" alt="Hamilton Ideas" >
			<h1 id="idea-text"> Hamilton Ideas </h1>
		</div>
		<h1 id="call"> How would you make Hamilton <br/> a better place? </h1>
		<div id="sub-box">
			<h2 id="pitch">Pitch your idea in 100 words and if the campus selects it <br/>we give you $1000 to do it.</h2>
			<form action="submit.php" method="post" name="bigform">
				<textarea name="idea" id="idea-input" placeholder="What's your idea?"></textarea>
				<input type="email" name="email" id="mail" placeholder="Please enter your @hamilton.edu email"><br />
				<a href="javascript: submitform()" id="idea-submit">Submit</a>
			</form>
		</div>
		<?php
				
		?>
		<h3 id="scroll"> Scroll Down to See More Ideas</h3>
		<img src="img/down1.png" alt="down" id="down"> <br />
		<img src="img/dot.png" alt="down" style="opacity:0.7;" width="8px">
		<br>
		<img src="img/dot.png" alt="down" style="opacity:0.7; margin-left:-3px; margin-top:5px;" width="8px">
	</div>
	<h1 id="idea-head"> Here's What Others Want to Do </h1>
	<div id="idea-container">
		<div class="idea-box">
			<div class="ribbon-box">
				<p>Come back 10/1/15 to Vote!</p>
			</div>
			<p> Hi I'm an Idea. Look how wonderful I am! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
		<div class="idea-box">
			<div class="ribbon-box">
				<p>Come back 10/1/15 to Vote!</p>
			</div>
			<p> Hi I'm an Idea. Look how wonderful I am!</p>
		</div>
		<div class="idea-box">
			<div class="ribbon-box">
				<p>Come back 10/1/15 to Vote!</p>
			</div>
			<p> Hi I'm an Idea. Look how wonderful I am!</p>
		</div>
		<div class="idea-box">
			<div class="ribbon-box">
				<p>Come back 10/1/15 to Vote!</p>
			</div>
			<p> Hi! I'm 100 Words! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
		</div>
	</div>
	<p id="close-top"> What's your idea?</p>
</body>
</html>