<?php
$colors = array("white", "green", "red");
echo "white ,". " green ,". ", red" ;
echo "<ul>\n";
echo "  <li>" . implode("</li>\n  <li>", $colors) . "</li>\n";
echo "</ul>";
?>