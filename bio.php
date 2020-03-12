<!-- IE je zlo, bez tohohle komentare rozhodi layout -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
  <title>Zahrady ProGarden</title>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <meta name="robots" content="index, follow, noarchive" />
  <meta name="googlebot" content="noarchive" />
  <link rel="stylesheet" type="text/css" href="css/html.css" media="screen, projection, tv " />
  <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen, projection, tv " />
  <link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
  <!-- Conditional comment to apply opacity fix for IE #content background.
       Invalid CSS, but can be removed without harming design -->
  <!--[if gt IE 5]>
  <link rel="stylesheet" type="text/css" href="css/ie.css" media="screen, projection, tv " />
  <![endif]-->
</head>

<body>
<div id="wrapper">
  <div id="content">
    <div id="header">
      <h1><img src="img/logo1_s.png" alt="Pro Garden" align="left"></h1><br clear="both" />
    </div>
    <?php 
      include "menu.inc";
      paintMenu('bio');
    ?>

    <div id="page">
    <div class="textspace">
<h2>Ing. Edita Mrázková</h2>
<table>
<tr><td width="100px">1975 – 1980</td><td>Stavební fakulta VUT Brno</td></tr>
<tr><td>1980 – 1991</td><td>Projektový a vývojový ústav VUT Brno – skupina sadovnické, 
venkovní a terénní úpravy</td></tr>
<tr><td>1986 – 1988</td><td>zahradnická fakulta VŠZ Lednice obor zahradnická tvorba</td></tr>
<tr><td>1994 – 1995</td><td>Čtyřlístek Brno – návrhy zeleně</td></tr>
<tr><td>1991 – 1993</td><td>Gartenzenter IBEN  Karsruhe SRN</td></tr>
<tr><td>do r. 2008</td><td>Realizační firma PRO GARDEN s.r.o.</td></tr>
<tr><td>Nyní</td><td>Samostatný zahradní architekt</td></tr>
</table>
      </div>
      <p class="footer">
        <?php include "footer.inc"; ?>
      </p>
    </div>
  </div>
</div>
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