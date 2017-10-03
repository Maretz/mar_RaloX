 <?php
#   mar_RaloX by Maretz.eu
defined('main') or die('no direct access');
$abf = 'SELECT linkfb, linktwitter, linkgoogleplus FROM prefix_marralox ORDER BY id';
$ralox = db_query($abf);
if ($rx = db_fetch_object($ralox)) {
echo '<a href="' . $rx->linkfb . '" target="_blank"><i class="fa fa-facebook-square ralox_header-span"></i></a><br>
<a href="' . $rx->linktwitter . '" target="_blank"><i class="fa fa-twitter-square ralox_header-span"></i></a><br>
<a href="' . $rx->linkgoogleplus . '" target="_blank"><i class="fa fa-google-plus-square ralox_header-span"></i></a>';
}
?> 