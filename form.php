
<html>
<head>
<title>ottoscouting</title>
<style>
  .left {
    float: left;
    padding-left: 30;
    padding-top: 40;
    width: 30%;
  }

  /* Left and right column */
  .right {
    float: left;
    width: 30%;
  }

  /* Middle column */
  .center {
    float: left;
    width: 30%;
  }
</style>
</head>
<body>
  <form action="insert.php" method="post">
    <div class="left">
      name:<br>
      <input type="text" name="scout_id" >
      <br>
      team number:<br>
      <input type="text" name="team_id" >
      <br>
      match number:<br>
      <input type="text" name="match_id">
      <br>
      <h1>Auton
      </h1>
      auto cross<br>
      <input type="radio" name="auto_cross" value="yes" checked> yes
      <input type="radio" name="auto_cross" value="no" > no
      <br>
      auto switch:<br>
      <button type ="button"> -</button>
      <input type="text" name="auto_in_switch">
      <button type ="button"> +</button>
      <br>
      auto scale:<br>
      <button type ="button"> -</button>
      <input type="text" name="auto_on_scale">
      <button type ="button"> +</button>
      <br>
      auto time for switch:<br>
      <input type="text" name="auto_time_for_switch">
      <br>
      auto time for scale :<br>
      <input type="text" name="auto_time_for_scale">
      <br>
      <h1>Color
      </h1>
      Switch side :<br>
      <input type="radio" name="switch_side" value="L" checked> L
      <input type="radio" name="switch_side" value="R" > r
      <br>
      Scale side :<br>
      <input type="radio" name="scale_side" value="L" checked> L
      <input type="radio" name="scale_side" value="R" > r
      <br>
      Opp Switch side :<br>
      <input type="radio" name="enemy_switch_side" value="L" checked> L
      <input type="radio" name="enemy_switch_side" value="R" > r
      <br>
    </div>
    <div class="center">
      <h1>Teleop
      </h1><br>
      On Switch : <br>
      <button type ="button"> -</button>
      <input type="text" name="teleop_on_switch">
      <button type ="button"> +</button>
      <br>
      On Scale :<br>
      <button type ="button"> -</button>
      <input type="text" name="teleop_on_scale">
      <button type ="button"> +</button>
      <br>
      On Enemy Switch :<br>
      <button type ="button"> -</button>
      <input type="text" name="teleop_on_enemy_switch">
      <button type ="button"> +</button>
      <br>
      In Exchange Zone :<br>
      <button type ="button"> -</button>
      <input type="text" name="scored_in_vault">
      <button type ="button"> +</button>
      <br>
      <h2>  Cubes Placed</h2>
      Scale Low :<br>
      <input type="radio" name="scale_low" value="Yes" checked> Yes
      <input type="radio" name="scale_low" value="No" > No
      <input type="radio" name="scale_low" value="Not Attempted" > Not Attempted
      <br>
      Scale Medium :<br>
      <input type="radio" name="scale_medium" value="Yes" checked> Yes
      <input type="radio" name="scale_medium" value="No" > No
      <input type="radio" name="scale_medium" value="Not Attempted" > Not Attempted
      <br>
      Scale High :<br>
      <input type="radio" name="scale_high" value="Yes" checked> Yes
      <input type="radio" name="scale_high" value="No" > No
      <input type="radio" name="scale_high" value="Not Attempted" > Not Attempted
      <h2>Taken From...</h2>
      Portal :<br>
      <button type ="button"> -</button>
      <input type="text" name="taken_from_portal">
      <button type ="button"> +</button>
      <br>
      Power Cube Zone :<br>
      <button type ="button"> -</button>
      <input type="text" name="taken_from_power_cube_zone">
      <button type ="button"> +</button>
      <br>
      Platform Zone :<br>
      <button type ="button"> -</button>
      <input type="text" name="taken_from_platform_zone">
      <button type ="button"> +</button>
      <br>
      Enemy Side:<br>
      <button type ="button"> -</button>
      <input type="text" name="taken_from_enemy_side">
      <button type ="button"> +</button>
      <br>
      Random Area :<br>
      <button type ="button"> -</button>
      <input type="text" name="taken_from_random_area">
      <button type ="button"> +</button>
      <br>
    </div>
    <div class="right">
      <h1> Endgame </h1>
      Parked on Platform :<br>
      <input type="radio" name="park_on_platform" value="Yes" checked> Yes
      <input type="radio" name="park_on_platform" value="No" > No
      <input type="radio" name="park_on_platform" value="counted_as_climb" > Climbed
      <br>
      Climbs Responsible for :<br>
      <input type="radio" name="climbs_responsible_for" value="0" checked> 0
      <input type="radio" name="climbs_responsible_for" value="1" > 1
      <input type="radio" name="climbs_responsible_for" value="2" > 2
      <input type="radio" name="climbs_responsible_for" value="3" > 3
      <h1>Notes</h1>
      Notes :<br>
      <input type="text" name="notes">
      <br>
      Climber Discription :<br>
      <input type="text" name="climb_mech_discription">
      <br>  <input type="submit">
    </div>`
  </form>
</body>
</html>
