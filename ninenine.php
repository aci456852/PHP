<?php
	for($i=1;$i<=9;$i++)
    {
        echo "<div>";
        for($j=1;$j<=$i;$j++)
        {
            echo "<span style='border:solid 1px black;padding:3px;display:inline-block;width:70px'>" . $j . "*" . $i . "=" . $j*$i ."</span>";
        }
        echo "</div>";
    }
?>