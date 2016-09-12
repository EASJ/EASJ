<?php
$servername = "localhost";
$username = "root";
$password = "root";   //original "root" changing password https://www.youtube.com/watch?v=n4ciVHLd3EA
                   // and change config.inc.php for PhpMyAdmin in line with MySQL password (line 61)
$dbname = "chokoladeshoppen";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
echo "Connected successfully";   //outcomment when working
?>

<?php //remember to close the databaseconnection after use mysqli_close($conn); ?>
<?php // mysqli_close($conn); ?>


<?php 

mysqli_close($conn);
?>