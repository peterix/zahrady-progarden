&nbsp;<table width="670"><tr>
<!-- LEFT -->
<!-- =(670 - 2*28) - 204 - 2 * 205 = 0 -->
<td width="28" class="center">
  <?php
    if($g > 0)
    {
      $i = $g-1;
      echo("<a href=\"galerie.php?g=$i\" style=\"display:block; height: 100%;\">");
      echo("<img src=\"img/nav/ll.png\"  style=\"display:block\" />");
      echo("</a>");;
    }
  ?>
</td>
<td width="205" class="center">
  <?php
    if($g > 0)
    {
      $i = $g-1;
      echo("<a href=\"galerie.php?g=$i\" style=\"display:block; height: 100%;\">");
      include "galerie/$i/popisek.inc";
      echo("</a>");
    }
  ?>
</td>

<!-- CENTER -->
<!--
<td width="204" class="center">
  <?php
    echo("<a href=\"galerie.php\" style=\"display:block; height: 100%;\">
          <img src=\"img/nav/u.png\" style=\"display:block; width:27px; margin:0 auto 0 auto;\" /><h2 style=\"margin:0;padding:0;\">");
    include "galerie/$g/popisek.inc";
    echo("</h2><img src=\"img/nav/28x17.png\"  style=\"display:block\" /></a>");
  ?>
</td>
-->

<td width="204" class="center">
  <?php
    echo("<a href=\"galerie.php\" style=\"display:block; height: 100%;\">
          <img src=\"img/nav/u.png\" style=\"display:block; width:27px; margin:0 auto 0 auto;\" />");
    echo ("Galerie");
    echo("<img src=\"img/nav/28x17.png\"  style=\"display:block\" /></a>");
  ?>
</td>

<!-- RIGHT -->
<td width = "205" class="center">
  <?php
    if($g < $PocetGalerii - 1)
    {
      $i = $g+1;
      echo("<a href=\"galerie.php?g=$i\" style=\"display:block; height: 100%;\" >");
      include "galerie/$i/popisek.inc";
      echo("</a>");;
    }
  ?>
</td>
<td width = "28" class="center">
  <?php
    if($g < $PocetGalerii - 1)
    {
      $i = $g+1;
      echo("<a href=\"galerie.php?g=$i\" style=\"display:block; height: 100%;\">");
      echo("<img src=\"img/nav/rr.png\"  style=\"display:block\" />");
      echo("</a>");;
    }
  ?>
</td>
</tr></table>
<h1 class="noclear center">
<?php
include "galerie/$g/popisek.inc";
?>
</h1>