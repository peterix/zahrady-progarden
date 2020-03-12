<!-- IE je zlo, bez tohohle komentare rozhodi layout -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
  <title>Zahrady ProGarden</title>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <meta name="author" content="fullahead.org" />
  <meta name="keywords" content="XHTML, CSS, template, FullAhead" />
  <meta name="description" content="A valid, XHTML 1.0 template" />
  <meta name="robots" content="index, follow, noarchive" />
  <meta name="googlebot" content="noarchive" />
  <link rel="stylesheet" type="text/css" href="css/html.css" media="screen, projection, tv " />
  <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen, projection, tv" />
  <link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
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
      paintMenu('uvod');
    ?>
    <div id="page">
    <div class="textspace">
    <h1>Vaše zahrada, jedinečná jako Vy</h1>
<img class="floatRight" src="img/photos/uvod_200.jpg">
<p>
Nabízím svoje zkušenosti z více jak stovky vypracovaných návrhů a&nbsp;desítek úspěšně dokončených praktických realizací.<br />
Vaše zahrade Vám poskytne cokoli si přejete.
</p>
<ul>
<li>Zdravé přírodní prostředí</li>
<li>Možnost tvořivé činnosti venku</li>
<li>Společný pobyt v rozšířeném obytném prostoru</li>
<li>Hry a sport venku</li>
<li>Potěšení z krásy</li>
<li>Příležitost pro reprezentaci</li>
</ul>
<p>
Společně ji vytvoříme podle Vašich představ!
</p>
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