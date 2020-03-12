<?php
function paintMenu($active)
{
  echo '<ul id="menu" class="five">';
  echo '<li><a href="index.php" title="Úvod"';                  if($active == 'uvod') echo 'class="here"'; echo '><span class="big">Ú</span>vod</a></li>';
  echo '<li><a href="galerie.php" title="Galerie relizací"';    if($active == 'galerie') echo 'class="here"'; echo '><span class="big">G</span>alerie</a></li>';
  echo '<li><a href="bio.php" title="Kdo jsem?"';               if($active == 'bio') echo 'class="here"'; echo '><span class="big">K</span>do jsem</a></li>';
  echo '<li><a href="kontakt.php" title="Kontaktní informace"'; if($active == 'kontakt') echo 'class="here"'; echo '><span class="big">K</span>ontakt</a></li>';
  echo '<li><a href="coop.php" title="Spolupracující firmy"';   if($active == 'coop') echo 'class="here"'; echo '><span class="big">S</span>polupráce</a></li>';
  echo '</ul>';
}
?>