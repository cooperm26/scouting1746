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

$sql = "INSERT INTO matchdata (scout_id,
   team_id,
   match_id,
   auto_cross,
   auto_in_switch,
   auto_on_scale,
   auto_time_for_switch,
   auto_time_for_scale,
   switch_side,
   scale_side,
   enemy_switch_side,
   teleop_on_switch,
   teleop_on_scale,
   teleop_on_enemy_switch,
   scored_in_vault,
   taken_from_power_cube_zone,
   taken_from_platform_zone,
   taken_from_enemy_side,
   taken_from_random_area,
   park_on_platform,
   climbs_responsible_for,
   scale_low,
   scale_medium,
   scale_high,
   notes,
   climb_mech_discription

 )
VALUES ('$_POST[scout_id]',
  '$_POST[team_id]',
  '$_POST[match_id]',
  '$_POST[auto_cross]',
  '$_POST[auto_in_switch]',
  '$_POST[auto_on_scale]',
  '$_POST[auto_time_for_switch]',
  '$_POST[auto_time_for_scale]',
  '$_POST[switch_side]',
  '$_POST[scale_side]',
  '$_POST[enemy_switch_side]',
  '$_POST[teleop_on_switch]',
  '$_POST[teleop_on_scale]',
  '$_POST[teleop_on_enemy_switch]',
  '$_POST[scored_in_vault]',
  '$_POST[taken_from_power_cube_zone]',
  '$_POST[taken_from_platform_zone]',
  '$_POST[taken_from_enemy_side]',
  '$_POST[taken_from_random_area]',
  '$_POST[park_on_platform]',
  '$_POST[climbs_responsible_for]',
  '$_POST[scale_low]',
  '$_POST[scale_medium]',
  '$_POST[scale_high]',
  '$_POST[notes]',
  '$_POST[climb_mech_discription]'
)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
