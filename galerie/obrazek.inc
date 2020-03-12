<center>
<?php
if(file_exists ( "galerie/$g/full/$Obrazek.jpg" ))
{
//echo("<a href=\"galerie/$g/full/$Obrazek.jpg\" rel=\"lightbox[front]\"><img class=\"addborder\" src=\"galerie/$g/images/$Obrazek.jpg\" /></a><br />&nbsp;");
echo("<a href=\"galerie/$g/full/$Obrazek.jpg\" target=\"_blank\"><img class=\"addborder\" src=\"galerie/$g/images/$Obrazek.jpg\" /></a><br />&nbsp;");
}
else
{
echo("<img class=\"addborder\" src=\"galerie/$g/images/$Obrazek.jpg\" /><br />&nbsp;");
}
?>
</center>