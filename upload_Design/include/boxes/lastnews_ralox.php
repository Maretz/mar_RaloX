<?php 
#   Copyright by Manuel Staechele
#   LastNews Box mar_RaloX - Maretz.eu

defined ('main') or die ( 'no direct access' );

$abf = 'SELECT
          a.news_kat as kate,
          DATE_FORMAT(a.news_time,"%d.%m.%Y") as datum,      
          a.news_title as title,
          a.news_kat as kate,
          a.news_id as id,      
          b.name as username,
          b.id as userid         
          FROM prefix_news as a
          LEFT JOIN prefix_user as b ON a.user_id = b.id
          WHERE news_recht >= '.$_SESSION['authright'].'
          ORDER BY a.news_time DESC
          LIMIT 0,3';       
$erg = db_query($abf);
if (loggedin()) {
    $admin = '';
    if (user_has_admin_right($menu, false)) {
        $admin = '<br><a href="admin.php?news">jetzt eine News erstellen</a>';
    }
}
if ( @db_num_rows($erg) == 0 ) {
	echo '<div class="center"><br><br><br><b>kein Newseintrag vorhanden</b>'.$admin.'</div>';
} 
while ($row = db_fetch_object($erg)) {
echo '<div class="boxen_eintrag">';
	echo 'Kategorie: '.((strlen($row->kate)<36) ? $row->kate : substr($row->kate,0,36).'...').'<br><a href="index.php?news-'.$row->id.'" title="'.$row->title.'">'.((strlen($row->title)<42) ? $row->title : substr($row->title,0,42).'...').'</a><br>Autor : '.$row->username.' | '.$row->datum.'';
echo '</div>';
}
?>

