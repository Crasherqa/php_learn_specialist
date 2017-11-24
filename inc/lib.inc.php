<?php

	function drawTable($cols = 5, $rows = 5, $color = "red") {
			echo "<table border='1'>";
		for($tr=1; $tr<=$rows; $tr++){
			echo "<tr>";
			for ($td=1; $td<=$cols; $td++) {
				if ($tr == 1 or $td == 1) {
				echo "<th style='background:$color'>" . $tr*$td . "</th>";
					
				}else{
				echo "<td>" . $tr*$td . "</td>";
					
				}
			}
			echo "</tr>";
		}

		echo "</table>";

		}


		//Малюєм меню
	function drawMenu($menu = [], $vertical = true) {
        
        if ($vertical == true) {
          foreach ($menu as $value) {
            echo "<li>";
            echo "<a href=$value[href]> $value[link]</a>";
            echo "</li>";
          }

        }else{
          foreach ($menu as $value) {
          echo "<a href=$value[href]> $value[link]</a>";
          }
        }

        
    }

?>