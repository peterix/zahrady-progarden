<?php
/* Which image are we looking at? */
$PocetObrazku = 0;
$Obrazek = "";
$PocetBloku = count($Bloky) / 2;
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
&nbsp;<table width="670"><tr>
<!-- LEFT -->
<!-- =(670 - 2*28) - 204 - 2 * 205 = 0 -->
<td width="17" class="center">
  <?php
    if($o > 1)
    {
      $i = $o-1;
      echo("<a href=\"galerie.php?g=$g&o=$i\" style=\"display:block; height: 100%;\">");
      echo("<img src=\"img/nav/l.png\"  style=\"display:block\" />");
      echo("</a>");;
    }/*
    else if($g > 0)
    {
      $i = $g-1;
      echo("<a href=\"galerie.php?g=$i\" style=\"display:block; height: 100%;\">");
      echo("<img src=\"img/nav/l.png\"  style=\"display:block\" />");
      echo("</a>");;
    }*/
  ?>
</td>
<td width="216" class="center">
  <?php
    if($o > 1)
    {
      $i = $o-1;
      echo("<a href=\"galerie.php?g=$g&o=$i\" style=\"display:block; height: 100%;\">");
      echo ("Předchozí");
      echo("</a>");
    }/*
    else if($g > 0)
    {
      $i = $g-1;
      echo("<a href=\"galerie.php?g=$i\" style=\"display:block; height: 100%;\">");
      include "galerie/$i/popisek.inc";
      echo("</a>");
    }*/
  ?>
</td>

<!-- CENTER -->
<td width="204" class="center">
  <?php
    echo("<a href=\"galerie.php?g=$g\" style=\"display:block; height: 100%;\">
          <img src=\"img/nav/u.png\" style=\"display:block; width:27px; margin:0 auto 0 auto;\" /><h2 style=\"margin:0;padding:0;\">");
    include "galerie/$g/popisek.inc";
    echo("</h2> $o&nbsp;/&nbsp;$PocetObrazku");
    echo("<img src=\"img/nav/28x17.png\"  style=\"display:block\" /></a>");
  ?>
</td>

<!-- RIGHT -->
<td width = "216" class="center">
  <?php
    if($o < $PocetObrazku)
    {
      $i = $o+1;
      echo("<a href=\"galerie.php?g=$g&o=$i\" style=\"display:block; height: 100%;\" >");
      echo ("Další");
      echo("</a>");;
    }/*
    else if($g < $PocetGalerii - 1)
    {
      $i = $g+1;
      echo("<a href=\"galerie.php?g=$i\" style=\"display:block; height: 100%;\" >");
      include "galerie/$i/popisek.inc";
      echo("</a>");
    }*/
  ?>
</td>
<td width = "17" class="center">
  <?php
    if($o < $PocetObrazku)
    {
      $i = $o+1;
      echo("<a href=\"galerie.php?g=$g&o=$i\" style=\"display:block; height: 100%;\">");
      echo("<img src=\"img/nav/r.png\"  style=\"display:block\" />");
      echo("</a>");;
    }
    /*
    else if($g < $PocetGalerii - 1)
    {
      $i = $g+1;
      echo("<a href=\"galerie.php?g=$i\" style=\"display:block; height: 100%;\" >");
      echo("<img src=\"img/nav/r.png\"  style=\"display:block\" />");
      echo("</a>");
    }*/
  ?>
</td>
</tr></table>








<!--


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
echo("&nbsp;$o&nbsp;/&nbsp;$PocetObrazku</h2></a>");
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
-->