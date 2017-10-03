 <?php
#   mar_RaloX by Maretz.eu
defined('main') or die('no direct access');
$abf = 'SELECT * FROM prefix_marralox ORDER BY ID';        
$setg = db_query($abf);
if ($rey = db_fetch_object($setg)) {
$ILCH_HEADER_ADDITIONS .= "
<link href=\"$rey->raloxstyle\" rel=\"stylesheet\">
<link href=\"$rey->raloxtheme\" rel=\"stylesheet\">
<link href=\"include/designs/mar_RaloX/style.css\" rel=\"stylesheet\">";
}
?> 

