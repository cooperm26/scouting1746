<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ottoscouting";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// get variables from html
$scout = $_POST['scout_id'];
$team = $_POST['team_id'];
$match = $_POST['match_id'];

// SQL to insert match data into the database
$sql = "INSERT INTO matchdata (scout_id,
   team_id,
   match_id
 )
VALUES ('$scout',
  '$team',
  '$match'
);";

// execute SQL query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
