<table width="100%" style="table-layout:fixed;">
<?php
$rozd = 0;
$linecount=0;
$linestart=0;
$PocetGRozdeleni = 0;
for($x=0;$x<$PocetGalerii;$x++)
{
  if($linecount == 0)
  {
    echo("<tr>\n");
  }
  $linecount++;
  echo("<td width=\"25%\" style=\"text-align:center; vertical-align:middle;\"><a href=\"galerie.php?g=$x\" class='noborder'><img src=\"galerie/$x/thumbnails/");
  include "galerie/$x/thumbnail.inc";
  echo("\" alt=\"");
  include "galerie/$x/popisek.inc";
  echo("\" class=\"bordered\" /></a></td>");
  if($linecount==4 || $linestart + $linecount == $PocetGalerii)
  {
    echo("</tr><tr>");
    for($a=$linestart;$a<$linestart + $linecount;$a++ )
    {
      echo("<td style=\"text-align:center; vertical-align:top;\"><a href=\"galerie.php?g=$a\">\n");
      include "galerie/$a/popisek.inc";
      echo("</a></td>");
    }
    echo("</tr><tr><td colspan=\"4\" height=\"20\"></td></tr>");
    $linestart=$x+1;
    $linecount=0;
  }
}
?>
</table>
