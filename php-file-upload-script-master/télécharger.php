<?php
$servername = "sql105.ezyro.com";
$username = "ezyro_29403345";
$password = "tmqw7zkb";
$dbname = "ezyro_29403345_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, file_name, file_size, file_path, created_at FROM files";
$result = $conn->query($sql);
if(isset($_POST['download']))
{
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     

       $file = ($row['file_path']);

       $filetype=filetype($file);

       $filename=basename($file);
     

       header ("Content-Type: ".$filetype);

       header ("Content-Length: ".filesize($file));

       header ("Content-Disposition: attachment; filename=".$filename);

       readfile($file);


  }
} else {
  echo "Peut pas télécharger";
}

}


$conn->close();
?>

