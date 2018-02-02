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

$sql = "SELECT * FROM scouts";
$result = $conn->query($sql);
$sel = "";

if ($result->num_rows > 0) {
    // output data of each row
    $sel = '<select name="scout_id">';
    while($row = $result->fetch_assoc()) {
        $sel .= '<option value="' . $row['id'] . '">' . $row['full_name'] . '</option>';
    }
    $sel.='</select>';
}
$conn->close();
?>
