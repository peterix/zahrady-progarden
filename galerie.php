<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
  <title>Zahrady ProGarden - návrhy zahrad a zahradní architektura</title>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/simple.css" media="screen, projection, tv " />

  <!-- Lightbox -->
  <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
  
  <script src="js/prototype.js" type="text/javascript"></script>
  <script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
  <script src="js/lightbox.js" type="text/javascript"></script>
</head>
<body>
<table class="envelope" cellspacing="0"><tr>
  <!-- left spanner -->
  <td class="spanner"></td>
  <!-- left border -->
  <td class="left-border"></td>
  <!-- center -->
  <td class="content">
    <img class="headerImage" src="img/header.png" alt="Pro Garden - ateliér zahradní tvorby" />
    <div>
    <?php
      include "menu.inc";
      paintMenu('galerie');
    ?>
    </div>
    <!-- actual content goes here -->
    <div class="textBlock">
      <?php
	include "galerie/variables.inc";
	/*zobrazeni samostatneho obrazku*/
	if (isset($_GET['o']))
	{
	  $g = $_GET['g'];
	  $o = $_GET['o'];
	  include "galerie/$g/variables.inc";
	  include "galerie/panel2.inc";
	  include "galerie/obrazek.inc";
	}
	/*pohled na galerii*/
	else if(isset($_GET['g']))
	{
	  $g = $_GET['g'];
	  include "galerie/$g/variables.inc";
	  include "galerie/panel.inc";
	  include "galerie/poleobrazku.inc";
	}
	/*seznam vsech galerii*/
	else
	{
        echo "&nbsp;<h1 class=\"noclear center\">Galerie</h1>";
	  include "galerie.inc";
	}
      ?>
    </div>
    <!-- actual content ends here -->
    <p class="footer">
      <?php include "footer.inc"; ?>
    </p>

  </td>
  <!-- right border -->
  <td class="right-border"></td>
  <!-- right spanner -->
  <td class="spanner"></td>
</tr></table>
<!-- Google Tracking -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-12596361-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html> 
