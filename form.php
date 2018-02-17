<?php include('./getScouts.php') ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Otto Scouting</title>
</head>
<body>
    <?php include("sidebar.html"); ?>
    <form action="form2.php" method="post" class="main">
        <div class="row">
            <div class="column">
                <div class="group">
                    <h1>General</h1>
                    <b>Scout Name:</b><br>
                    <!-- Creates a dropdown list of all scouts from getScouts.php -->
                    <?php echo $sel ?>
                    <br>
                    <b>Team Number:</b><br>
                    <input type="text"  name="team_id">
                    <br>
                    <b>Match Number:</b><br>
                    <input type="text" name="match_id">
                    <br><br>
                    <button type="submit" name="not_present" formaction="notPresent.php" onclick="return confirm('Are you sure you want to submit a blank entry for this team?');">Team Not Present</button>
                </div>
                <div class="group">
                    <h1>Autonomous</h1>
                    <b>Auto Cross:</b><br>
                    <input type="radio" name="auto_cross" value="yes" checked> Yes
                    <input type="radio" name="auto_cross" value="no" > No
                    <br><br>
                    <b>Auto Switch:</b><br>
                    <button type ="button" onClick="decrease('auto_in_switch')"> -</button>
                    <input type="number" name="auto_in_switch" id="auto_in_switch" value=0>
                    <button type ="button" onClick="increase('auto_in_switch')"> +</button>
                    <br>
                    <b>Auto Time for Switch:</b><br>
                    <input type="number" name="auto_time_for_switch" value=0>
                    <br><br>
                    <b>Auto Scale:</b><br>
                    <button type ="button" onClick="decrease('auto_on_scale')"> -</button>
                    <input type="number" name="auto_on_scale" id="auto_on_scale" value=0>
                    <button type ="button" onClick="increase('auto_on_scale')"> +</button>
                    <br>
                    <b>Auto Time for Scale:</b><br>
                    <input type="number" name="auto_time_for_scale" value=0>
                    <br><br>
                </div>
            </div>
            <div class="column">
                <div class="group">
                    <h1>Color</h1>
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
                </div>

                <div class="group">
                    <?php include("stopwatch.html") ?>
                </div>

                <div class="group">
                    <canvas id="field" name="field" width="400" height="288">
                        <script src="autoPath.js"></script>
                    </canvas>
                </div>

                <input type="submit" value="Next Page">
            </div>
        </div>
    </form>

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
    </script>
</body>
</html>
