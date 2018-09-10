<!DOCTYPE html>
<html>
<!--Created By: Nicholas Riley and Brock Gibson
    Application is designed as a kiosk display for the Mizzou Christian Campus House-->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CCH Slideshow Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <style>
        .alpha {
            background-color: #222222;
        }
        label, h1, .errortext {
            color: #FFFEFD;
        }
    </style>
</head>
<body class="alpha">
    <div class="text-center">
        <h1>CCH Slideshow Login</h1>

        <?php
            if ($error) {
                print "<div class=\"text-center errortext\">$error</div>\n";
            }
        ?>

        <div class="container">

            <form action="loginPHP.php" method="POST">
                <br>
                <input type="hidden" name="action" value="do_login">
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">User Name:</label>
                    <div class="col-sm-10">
                    <input class="form-control" type="text" id="username" name="username" autofocus value="<?php print $username; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password: </label>
                    <div class="col-sm-10">
                    <input class="form-control" type="password" id="password" name="password">
                    </div>
                </div>
                <br>
                <div>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
        
            </form>
        </div>
    </div>

</body>
</html>

