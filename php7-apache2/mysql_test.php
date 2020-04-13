<html>
<?php
//Step1
$DB_HOST = 'mysql';
$DB_NAME = getenv("DB_NAME");
$DB_USER = 'root';
$DB_PASSWORD = 'dummypassword';
$conn = mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME,3306)
 or die('Error connecting to MySQL server.');
?>
<body>
<h1>Connected to MySQL </h1> 
<h1>PHP connect to MySQL To demonstrate multi kubernetes containers and helm </h1>
<h2> Displaying persons table data </h2>
<?php
//Step2
$query = "SELECT * FROM Persons";
mysqli_query($conn, $query) or die('Error querying database.');

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
while ($row = mysqli_fetch_array($result)) {
 echo $row['PersonID'] . ' ' . $row['LastName'] . ': ' . $row['FirstName'] . ' ' . $row['City'] .'<br />';
}
?>
</body>
</html>
