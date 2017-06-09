<?php
//setcookie("user", "Alex Porter", time()+10);
//phpinfo();
?>

<?php
$servername = "127.0.0.1";
$dbname = "users";
$user = "root";
$password = "liuzeng";
$dbh = new PDO("mysql:host=${servername};dbname=${dbname};charset=utf8", "${user}", "${password}");
#$result = $dbh->exec("INSERT INTO test_table (id, name) values (2, 'test')");
#echo $result;
#echo "</br>";

echo "</br>";
$result = $dbh->query('SELECT * from users');

echo "</br>";
 //foreach ($dbh->query('SELECT * from users') as $row) {
        //print_r($row); //你可以用 echo($GLOBAL); 来看到这些值
   // }
?>

<html>
    <head>
        <title>Example</title>
    </head>
    <body>
<?php
	include "remote_info_tools.php";
       	$user_agent = $_SERVER['HTTP_USER_AGENT'];
       	echo "Welcome to liu-seldon's Blog.</br>";
	echo "Your info :<br>";
	$reIP=$_SERVER["REMOTE_ADDR"]; 

	echo "&emsp;&emsp;IP : ".$reIP.".</br>";
	echo "&emsp;&emsp;OS : ".get_os()."</br>";
	echo "&emsp;&emsp;Browser : ".get_broswer()."</br>";
	
	echo "</br>";
	$user_name = NULL;
	if (array_key_exists("user", $_COOKIE)) {
		$user_name = $_COOKIE["user"];
	}
	
	if ($user_name != NULL) {
		echo "Welcome $user_name.\n";	
		echo "</br>";
	} else {
		echo "Please login first.\n";	
		echo "</br>";
	}	

	$filenames = scandir("./");
	for ($i = 0; $i < sizeof($filenames); $i++) {
		echo $filenames[$i];
		echo "</br>";
	}
	
?>
    </body>
</html>
