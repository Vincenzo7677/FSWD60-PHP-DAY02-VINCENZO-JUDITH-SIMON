<!DOCTYPE html>
<html>
<head>
	<title>Browser search</title>
</head>
<body>
	<html>
<head>
       <title>PHP example</title>
</head>
<body>
<?php
$viewer = getenv( "HTTP_USER_AGENT" );
$browser = "An unidentified browser";
if( preg_match( "/MSIE/i", "$viewer" ) )
{
$browser = "Internet Explorer";
echo '<body style="background-color:orange">';
}
elseif( preg_match( "/Netscape/i", "$viewer" ) )
{
$browser = "Netscape";
echo '<body style="background-color:blue">';
}
elseif(preg_match('/Chrome/i', "$viewer"))
{
$browser = 'Google Chrome';
echo '<body style="background-color:green">';
}
elseif( preg_match( "/Mozilla/i", "$viewer" ))
{
$browser = "Mozilla";
echo '<body style="background-color:yellow">';
}
elseif(preg_match('/Safari/i',"$viewer"))
{
$browser = 'Apple Safari';
echo '<body style="background-color:#CCC">';
}


$platform = "An unidentified OS!";
if( preg_match( "/Windows/i", "$viewer" ) )
{
$platform = "Windows!";
}
elseif ( preg_match( "/Linux/i", "$viewer" ) )
{
$platform = "Linux!";
}
elseif ( preg_match( "/Mac/i", "$viewer" ) )
{
$platform = "Mac!";
}
echo("You are using $browser on $platform");
?>
</body>
</html>

</body>
</html>