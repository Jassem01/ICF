          <?php
$servername = "sql105.ezyro.com";
$username = "ezyro_29403345";
$password = "tmqw7zkb";
$dbname = "ezyro_29403345_db";
$text=$_POST['text'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql1 = "DELETE FROM news";
$conn->query($sql1);
echo "All the news are deleted from the database";

$conn->close();

?>