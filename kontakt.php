<!-- IE je zlo, bez tohohle komentare rozhodi layout -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
  <title>Zahrady ProGarden - Kontakt</title>
  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <meta name="robots" content="index, follow, noarchive" />
  <meta name="googlebot" content="noarchive" />
  <link rel="stylesheet" type="text/css" href="css/html.css" media="screen, projection, tv" />
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
      paintMenu('kontakt');
    ?>
    <div id="page">
<h2>Ing. Edita Mrázková</h2>
<a href="#" title="I takoto může vypadat Vaše zahrada"><img class="floatRight" src="img/photos/01_resize.JPG" alt="Popisek obrázku"></a>
<table>
<tr>
<td width="100px" valign="top">Adresa:</td><td>Svatá Kateřina 6<br />Šebrov-Kateřina<br />67801 Blansko</td></tr>
<tr><td>E-mail:</td><td><a href="mailto:editamrazkova@gmail.com">editamrazkova@gmail.com</a></td></tr>
<tr><td>telefon:</td><td>603 163 594</td></tr>
</table>
<br />
<form action="kontakt.php">
<h2>Pošlete e-mail:</h2>
<hr />
<?php

function UTF8_mail($from,$to,$subject,$message,$cc="",$bcc="")
{
	$from = explode("<",$from );
	$headers =
		"From: =?UTF-8?B?"
		.base64_encode($from[0])."?= <"
		.$from[1] ."\r\n";
	$to = explode("<",$to );
	$to = "=?UTF-8?B?".base64_encode($to[0])
		."?= <". $to[1] ;

	$subject="=?UTF-8?B?"
		.base64_encode($subject)."?=\n";

	if($cc!="")
	{
		$cc = explode("<",$cc );
		$headers .= "Cc: =?UTF-8?B?"
			.base64_encode($cc[0])."?= <"
			. $cc[1] . "\r\n";
	}
	if($bcc!="")
	{
		$bcc = explode("<",$bcc );
		$headers .= "Bcc: =?UTF-8?B?"
			.base64_encode($bcc[0])."?= <"
			. $bcc[1] . "\r\n";
	}
	$headers .=
		"Content-Type: text/plain; "
		. "charset=UTF-8; format=flowed\n"
		. "MIME-Version: 1.0\n"
		. "Content-Transfer-Encoding: 8bit\n"
		. "X-Mailer: PHP\n";

return mail($to, $subject, $message, $headers);

}

error_reporting(0);
if($mail=="" || $predmet=="" || $zprava=="")
{
echo("<table width=\"100%\"><tr><td><label for=\"drak\">Váš e-mail:</label></td><td><input name=\"mail\" id=\"drak\" /></td></tr>
<tr><td><label for=\"smak\">Předmět zprávy:</label></td><td><input name=\"predmet\" id=\"smak\" /></td></tr>
<tr><td><label for=\"lonelymountain\">Obsah zprávy:</label></td><td></td></tr>
<tr><td colspan=\"2\"><textarea width=\"100%\" rows=\"15\" name=\"zprava\" id=\"lonelymountain\"></textarea></td></tr>
<tr><td></td><td><input type=\"submit\" value=\"Odeslat\" class=\"button\"/></td></tr></table>
");
}
else if( stristr($mail,"@")=="" || stristr($mail,".")=="" )
{
echo("
<br />
<table border=\"0\" align=\"center\" frame=\"void\" >
<tr>
<td></td>
<td width=500 align=center>
Zadali jste špatně e-mailovou adresu<br>
<a href=\"javascript: window.history.back();\"><img src=\"g/gzpet.gif\" border=\"0\" alt=\"Zpět\" /></a>
</td>
<td></td>
</tr>
</table>
");
}
else
{
	$adresy = 'Peterix <peterix@gmail.com>' . ', ';
	$adresy .= 'Edita <editamrazkova@gmail.com>';
	
	$predmet="=?UTF-8?B?".base64_encode($predmet)."?=\n";

	$hlavicky .= "From: Stranky Pro Garden <$mail>\n";
	$hlavicky .= "X-Sender: <$mail>\n";
	$hlavicky .= "X-Mailer: PHP\n"; // mailový klient
	$hlavicky .= "Return-Path: <$mail>\n";  // Návratová cesta pro chyby
	$hlavicky .= "MIME-Version: 1.0\n";
	$hlavicky .= "Content-type: text/html; charset=UTF-8\n";
	$hlavicky .= "Content-transfer-encoding: 8bit\n\n";

	$zprava = preg_replace("/\r\n|\n|\r/", "<br />", $zprava);

if(Mail($adresy,$predmet,$zprava,$hlavicky))
{
echo("
<br />
<table border=\"0\" align=\"center\" frame=\"void\" >
	<tr>
		<td></td>
		<td width=500 align=center>
			Zpráva byla úspěšně odeslána.<br />
			<a href=\"index.php?area=kontakt\"><img src=\"g/gzpet.gif\" border=\"0\" alt=\"Zpět\" /></a>
		</td>
		<td></td>
	</tr>
</table>
");
}
else
{
echo("
<br/>
<table border=\"0\" align=\"center\" frame=\"void\" >
	<tr>
		<td></td>
		<td width=\"500\" align=\"center\">
			Zpráva nebyla odeslána z důvodu chyby serveru nebo přetížení sítě. Zkuste to později.<br />
			<a href=\"javascript: window.history.back();\"><img src=\"g/gzpet.gif\" border=\"0\" alt=\"Zpět\" /></a>
		</td>
		<td></td>
	</tr>
</table>
");
}
}
?>
</form>
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