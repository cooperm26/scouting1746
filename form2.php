<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Otto Scouting</title>
</head>
<body>
    <?php include("sidebar.html"); ?>
    <form action="insert.php" method="post" class="main">
        <?php
        foreach($_POST as $key=>$value) { ?>
            <input id="<?php echo $key?>" type="hidden" name="<?php echo $key?>" value="<?php echo $value?>"/>
        <?php } ?>
        <div class="row">
            <div class="column">
                <div class="group">
                    <h1>Teleop</h1><br>
                    <b>1 -- On Switch:</b><br>
                    <button type ="button" onClick="decrease('teleop_on_switch')"> -</button>
                    <input type="number" name="teleop_on_switch" id="teleop_on_switch" value=0>
                    <button type ="button" onClick="increase('teleop_on_switch')"> +</button>
                    <br>
                    <b>2 -- On Scale:</b><br>
                    <button type ="button" onClick="decrease('teleop_on_scale')"> -</button>
                    <input type="number" name="teleop_on_scale" id="teleop_on_scale" value=0>
                    <button type ="button" onClick="increase('teleop_on_scale')"> +</button>
                    <br>
                    <b>3 -- On Enemy Switch:</b><br>
                    <button type ="button" onClick="decrease('teleop_on_enemy_switch')"> -</button>
                    <input type="number" name="teleop_on_enemy_switch" id="teleop_on_enemy_switch" value=0>
                    <button type ="button" onClick="increase('teleop_on_enemy_switch')"> +</button>
                    <br>
                    <b>4 -- In Exchange Zone:</b><br>
                    <button type ="button" onClick="decrease('scored_in_vault')"> -</button>
                    <input type="number" name="scored_in_vault" id="scored_in_vault" value=0>
                    <button type ="button" onClick="increase('scored_in_vault')"> +</button>
                    <br><br>
                </div>
                <div class="group">
                    <h2> Cubes Placed</h2><br>
                    <b>Scale Low:</b><br>
                    <input type="radio" name="scale_low" value="not_attempted" checked> Not Attempted
                    <input type="radio" name="scale_low" value="failed" > Failed
                    <input type="radio" name="scale_low" value="yes" > Yes
                    <br>
                    <b>Scale Medium:</b><br>
                    <input type="radio" name="scale_medium" value="not_attempted" checked> Not Attempted
                    <input type="radio" name="scale_medium" value="failed" > Failed
                    <input type="radio" name="scale_medium" value="yes" > Yes
                    <br>
                    <b>Scale High:</b><br>
                    <input type="radio" name="scale_high" value="not_attempted" checked> Not Attempted
                    <input type="radio" name="scale_high" value="failed" > Failed
                    <input type="radio" name="scale_high" value="yes" > Yes
                    <br><br>
                </div>
                <div class="group">
                    <h2>Taken From...</h2><br>
                    <b>5 -- Portal:</b><br>
                    <button type ="button" onClick="decrease('taken_from_portal')"> -</button>
                    <input type="number" name="taken_from_portal" id="taken_from_portal" value=0>
                    <button type ="button" onClick="increase('taken_from_portal')"> +</button>
                    <br>
                    <b>6 -- Power Cube Zone:</b><br>
                    <button type ="button" onClick="decrease('taken_from_power_cube_zone')"> -</button>
                    <input type="number" name="taken_from_power_cube_zone" id="taken_from_power_cube_zone" value=0>
                    <button type ="button" onClick="increase('taken_from_power_cube_zone')"> +</button>
                    <br>
                    <b>7 -- Platform Zone:</b><br>
                    <button type ="button" onClick="decrease('taken_from_platform_zone')"> -</button>
                    <input type="number" name="taken_from_platform_zone" id="taken_from_platform_zone" value=0>
                    <button type ="button" onClick="increase('taken_from_platform_zone')"> +</button>
                    <br>
                    <b>8 -- Enemy Side:</b><br>
                    <button type ="button" onClick="decrease('taken_from_enemy_side')"> -</button>
                    <input type="number" name="taken_from_enemy_side" id="taken_from_enemy_side" value=0>
                    <button type ="button" onClick="increase('taken_from_enemy_side')"> +</button>
                    <br>
                    <b>9 -- Random Area:</b><br>
                    <button type ="button" onClick="decrease('taken_from_random_area')"> -</button>
                    <input type="number" name="taken_from_random_area" id="taken_from_random_area" value=0>
                    <button type ="button" onClick="increase('taken_from_random_area')"> +</button>
                    <br>
                </div>
            </div>
            <div class="column">
                <div class="group">
                    <h1> Endgame </h1><br>
                    <b>Parked on Platform:</b><br>
                    <input type="radio" name="park_on_platform" value="yes" checked> Yes
                    <input type="radio" name="park_on_platform" value="no" > No
                    <input type="radio" name="park_on_platform" value="climbed" > Climbed
                    <br>
                    <b>Climbs Responsible for:</b><br>
                    <input type="radio" name="climbs_responsible_for" value="0" checked> 0
                    <input type="radio" name="climbs_responsible_for" value="1" > 1
                    <input type="radio" name="climbs_responsible_for" value="2" > 2
                    <input type="radio" name="climbs_responsible_for" value="3" > 3
                    <b>Notes:</b><br>
                    <textarea name="notes" rows=8></textarea>
                    <br><br>
                    <b>Climber Description:</b><br>
                    <textarea name="climb_mech_discription" rows=8></textarea>
                    <br>
                </div>

                <div class="group">
                    <?php include("stopwatch.html") ?>
                </div>

                <div class="group" id="fouls">
                    <h1>Fouls</h1>
                    <input id="numFouls" type="hidden" name="numFouls" value=0 />
                    <button type="button" name="fouls_btn" onclick="addFoul()">Add a Foul</button>
                    <button type="button" onClick="MyWindow=window.open('foul_list.php')">Foul List</button>
                </div>
            <nav>
              <button type="button"> <a href="form.php">Previous Page</a></button>
            </nav>
            <br>
            <input class="action" type="submit" onclick="return confirm('Are you sure you want to submit?');">
            </div>
        </div>
    </form>

    <script src="mousetrap/mousetrap.min.js"></script>
    <script>
        var numFouls = 0;
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

        function addFoul() {
            var objTo = document.getElementById('fouls')
            var divtest = document.createElement("div");
            divtest.innerHTML = 'Foul ' + numFouls + ': Type <select name="foul_type' + numFouls + '"> <option value="foul">Foul</option> <option value="tech_foul">Tech Foul</option> <option value="yellow_card">Yellow Card</option> <option value="yellow_and_foul">Foul & Yellow Card</option> <option value="red_card">Red Card</option></select> What Happened: <input name="explain_foul' + numFouls + '" type="text"></input> <br>';

            var value = parseInt(document.getElementById('numFouls').value, 10) + 1;
            document.getElementById('numFouls').value = value;
            numFouls++;
            objTo.appendChild(divtest)
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
</body>
</html>
