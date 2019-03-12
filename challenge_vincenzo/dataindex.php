<!DOCTYPE html>
<html>
<style type="text/css">
	
	body{
		text-align: center;
	}
</style>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Data Index</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#">ADD</a></li>
                <li role="presentation"><a href="#">UPDATE</a></li>
                <li role="presentation"><a href="#">DELETE</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h1>Please enter your data here</h1>
            <form action="action_page.php" method="post">
                First name:<br>
                <input type="text" name="firstname" value="">
                <br>
                Last name:<br>
                <input type="text" name="lastname" value="">
                <br>
                Email:<br>
                <input type="text" name="email" value="">
                <br>
                Phone:<br>
                <input type="text" name="phone" value="">
                <br><br>
                <input type="submit" value="Submit">

            </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
        	
        	<h3>CodeFactory</h3>
        	<p>-Vincenzo-</p>

        </div>
    </div>
</body>

</html>