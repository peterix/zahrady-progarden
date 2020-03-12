<!-- IE JE ZLO -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>


  <title>Introduction | Simple Life</title>

  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <meta name="author" content="fullahead.org" />
  <meta name="keywords" content="XHTML, CSS, template, FullAhead" />
  <meta name="description" content="A valid, XHTML 1.0 template" />
  <meta name="robots" content="index, follow, noarchive" />
  <meta name="googlebot" content="noarchive" />

  <link rel="stylesheet" type="text/css" href="css/html.css" media="screen, projection, tv " />
  <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen, projection, tv" />
  <link rel="stylesheet" type="text/css" href="css/print.css" media="print" />

  <!-- Conditional comment to apply opacity fix for IE #content background.
       Invalid CSS, but can be removed without harming design -->
  <!--[if gt IE 5]>
  <link rel="stylesheet" type="text/css" href="css/ie.css" media="screen, projection, tv " />
  <![endif]-->

</head>


<body>

<!-- #wrapper: centers the content and sets the width -->
<div id="wrapper">

  <!-- #content: applies the white, dropshadow background -->
  <div id="content">

    <!-- #header: holds site title and subtitle -->
    <div id="header">
      <h1><img src="img/logo1_s.png" alt="Pro Garden" align="left"></h1><br clear="both" />
      <!--<h2><span class="highlight">Because sometimes you don't need a sidebar</span></h2>-->
    </div>



    <!-- #menu: topbar menu of the site.  Use the helper classes .two, .three, .four and .five to set
                the widths for 2, 3, 4 and 5 item menus. -->
    <ul id="menu" class="three">
      <li><a href="index.html" title="Úvod"><span class="big">Ú</span>vod</a></li>
      <li><a href="galerie.php" title="Galerie relizací" class="here"><span class="big">G</span>alerie</a></li>
      <li><a href="kontakt.php" title="Kdo jsem"><span class="big">K</span>do jsem</a></li>
      <!--<li><a href="#" title="Kdo jsem"><span class="big">K</span>do jsem</a></li>-->
      <!--<li><a href="#" title="Get in touch"><span class="big">C</span>ontact</a></li>-->
    </ul>

    <!-- #page: holds all page content, as well as footer -->
    <div id="page">
      <?php
	// @simplexml_load_file('galerie.xml');
	$xml = simplexml_load_file('galerie.xml');
	foreach( $xml as $galerie )
	{
	  echo 'gal<br />';
	}
//	print_r($xml);
//	var_dump($xml); 

/*
	$doc = new DOMDocument();
	$doc->load( 'galerie.xml' );
	
	$galerie = $doc->getElementsByTagName( "set" );
	foreach( $galerie as $g_temp )
	{
	  $nodes = $g_temp->getElementsByTagName( "node" );
	  foreach( $nodes as $node )
	  {
	    echo $node->getAttribute("title");
	    echo "\n";
	  }
*/
	  /*
	  $publishers = $book->getElementsByTagName( "publisher" );
	  $publisher = $publishers->item(0)->nodeValue;
	 
	}*/
      ?>
      <p class="footer">
        Design by <a href="http://fullahead.org" title="Visit FullAhead">FullAhead</a>.  Valid CSS &amp; XHTML with no rights reserved.
      </p>

    </div>

  </div>

</div>

</body>

</html>
