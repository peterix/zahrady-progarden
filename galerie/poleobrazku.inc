<?php
$ZpracovanoBloku = 0;
$totalcount = 1; // celkovy pocet vykreslenych obrazku
$to_render = 0; // pocet obrazku na vykresleni
$render = array();

function Render()
{
  $width = $GLOBALS['to_render'] * 134;
  $move = (670 - $width) / 2;
  echo ("<div class=\"obal\" style=\"width:");
  echo ($width);
  echo ("px; margin-left:");
  echo ($move);
  echo ("px; clear:both;\">\n");
  /*echo "<div class=\"obal\">";*/
  foreach ($GLOBALS['render'] as $r)
  {
    echo($r);
  }
  echo("</div>");
  $GLOBALS['render'] = array();
  $GLOBALS['to_render'] = 0;
}
$x = 1;
while ($ZpracovanoBloku < $PocetBloku)// kresleni bloku pohromade
{
  $BlockImages = $Bloky[$ZpracovanoBloku*2];
  $BlockText = $Bloky[($ZpracovanoBloku*2)+1];
  if($BlockImages == 0) // pokud v bloku nejsou obrazky, jde o nadpis
  {
    if($to_render > 0)
    {
      Render();
    }
    $ZpracovanoBloku += 1;
    echo("<center><h2>$BlockText</h2></center>\n");
    continue;
  }
  for(;;)
  {
    $render[] = "<div class=\"imag\">&nbsp;<a href=\"galerie.php?g=$g&o=$totalcount\" class='noborder'>\n<img src=\"galerie/$g/thumbnails/$BlockText$x.jpg\" class=\"bordered\" />\n</a></div>\n";
    $totalcount += 1;
    $to_render += 1;
    $x += 1;
    $i++;
    if($to_render == 5)
    {
      Render();
    }
    if($x > $BlockImages)
    {
      $ZpracovanoBloku +=1;
      $x = 1;
      if($ZpracovanoBloku == $PocetBloku)
      {
        Render();
      }
      continue 2;
    }
  }
}
