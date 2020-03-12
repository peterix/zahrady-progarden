<?php
$PocetObrazku = 0;
$Obrazek = "";
for($xz = 0; $xz < $PocetBloku;$xz++)
{
  $r = $Bloky[$xz*2];
  for($tz = 1;$tz<=$r;$tz++)
  {
    $PocetObrazku++;
    if($PocetObrazku == $o)
    {
      $Obrazek = $Bloky[($xz*2)+1] . $tz;
    }
  }
}
?>
<table border="0" width="100%" frame="void">
<tr>
<td></td>
    <td width ="20%">
<?php
      if($o > 1)
      {
        $i = $o-1;
        echo("<a href=\"galerie.php?g=$g&o=$i\"><h2><img src=\"img/nav/l.png\" class=\"navleft\" />Předchozí</h2></a>");
      }
?>
    </td>
<td align="center">
<?php
echo("<a href=\"galerie.php?g=$g\"><h2><img src=\"img/nav/u.png\" class=\"navup\" /><br />");
include "galerie/$g/popisek.inc";
echo("<br />$o / $PocetObrazku</h2></a>");
?>
</td>
    <td width ="20%" align="right">
<?php
      if($o < $PocetObrazku)
      {
        $i = $o+1;
        echo("<a href=\"galerie.php?g=$g&o=$i\"><h2>Další<img src=\"img/nav/r.png\" class=\"navright\" /></h2></a>");
      }
?>
    </td>
<td></td>
</tr>

</table>
