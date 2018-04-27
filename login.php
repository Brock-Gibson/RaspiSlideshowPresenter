<!DOCTYPE html>
<html>
<!--Created By: Nicholas Riley and Brock Gibson
    Application is designed as a kiosk display for the Mizzou Christian Campus House-->
<head>
	<title>CCH Slideshow Login</title>
	<meta charset="utf-8">
	<link href="w3.css" rel="stylesheet" type="text/css">

</head>
<body class="w3-grey">
    <div class="w3-container w3-grey w3-center">
        <h1 class="w3-jumbo w3-center" >Slideshow Login</h1>

        <?php
            if ($error) {
                print "<div class=\"w3-panel w3-teal w3-center w3-padding w3-round w3-large\">$error</div>\n";
            }
        ?>

        <form action="loginPHP.php" method="POST">

            <input type="hidden" name="action" value="do_login">

            <label class ="w3-large" for="username">User name:</label>
            <input type="text" id="username" name="username" class="w3-input w3-border w3-round" autofocus value="<?php print $username; ?>">

            <label class ="w3-large" for="password">Password:</label>
            <input type="password" id="password" name="password" class="w3-input w3-border w3-round">

            <div class= "w3-center w3-padding">
                            <input class = "w3-button w3-white w3-xlarge w3-hover-teal" type="submit" value="Submit">
            </div>

        </form>
    </div>

</body>
</html>
