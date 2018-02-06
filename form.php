<?php include('./getScouts.php') ?>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

 ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="google.css">
    <title>Otto Scouting</title>
    <style>
        .column {
            float: left;
            width: 33.33%;
        }
        .row {
            margin-left: 30px;
            margin-top: 20px;
            text-align: center;
        }

        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
    </style>
</head>
<body>
    <form action="insert.php" method="post">
    <div class="column">
        <div class="row">
            <h1>General</h1><br>
            <b>Scout Name:</b><br>

            <?php echo $sel ?>

            <br>
            <b>Team Number:</b><br>
            <input type="text"  name="team_id">
            <br>
            <b>Match Number:</b><br>
            <input type="text" name="match_id">
            <br><br>

            <h1>Autonomous</h1><br>
            <b>Auto Cross:</b><br>
            <input type="radio" name="auto_cross" value="yes" checked> Yes
            <input type="radio" name="auto_cross" value="no" > No
            <br><br>
            <b>Auto Switch:</b><br>
            <button type ="button" onClick="decrease('auto_in_switch')"> -</button>
            <input type="number" id="auto_in_switch" value=0>
            <button type ="button" onClick="increase('auto_in_switch')"> +</button>
            <br>
            <b>Auto Time for Switch:</b><br>
            <input type="number" name="auto_time_for_switch" value=0>
            <br><br>
            <b>Auto Scale:</b><br>
            <button type ="button" onClick="decrease('auto_on_scale')"> -</button>
            <input type="number" id="auto_on_scale" value=0>
            <button type ="button" onClick="increase('auto_on_scale')"> +</button>
            <br>
            <b>Auto Time for Scale:</b><br>
            <input type="number" name="auto_time_for_scale" value=0>
            <br><br>
          </div>
        </div>

        <div class="column">
            <h1>Color</h1><br>
            <b>Switch side:</b><br>
            <input type="radio" name="switch_side" value="L" checked> Left
            <input type="radio" name="switch_side" value="R" > Right
            <br>
            <b>Scale side:</b><br>
            <input type="radio" name="scale_side" value="L" checked> Left
            <input type="radio" name="scale_side" value="R" > Right
            <br>
            <b>Opp Switch side:</b><br>
            <input type="radio" name="enemy_switch_side" value="L" checked> Left
            <input type="radio" name="enemy_switch_side" value="R" > Right
            <br>

            <h1>Extra</h1><br>

            <nav>
              <button type="button"> <a href="form2.php">Next Page</a></button>
            </nav>

        </div>

    </form>
    <form

    <script src="mousetrap/mousetrap.min.js"></script>
    <script>
        function increase(inputToUpdate) {
            var value = parseInt(document.getElementById(inputToUpdate).value, 10) + 1;
            document.getElementById(inputToUpdate).value = value;
        }

        function decrease(inputToUpdate) {
            var value = parseInt(document.getElementById(inputToUpdate).value, 10);
            if (value > 0) {
                value -= 1;
            }
            document.getElementById(inputToUpdate).value = value;
        }
        Mousetrap.bind('1', function() { increase('teleop_on_switch'); });
        Mousetrap.bind('shift+1', function() { decrease('teleop_on_switch'); });
        Mousetrap.bind('2', function() { increase('teleop_on_scale'); });
        Mousetrap.bind('shift+2', function() { decrease('teleop_on_scale'); });
        Mousetrap.bind('3', function() { increase('teleop_on_enemy_switch'); });
        Mousetrap.bind('shift+3', function() { decrease('teleop_on_enemy_switch'); });
        Mousetrap.bind('4', function() { increase('scored_in_vault'); });
        Mousetrap.bind('shift+4', function() { decrease('scored_in_vault'); });
        Mousetrap.bind('5', function() { increase('taken_from_portal'); });
        Mousetrap.bind('shift+5', function() { decrease('taken_from_portal'); });
        Mousetrap.bind('6', function() { increase('taken_from_power_cube_zone'); });
        Mousetrap.bind('shift+6', function() { decrease('taken_from_power_cube_zone'); });
        Mousetrap.bind('7', function() { increase('taken_from_platform_zone'); });
        Mousetrap.bind('shift+7', function() { decrease('taken_from_platform_zone'); });
        Mousetrap.bind('8', function() { increase('taken_from_enemy_side'); });
        Mousetrap.bind('shift+8', function() { decrease('taken_from_enemy_side'); });
        Mousetrap.bind('9', function() { increase('taken_from_random_area'); });
        Mousetrap.bind('shift+9', function() { decrease('taken_from_random_area'); });


    </script>
    <?php
    //Currently not functional, works when $_SESSION is set to a constant
      $_SESSION['team_id'] = $_GET['team_id'] ;
     ?>
</body>
</html>
