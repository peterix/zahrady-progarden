<table border="0" align="center" frame="void">
<tr>
<td></td>
<td width = "200" align="center">
<?php
if($g > 0)
{
$i = $g-1;
echo("<a href=\"galerie.php?g=$i\"><h2>");
include "galerie/$i/popisek.inc";
echo("</h2></a>");;
}
?>
</td><td width = "50" align="center">
<?php
if($g > 0)
{
echo("<img src=\"img/nav/ll.png\" />");
}
?>
</td><td width = "200" align="center">
<h2><?php include "galerie/$g/popisek.inc"; ?></h2>
</td><td width = "50" align="center">
<?php
if($g < $PocetGalerii - 1)
{
echo("<img src=\"img/nav/rr.png\" />");
}
?>
</td><td width = "200" align="center">
<?php
if($g < $PocetGalerii - 1)
{
$i = $g+1;
echo("<a href=\"galerie.php?g=$i\"><h2>");
include "galerie/$i/popisek.inc";
echo("</h2></a>");;
}
?>
</td><td></td></tr>

</table>
