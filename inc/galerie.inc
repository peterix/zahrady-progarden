<table width="100%" border="0" align="center">
<?php
$rozd = 0;
$linecount=0;
$linestart=0;
$PocetGRozdeleni = 0;
for($x=0;$x<$PocetGalerii;$x++)
{

  if($PocetGRozdeleni > 0)
  {
    if($x + 1==$GRozdeleni[$rozd])
    {
      $nadpis=$GRozdeleni[$rozd+1];
      if($x>0)
      {
	echo("<td></td></tr>");
      }
      $rozd+=2;
      $PocetRozdeleni--;
      echo("<td></td></tr><tr><td></td>");
      for($a=$linestart;$a<$linestart + $linecount;$a++ )
      {
	echo("<td align=\"center\" bgcolor=\"#CCCCCC\">\n");
	include "galerie/$a/popisek.inc";
	echo("</td>");
      }
      echo("<td></td></tr>");
      echo("</table><center><h2>$nadpis</h2></center><table width=\"100%\" border=\"0\" align=\"center\">\n");
      $linestart+=$linecount;
      $linecount=0;
    }
  }
  if($linecount == 0)
  {
    echo("<tr><td></td>\n");
  }
  $linecount++;
  echo("<td align=\"center\"><a href=\"galerie.php?g=$x\" class='noborder'><img src=\"galerie/$x/thumbnails/");
  include "galerie/$x/thumbnail.inc";
  echo("\" alt=\"");
  include "galerie/$x/popisek.inc";
  echo("\" class=\"bordered\" /></a></td>");
  if($linecount==4 || $linestart + $linecount == $PocetGalerii)
  {
    echo("<td></td></tr><tr><td></td>");
    for($a=$linestart;$a<$linestart + $linecount;$a++ )
    {
      echo("<td align=\"center\" valign='top'><a href=\"galerie.php?g=$a\">\n");
      include "galerie/$a/popisek.inc";
      echo("</a></td>");
    }
    echo("<td></td></tr>");
    $linestart=$x+1;
    $linecount=0;
  }
}
?>
</table>