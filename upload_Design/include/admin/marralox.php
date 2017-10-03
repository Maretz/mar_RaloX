<?php
// Ilch marralox
defined('main') or die('no direct access');
defined('admin') or die('only admin access');
$design = new design('Admins Area', 'Admins Area', 2);
$design->header();
$tpl = new tpl('marralox', 1);
if (!isset($_POST['Submit_marralox'])) {
$sql = db_query("SELECT * FROM prefix_marralox") or die('<span style="color:#ff0000">Das Design mar_RaloX wurde nicht gefunden.<br>Bitte die Installation laut Anleitung umsetzen!</span>');
$IN_RX = db_fetch_assoc($sql);
$tpl->set('Message', "");
if ($IN_RX['raloxtheme'] == "include/designs/mar_RaloX/color_blue.css") {
$tpl->set('selectedblue', "selected");
$tpl->set('selectedorange', "");
$tpl->set('selectedgreen', "");
$tpl->set('selectedred', "");
$tpl->set('selectedyellow', "");
} else if ($IN_RX['raloxtheme'] == "include/designs/mar_RaloX/color_orange.css") {
$tpl->set('selectedblue', "");
$tpl->set('selectedorange', "selected");
$tpl->set('selectedgreen', "");
$tpl->set('selectedred', "");
$tpl->set('selectedyellow', "");
} else if ($IN_RX['raloxtheme'] == "include/designs/mar_RaloX/color_green.css") {
$tpl->set('selectedblue', "");
$tpl->set('selectedorange', "");
$tpl->set('selectedgreen', "selected");
$tpl->set('selectedred', "");
$tpl->set('selectedyellow', "");
} else if ($IN_RX['raloxtheme'] == "include/designs/mar_RaloX/color_red.css") {
$tpl->set('selectedblue', "");
$tpl->set('selectedorange', "");
$tpl->set('selectedgreen', "");
$tpl->set('selectedred', "selected");
$tpl->set('selectedyellow', "");
} else if ($IN_RX['raloxtheme'] == "include/designs/mar_RaloX/color_yellow.css") {
$tpl->set('selectedblue', "");
$tpl->set('selectedorange', "");
$tpl->set('selectedgreen', "");
$tpl->set('selectedred', "");
$tpl->set('selectedyellow', "selected");
}
$tpl->set('rx_raloxtheme', $IN_RX['raloxtheme']);
if ($IN_RX['raloxstyle'] == "include/designs/mar_RaloX/gamestyle_TCTD.css") {
$tpl->set('selectedTCTD', "selected");
$tpl->set('selectedWOW', "");
$tpl->set('selectedWOT', "");
} else if ($IN_RX['raloxstyle'] == "include/designs/mar_RaloX/gamestyle_WOW.css") {
$tpl->set('selectedTCTD', "");
$tpl->set('selectedWOW', "selected");
$tpl->set('selectedWOT', "");
} else if ($IN_RX['raloxstyle'] == "include/designs/mar_RaloX/gamestyle_WOT.css") {
$tpl->set('selectedTCTD', "");
$tpl->set('selectedWOW', "");
$tpl->set('selectedWOT', "selected");
}
$tpl->set('rx_raloxstyle', $IN_RX['raloxstyle']);
$tpl->set('linkfb', $IN_RX['linkfb']);
$tpl->set('linktwitter', $IN_RX['linktwitter']);
$tpl->set('linkgoogleplus', $IN_RX['linkgoogleplus']);
} else {
db_query("UPDATE
                            prefix_marralox
                        SET
                            raloxtheme = '" . $_POST['rx_raloxtheme'] . "',
                            raloxstyle = '" . $_POST['rx_raloxstyle'] . "',                                                      
                            linkfb = '" . $_POST['linkfb'] . "',
                            linktwitter = '" . $_POST['linktwitter'] . "',                           
                            linkgoogleplus = '" . $_POST['linkgoogleplus'] . "'");
echo '<div style="width:380px;position:absolute;left:50%;top:31px;margin-left:-190px;display:block;padding:10px;background:#34AF00;padding:5px;color:#000;font-size:12px;font-weight: bold;text-align:center;border:1px solid #000">Die Einstellungen wurden ge&auml;ndert.</div>';

if ($_POST['rx_raloxtheme'] == "include/designs/mar_RaloX/color_blue.css") {
$tpl->set('selectedblue', "selected");
$tpl->set('selectedorange', "");
$tpl->set('selectedgreen', "");
$tpl->set('selectedred', "");
$tpl->set('selectedyellow', "");
} else if ($_POST['rx_raloxtheme'] == "include/designs/mar_RaloX/color_orange.css") {
$tpl->set('selectedblue', "");
$tpl->set('selectedorange', "selected");
$tpl->set('selectedgreen', "");
$tpl->set('selectedred', "");
$tpl->set('selectedyellow', "");
} else if ($_POST['rx_raloxtheme'] == "include/designs/mar_RaloX/color_green.css") {
$tpl->set('selectedblue', "");
$tpl->set('selectedorange', "");
$tpl->set('selectedgreen', "selected");
$tpl->set('selectedred', "");
$tpl->set('selectedyellow', "");
} else if ($_POST['rx_raloxtheme'] == "include/designs/mar_RaloX/color_red.css") {
$tpl->set('selectedblue', "");
$tpl->set('selectedorange', "");
$tpl->set('selectedgreen', "");
$tpl->set('selectedred', "selected");
$tpl->set('selectedyellow', "");
} else if ($_POST['rx_raloxtheme'] == "include/designs/mar_RaloX/color_yellow.css") {
$tpl->set('selectedblue', "");
$tpl->set('selectedorange', "");
$tpl->set('selectedgreen', "");
$tpl->set('selectedred', "");
$tpl->set('selectedyellow', "selected");
}
$tpl->set('rx_raloxtheme', $_POST['rx_raloxtheme']);
    if ($_POST['rx_raloxstyle'] == "include/designs/mar_RaloX/gamestyle_TCTD.css") {
        $tpl->set('selectedTCTD', "selected");
        $tpl->set('selectedWOW', "");
        $tpl->set('selectedWOT', "");
    } else if ($_POST['rx_raloxstyle'] == "include/designs/mar_RaloX/gamestyle_WOW.css") {
        $tpl->set('selectedTCTD', "");
        $tpl->set('selectedWOW', "selected");
        $tpl->set('selectedWOT', "");
    } else if ($_POST['rx_raloxstyle'] == "include/designs/mar_RaloX/gamestyle_WOT.css") {
        $tpl->set('selectedTCTD', "");
        $tpl->set('selectedWOW', "");
        $tpl->set('selectedWOT', "selected");
    }
$tpl->set('rx_raloxstyle', $_POST['rx_raloxstyle']);
$tpl->set('linkfb', $_POST['linkfb']);
$tpl->set('linktwitter', $_POST['linktwitter']);
$tpl->set('linkgoogleplus', $_POST['linkgoogleplus']);
   
}
$tpl->out(0);
$design->footer();
?> 