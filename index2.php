<?php

/* # Timer start
$time_start = microtime(1); */

/*

@ page link
# header
^ animated
> begin non-animated
* non-animated
+ new window
- html (within non-animated cell)
& direct link
. image-only
% html map
! new cell with html
r review

*/

# Google ad
function GoogleAd($style) {
echo <<<EOT
    <table align="center" width="548" cellpadding="0" cellspacing="0" border="0">
    <tr><td colspan="3" bgcolor="#D1D1D1" height="1"></td></tr>
    <tr><td width="1" bgcolor="D1D1D1"></td><td align="center" bgcolor="#FFF6CB">
        <script type="text/javascript"><!--
            google_ad_client = "pub-7054948751730963";
            ////google_alternate_color = "FFF6CB";
            google_alternate_ad_url = "http://www.gsarchives.net/ads/ad.htm";
            google_ad_width = 468;
            google_ad_height = 60;
            google_ad_format = "468x60_as";
            google_color_border = "FFF6CB";
            google_color_bg = "FFF6CB";
            google_color_link = "4E68C4";
            google_color_url = "4E68C4";
            google_color_text = "000000";
        //--></script>
        <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
    </td><td width="1" bgcolor="D1D1D1"></td></tr>
    <tr><td colspan="3" bgcolor="#D1D1D1" height="1"></td></tr></table>
EOT;
}

# Kill function
function kill ($message) { die('<h1><center><br><br>Error: '.$message.'<br><br></center></h1></td></tr></table></body></html>'); }

# Months list
$month = array("January","February","March","April","May","June","July","August","September","October","November","December");
$month_abbr = array("","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

# Url of forum user profiles
$forumprofile = "http://gsarchives.net/smf/index.php?action=profile;u=";

# Get the filename of this script
$thisfilename = explode("?",basename(getenv("REQUEST_URI")));
$thisfilename = $thisfilename[0];

# Widths of columns for sprite display
$date_width = "80px";
$submitter_width = "100px";

# The theme, colors, images
$style = array();
//$style["css"]                      = "style.css";                   // stylesheet file
$style["top_background1"]          = "background-color:#4E68C4";    // top background
$style["top_background2"]          = "background-color:#FFF6CB";    // top background 2
$style["top_border"]               = "background-color:#D1D1D1";    // top border
$style["left_background"]          = "background-color:#E8E8E8";    // left background
$style["left_border"]              = "background-color:#D1D1D1";    // left border
$style["main_background"]          = "background-color:#FFFFFF";    // main background
$style["bottom_border"]            = "background-color:#D1D1D1";    // top border
$style["bottom_background"]        = "background-color:#FFFFFF";    // main background
$style["logo"]                     = "logo.png";                    // logo filename
$style["logo_width"]               = "150px";                       // logo width
$style["logo_height"]              = "72px";                        // logo height
$style["header_background"]        = "background-color:#4E68C4";    // # background
$style["header_text"]              = "color:#FFFFFF";               // # text
$style["subheader_background"]     = "background-color:#D1D1D1";    // sub # background
$style["subheader_text"]           = "color:#000000";               // sub # text
$style["reviewinfo_background1"]   = "background-color:#D1D1D1";    // review info table background col 1
$style["reviewinfo_background2"]   = "background-color:#D8D8D8";    // review info table background col 2
$style["animated_background1"]     = "background-color:#E8E8E8";    // ^ background, column 1
$style["animated_background2"]     = "background-color:#D1D1D1";    // ^ background, column 2
$style["animated_background3"]     = "background-color:#E8E8E8";    // ^ background, column 3
$style["non-animated_background1"] = "background-color:#E8E8E8";    // > background, column 1
$style["non-animated_background2"] = "background-color:#D1D1D1";    // > background, column 2
$style["non-animated_background3"] = "background-color:#E8E8E8";    // > background, column 3
$style["link_background"]          = "background-color:#E8E8E8";    // @ background
$style["smalltitle_text"]          = "color:#C8DAFF";               // heading text, system
$style["bigtitle_text"]            = "color:#C8DAFF";               // heading text, game
$style["letter_background"]        = "background-color:#E8E8E8";    // background color, letters
$style["news_head_background"]     = "background-color:#4E68C4";    // news <head> background
$style["news_head_text"]           = "color:#FFFFFF";               // news <head> text
$style["news_name_background"]     = "background-color:#FFF6CB";    // news <name> background
$style["news_name_text"]           = "color:#000000";               // news <name> text
$style["news_text_background"]     = "background-color:#F6F6F6";    // news <text> background
$style["news_text_text"]           = "color:#000000";               // news <text> text

# List of categories
$categorylist = array(
    "all"=>"All",
    "sprites"=>"Sprites",
    "backgrounds"=>"Backgrounds/Maps",
    "icons"=>"Icons",
    "music"=>"Music",
    "scans"=>"Manuals/Box Scans",
    "reviews"=>"Reviews"
);

# List of systems
$systemlist = array(
    "3do"=>"3DO",
    "arcade"=>"Arcade",
    "atari2600"=>"Atari 2600",
    "computer"=>"Computer",
    "dreamcast"=>"Dreamcast",
    "gameboy"=>"Game Boy",
    "gamecube"=>"GameCube",
    "gameboyadvance"=>"GBA",
    "genesis"=>"Genesis",
    "sms"=>"Master System",
    "neogeo"=>"Neo*Geo",
    "neogeocd"=>"Neo*Geo CD",
    "neogeopocket"=>"Neo*Geo Pocket",
    "nes"=>"NES",
    "n64"=>"Nintendo 64",
    "nds"=>"Nintendo DS",
    "wii"=>"Nintendo Wii",
    "psx"=>"PlayStation",
    "ps2"=>"PlayStation 2",
    "saturn"=>"Saturn",
    "snes"=>"SNES",
    "wonderswan"=>"Wonderswan",
    "custom"=>"Custom"
    );

# Get variables from url
    # Category
    if (isset($_GET["category"])) {
        $category = $_GET['category'];
    } else { $category = "all";
    }
    # System
    if (isset($_GET['system'])) {
        $system = $_GET['system'];
        $systemname = GetSystemName();
    }
    # Game
    if (isset($_GET['game'])) {
        $game = $_GET['game'];
        $gamename   = GetGameName();
    }
    # Letter
    if (isset($_GET['letter'])) {
        $letter = $_GET['letter'];
    } else {
        $letter="all";
    }
    # Type
    if (isset($_GET['type'])) {
        $type = $_GET['type'];
    }
    # Alone
    if (isset($_GET['alone'])) {
        $alone = $_GET['alone'];
    }
    # Html
    if (isset($_GET['html'])) {
        $html = $_GET['html'];
    }
    #Page
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    #News
    if (isset($_GET['news'])) {
        $news = $_GET['news'];
    }
    #Review
    if (isset($_GET['review'])) {
        $review = $_GET['review'];
    }

# Determine path to sprites
$path = array();
$url = "";
foreach ($_GET as $label=>$value) {
    if (substr($label,0,5)=='level') {
        $path[$label{5}] = $value;
        $url = $url.$value."/";
    }
}

# Get system name
function GetSystemName () {
    extract($GLOBALS);
    if (!isset($systemlist[$system])) { kill('system not found in database<br>(list of systems in index2.php)'); }
    return $systemlist[$system];
}

# Get game name
function GetGameName() {
    extract($GLOBALS);
    if (!file_exists($system.'/'.$game.'/index')) { kill('game index (game title) not found'); }
    $loaddata = fopen ($system.'/'.$game.'/index',  "r");
    $gamename = fgets($loaddata, filesize($system.'/'.$game.'/index')+1);
    fclose($loaddata);
    return trim($gamename);
}

# If this is the page inside an iframe, display the stuff and die
if (isset($_GET['iframe']) && (isset($alone))) { echo('<html><body>'); Iframe_img(); echo('</body></html>'); die(); }
if (isset($_GET['iframe']) && (isset($html))) { echo('<html><body>'); Iframe_html(); echo('</body></html>'); die(); }

# Create an iframe for an image
function Alone() {
    extract($GLOBALS);
    echo('<iframe width="100%" height="100%" frameborder="0" marginwidth="0" marginheight="0" src="'.basename(getenv("REQUEST_URI")).'&iframe=yes">');
    Iframe_img();
    echo('</iframe>');
}

# Display the image within an iframe
function Iframe_img() {
    extract($GLOBALS);
    $url="";
    for ($p=0;$p<count($path);$p++) {
        $url = $url.($path[$p].'/');
    }
    if (isset($system)) {
        $src = $system.'/'.$game.'/'.$type.'/'.$url.$alone;
    } else {
        $src = str_replace("~~~","/",$alone);
    }
echo <<<EOT
    <table width="100%" height="100%" cellpadding="0" cellspacing="0"><tr><td align="center" valign="center">
    <img src="$src">
    </td></tr></table>
EOT;
}

# Create an iframe for html
function Html($html,$url) {
    extract($GLOBALS);
    echo('<iframe width="100%" height="100%" frameborder="0" marginwidth="0" marginheight="0" src="'.basename(getenv("REQUEST_URI")).'&iframe=yes">');
    Movepic();
    Iframe_html();
    echo('</iframe>');
}

# Display the html within an iframe
function Iframe_html() {
    extract($GLOBALS);
    echo('<table width="100%" height="100%" cellpadding="0" cellspacing="0"><tr><td align="center" valign="center">');
    $filename = $system."/".$game."/".$type."/".$url.$html;
    if (file_exists($filename)) {
        Movepic();
        $loaddata = fopen ($filename, "r");
        $stuff = "";
        $wurl = basename(getenv("REQUEST_URI"));
        $wurl = (substr($wurl,0,strrpos($wurl,"&")));
        $wurl = (substr($wurl,0,strrpos($wurl,"&")))."&html=";
        while (!feof($loaddata)) {
            $crap = fgets($loaddata, filesize($filename)+1);
            $crap = str_replace("@",$system."/".$game,$crap);
            $crap = preg_replace("/a href=\"~\/(.+)\"/U","a href=\"".$wurl."\${1}\" target=\"_top\"",$crap);
            echo($crap);
        }
        fclose($loaddata);
    } else {
        echo("You're trying to load a file that just isn't there.  Just forget it.  Let go and move on with your life.  What the hell is wrong with you?");
    }
    echo('</td></tr></table>');
}

# Display the news
function News() {
    extract($GLOBALS);
    echo('<table align="center" cellpadding="2" cellspacing="1" border="0" style="width:550; text-align:center; margin-left:auto; margin-right:auto;">');
    echo('<tr><td colspan="3">&nbsp;</td></tr>');
    echo('<tr><td colspan="3">&nbsp;</td></tr>');
    echo('</table>');

    $category="news"; $system="news";
    $files = array();
    if (!is_dir("news")) { kill('news directory not found'); }
    $fh = opendir("news");
    while (false !== ($filename = readdir($fh))) {
        if ( ($filename != ".") && ($filename != "..") && (strrpos($filename,".news")!==false) && ( (!isset($news)) || ($news=="archives") || (substr($filename,0,5) == $news) ) ) {
            array_push($files, $filename);
        }
    }
    closedir($fh);

    rsort($files);

    if ( (!isset($news)) || ($news != "archives") ) {

        $admin = array();

        if (!file_exists('admins/index')) { kill('admins/index not found'); }
        $submitter = array();
        $loaddata = fopen ("admins/index", "r");
        while (!feof($loaddata)) {
            $data = fgets($loaddata, filesize("admins/index")+1);
            $data = explode("%",$data);
            $data[1] = explode(",",$data[1]);
            for ($i=0;$i<count($data[1]);$i++) {
                $admin[strtolower(trim($data[1][$i]))] = array("name"=>trim($data[0]),"email"=>trim($data[2]),"icon"=>trim($data[3]));
            }
        }
        fclose($loaddata);

        for($i=0;( ($i<count($files)) && ( ($i<10) || (isset($news)) ) );$i++) {
            $loaddata = fopen ("news/".$files[$i], "r");
            $stuff = "";
            while (!feof($loaddata)) {
                $stuff = trim($stuff.fgets($loaddata, filesize("news/".$files[$i])+1));
            }
            fclose($loaddata);

            $head = substr($stuff,strpos($stuff,"<head>")+6,strpos($stuff,"</head>")-strpos($stuff,"<head>")-6);
            $name = strtolower(substr($stuff,strpos($stuff,'<name>')+6,strpos($stuff,'</name>')-strpos($stuff,'<name>')-6));
            $text = substr($stuff,strpos($stuff,'<text>')+6,strpos($stuff,'</name>')-strpos($stuff,'<text>'));
            if ($admin[$name]["icon"] != "---") {
                $icon = '<img src="admins/'.$admin[$name]["icon"].'" style="position:relative;top:20;left:30">';
            } else {
                $icon = ' ';
            }
            if ($admin[$name]["email"] == "---") {
                $email = $admin[$name]["name"];
            } else {
                if (is_numeric($admin[$name]["email"])) {
                    $email = '<a href="http://gsarchives.net/smf/index.php?action=profile;u='.$admin[$name]["email"].'">'.$admin[$name]["name"].'</a>';
                } else {
                    $email = '<a href="mailto:'.$admin[$name]["email"].'">'.$admin[$name]["name"].'</a>';
                }
            }

            $date = explode("-",$files[$i]);
            if ($date[2]{0} == "0") { $date[2] = $date[2]{1}; }
            $date = $month[$date[1]-1].' '.$date[2].', 20'.$date[0];

echo <<<EOT
            <table align="center" cellpadding="0" cellspacing="0" border="0" style="width:582"><tr>
            <td style="width:16" valign="top">{$icon}</td>
            <td>
            <table align="center" cellpadding="2" cellspacing="1" border="0" style="width:550; text-align:center; margin-left:auto; margin-right:auto;">
            <tr><td style="{$style["news_head_background"]}" align="left"><span style="{$style["news_head_text"]}"><img src="blank.gif" width="12" height="1"><b>{$head}</span></td></tr>

            <tr><td style="table-layout:fixed;height:20px;{$style["news_name_background"]}" align="left">
            <table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td>
            <span style="{$style["news_name_text"]}"><img src="blank.gif" width="32" height="1">Posted by: {$email}</span>
            </td><td align="right">{$date}</td><td width="12"></td></tr></table>
            </td></tr>

            <tr><td style="{$style["news_text_background"]}"><table width="100%" cellpadding="12" cellspacing="0" border="0"><tr><td align="justify" style="text-align:justify"><span style="{$style["news_text_text"]}">{$text}</span></td></tr></table></td></tr>
            </table>
            </td>
            <td style="width:16">&nbsp;</td>
            </tr></table>
            <br><br>
EOT;
        }
        if (!isset($news)) {
            echo('<center><a href="'.basename(getenv("REQUEST_URI")));
            if (!isset($_GET['category'])) { echo("?"); } else { echo("&"); }
            echo('news=archives">[ News Archives ]</a></center><br><br>');
        }
    } else {
        $first = explode("-",$files[count($files)-1]);
        $last = explode("-",$files[0]);
        $first[0] = intval($first[0]);
        $last[0] = intval($last[0]);
        echo('<table align="center" cellpadding="2" cellspacing="1" border="0" style="width:550; text-align:center; margin-left:auto; margin-right:auto;">');
        $fullurl = basename(getenv("REQUEST_URI"));
        $fullurl = substr($fullurl,0,strrpos($fullurl,"&"));
        for ($y=$last[0];$y>=$first[0];$y--) {
            if ($y < 10) { $y = '0'.$y; }
echo <<<EOT
            <tr><td style="vertical-align: top; {$style["header_background"]};">
            <span style="{$style["header_text"]};">20{$y}</span></td></tr>
EOT;
            for ($m=1;$m<=12;$m++) {
                if ($m<10) { $m1 = "0".$m; } else {$m1 = $m; }
                echo('<tr><td style="vertical-align: top; '.$style["link_background"].';"><font size="2">');
                echo('<a href="'.$fullurl);
                if (!isset($_GET['category'])) { echo("?"); } else { echo("&"); }
                echo('news='.$y.'-'.$m1.'">'.$month[$m-1].'</a>');
                echo('</td></tr>');
            }
        }
        echo('</table><br><br>');
    }
}

# Print movepic javascript function (used to do mouseover image swaps on html maps)
function Movepic() {
echo <<<EOT
<SCRIPT language="JavaScript">
    function movepic (img_name,img_src) {
        document[img_name].src = img_src;
        }
</SCRIPT>
EOT;
}

# Begin writing page
echo <<<EOT
<html><head>
<LINK REL="SHORTCUT ICON" HREF="http://www.gsarchives.net/page/media-icons/gsarchives001.ico">
<title>GSA - Game Sprite Archives</title>
<!--<link rel="stylesheet" type="text/css" href="style["css"]>-->
<style type="text/css">
A         { text-decoration:none; color:#4055a0 }
A:ACTIVE  { text-decoration:none; color:#4e68c4 }
A:VISITED { text-decoration:none; color:#4055a0 }
A:HOVER   { text-decoration:none; color:#4e68c4 }
A.dim     { color:#aaaaaa }
BODY      { font-family:Verdana,Arial,sans-serif; font-size:10pt; color:#000000; }
TD        { font-size:10pt; }
</style>

<script language="JAVASCRIPT"><!--
/* This script was created by GSA for sole
   application on this website; feel free to
   use it for reference or in part, but please
   do not reproduce in full without permission
   (which will be granted if you ask).      */

var pic;
var posx = 0;
var posy = 0;

// Listen for mouse movement
document.onmousemove = getpos;

// Get mouse position
function getpos(e) {
    if (!e) var e = window.event;
    if (e.pageX || e.pageY)
    {
        posx = e.pageX;
        posy = e.pageY;
    }
    else if (e.clientX || e.clientY)
    {
        posx = e.clientX + document.body.scrollLeft;
        posy = e.clientY + document.body.scrollTop;
    }
}

// Activate sprite box
function clix0r (pic) {
    document.getElementById("LAYER").style.display = "block";
    document.getElementById("LAYER").style.top = posy - 50;
    document["SPRITE"].src = pic;
}

// Close sprite box
function close(){
        document["SPRITE"].src = "blank.gif";
        document.getElementById("LAYER").style.display = "none";
}

//--></SCRIPT>

</head><body marginwidth="0" marginheight="0" topmargin="0" leftmargin="0" fontsize="2">

<div ID="LAYER" style="position:absolute; top:100px; right:50px; display:none;">
    <table bgcolor="#E8E8E8" style="text-align:left; width:120px; border: 1px #000000 solid;" cellspacing="0" cellpadding="0">
        <tr>
            <td style="vertical-align: top;">
                <table bgcolor="#4E68C4" style="text-align: left; width: 100%;" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td style="vertical-align: middle; text-align: left;">
                            <font color="FFFFFF" size="2">&nbsp;Sprite Box</font>
                        </td>
                        <td style="height:19; vertical-align: middle; text-align: right;">
                            <a href="JAVASCRIPT:close();"><img src="x.gif" border="0"></a><img src="blank.gif" style="width:2px">
                        </td>
                    </tr>
                </table>
                <table align="center" style="text-align: left; width: 100%; background-image: url('checker.gif')" border="0" cellspacing="2" cellpadding="4">
                    <tr>
                        <td align="center" style="vertical-align: top;">
                            <img name="SPRITE" src="blank.gif">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>

<table style="text-align:left; width:100%; height:100%;" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td style="height:75px; width:150px; {$style["top_background1"]}; vertical-align:top;">
            <a href="{$thisfilename}"><img src="{$style["logo"]}" style="width:{$style["logo_width"]}; height:{$style["logo_height"]};" border="0"></a><br>
        </td>
        <td style="{$style["top_background1"]}; width:1px">
            <br>
        </td>
        <td style="{$style["top_background1"]}" valign="center">
EOT;

# Display page heading
$smalltitle = "";
$bigtitle = "";
if (isset($gamename)) {
    $smalltitle .= $systemname.' ';
    if ($category == 'all') { $smalltitle .= 'Games'; } else { $smalltitle .= $categorylist[$category]; }
    $bigtitle .= $gamename;
} else if (isset($system)) {
    $bigtitle .= $systemname.' ';
    if ($category == 'all') { $bigtitle .= 'Games'; } else { $bigtitle .= $categorylist[$category]; }
} else if (isset($page)) {
    if (!file_exists("page/index")) { kill("page/index not found"); }
    $titlelist = array();
    $loaddata = fopen ("page/index", "r");
    while (!feof($loaddata)) {
        $stuff = fgets($loaddata, filesize("page/index")+1);
        if (trim($stuff)!=null) {
            $pagetitle = explode("%",$stuff);
            if (trim($pagetitle[0])==$page) {
                $smalltitle .= trim($pagetitle[1]);
                $bigtitle .= trim($pagetitle[2]);
            }
        }
    }
    fclose($loaddata);
} else if ( (!isset($news)) || ($news == "archives") ) {
    $bigtitle .= 'News';
    if (isset($news)) { $bigtitle .= ' Archives'; }
} else if (isset($news)) {
    $smalltitle .= 'News Archives';
    $tempnews = explode("-",$news);
    if ($tempnews[1]{0} == "0") { $tempnews[1] = $tempnews[1]{1}; }
    $date = $month[$tempnews[1]-1].' 20'.$tempnews[0];
    $bigtitle .= $date;
}
echo('<table width="100%" cellpadding="0" cellspacing="0"><tr><td width="12px"></td></td><td align="center">');
echo('<table align="center" cellpadding="0" cellspacing="0"><tr><td style="text-align:center">');
if ($smalltitle == "") { $smalltitle = "Game Sprite Archives"; }
echo('<span style="'.$style["smalltitle_text"].'; text-align:center;"><font size="3">');
echo($smalltitle);
echo('<br /></font></span>');
echo('<div style="'.$style["bigtitle_text"].'; text-align:center;"><font size="5">');
echo($bigtitle);
echo('</font></div>');
echo('</td></tr></table>');
echo('</td></tr></table>');

# Continue building page
echo <<<EOT
        </td>
    </tr>
    <tr>
        <td width="150" style="{$style["top_background2"]}">
            <br>
        </td>
        <td width="1" style="{$style["top_background2"]}">
            <br>
        </td>
        <td height="19" style="text-align:center; {$style["top_background2"]}">
EOT;

# Date Conversion
function convert_date ($date) {
    $date = explode(".",$date);
    return $GLOBALS["month_abbr"][intval($date[1])].' '.intval($date[2]).', '.$date[0];
}

# Display category list
$n=1;
foreach ($categorylist as $directory => $name) {
    echo('<a href="');
    if (isset($game)) {
        echo($thisfilename.'?category='.$directory.'&system='.$system.'&game='.$game);
        if ($directory!="all") { echo('&type='.$directory); }
    } else {
        if (isset($_GET['category'])) {
            echo(str_replace('category='.$category,'category='.$directory,basename(getenv("REQUEST_URI"))));
        } else {
            echo($thisfilename.'?category='.$directory);
        }
    }
    echo('">');
    if ((isset($category)) && ($category == $directory)) { echo('<u>'); }
    echo($name);
    if ((isset($category)) && ($category == $directory)) { echo('</u>'); }
    echo('</a>');
    if ($n!=count($categorylist)) {
        echo(' - ');
        $n++;
    }
    echo("\n");
}

# Continue building page
echo <<<EOT
<br>
</td></tr>
    <tr>
        <td height="1" style="{$style["top_border"]}" colspan="3">
        </td>
    </tr>
    <tr>
        <td style="text-align:left; vertical-align:top; {$style["left_background"]}">
            <b>&nbsp;Systems</b><br>
EOT;

# Load systems list
if (!file_exists("systems")) { kill('systems not found'); }
$menu = array();
$loaddata = fopen ("systems", "r");
while (!feof($loaddata)) {
    $menu[count($menu)] = fgets($loaddata, filesize("systems")+1);
}
fclose($loaddata);

# Display systems list (left navigation)
for ($i=0;$i<count($menu);$i++) {
    if ($menu[$i]{0}!=" ") {
        $menu[$i] = explode(",",$menu[$i]);
        $k = $i + 1;
        $display = false;
        while((isset($menu[$k])) && ($menu[$k]{0}==" ")) {
            if (trim($menu[$k])==$category) {
                $display = true;
            }
            $k++;
        }
        if (($display == true) || ($category == "all")) {
            echo('&nbsp; <a href="'.$thisfilename.'?category='.$category.'&system='.trim($menu[$i][1]).'&letter=all">'.$menu[$i][0].'</a><br>'."\n");
        } else {
            echo('&nbsp; <a href="'.$thisfilename.'?category='.$category.'&system='.trim($menu[$i][1]).'&letter=all" class="dim">'.$menu[$i][0].'</a><br>'."\n");
        }
    }
}
unset($k);

# Display secondary links (left navigation)
$tempurl = $thisfilename."?category=".$category."&page=";
echo <<<EOT
    <br>
    &nbsp;<b>Site</b><br>
    &nbsp; <a href="http://gsarchives.net/smf/">Forums</a><br>
    &nbsp; <a href="{$tempurl}media">Media</a><br>
<!--    &nbsp; < a href="{$tempurl}faq">FAQ</a><br>
    &nbsp; < a href="{$tempurl}staff">Staff</a><br>-->
    <br>&nbsp;<b>Affiliates</b><br>
EOT;
unset($tempurl);

function Affiliates() {
    // List affiliates
    $affiliate = array(
        array("rpgicons.gif","http://rpg-icons.com/"),
        array("shyguy.gif","http://tsgk.captainn.net/"),
        array("ganonstower.jpg","http://www.ganonstower.com/"),
        array("sm128c.gif","http://www.sm128c.com/"),
        array("purezc.gif","http://www.purezc.com/"),
        array("blade2k.jpg","http://www.blade2k.net/?9"),
        array("carchive.gif","http://www.carchive.net/"),
        //array("wiisworld.gif","http://www.wiisworld.com/")
        //array("gamingw.gif","http://www.gamingw.net/"),//May re-affiliate once their new site is ready
        //array("projectblack.gif","http://www.projectblack.com/"),
        //array("rgz3.gif","http://www.retrogamezone.co.uk/"),
        //array("marioportal.gif","http://www.marioportal.com/"),
        //array("gaminguniverse.gif","http://www.thegaminguniverse.com/"),
        //array("gsc.png","http://www.gscentral.com/"),
        //array("vgdc.gif","http://www.videogamedc.com/"),
        //array("brakpage.gif","http://www.brakpage.com/"),
        //array("goblinlord.jpg","http://www.goblinlord.com/"),
        //array("shiggity.gif","http://shiggity.net/"),
        //array("bdsprites.gif","http://bd.turbocomix.com/"),
        //array("miiwii.gif","http://www.miiwii.de/"),
        //array("gifsyndicate.gif","http://gifsyn.electricpopsicle.com/"),
        //array("spriteholic.gif","http://www.spriteaholic.com/")
    );

$display_affil = Array();

for ($i=0; $i<2; $i++) {
    $n = rand(0,count($affiliate)-1);
    $display_affil[] = '<a href="'.$affiliate[$n][1].'"><img src="abuttons/'.$affiliate[$n][0].'" border="0" style="display:block;margin-left:10;margin-top:5;"></a>';
    unset($affiliate[$n]);
    $affiliate = array_values($affiliate);
}
//shuffle($display_affil);

for ($i=0; $i<count($display_affil); $i++) {
    echo($display_affil[$i]);
}

echo <<<EOT

    <div style="margin-left:11px; margin-top:8px; font-weight:bold; vertical-align:center; height:26px; width:89px; background-color:#cccccc"><a href="JAVASCRIPT:clickAFFIL();" style="display:inline">All affiliates</a></div>

    <script language="JAVASCRIPT"><!--
    function clickAFFIL () {
        document.getElementById("AFFIL").style.display = "block";
        //document.getElementById("AFFIL").style.top = posy - 350;
    }
    function closeAFFIL () {
        document.getElementById("AFFIL").style.display = "none";
    }
    //--></script>

    <div ID="AFFIL" style="position:absolute; top:130px; left:160px; display:none;">
        <table bgcolor="#E8E8E8" style="text-align:left; border: 1px #000000 solid;" cellspacing="0" cellpadding="0">
            <tr>
                <td style="vertical-align: top;">
                    <table bgcolor="#4E68C4" style="text-align: left; width: 100%;" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td style="vertical-align: middle; text-align: left;">
                                <font color="FFFFFF" size="2">&nbsp;Affiliates</font>
                            </td>
                            <td style="height:19; vertical-align: middle; text-align: right;">
                                <a href="JAVASCRIPT:closeAFFIL();"><img src="x.gif" border="0"></a><img src="blank.gif" style="width:2px">
                            </td>
                        </tr>
                    </table>
                    <table align="center" style="text-align: left; width: 100%;" border="0" cellspacing="2" cellpadding="4">
                        <tr>
                            <td align="center" style="vertical-align: top;">

EOT;

    foreach ($affiliate as $key => $data) {
        echo('<a href="'.$data[1].'"><img src="abuttons/'.$data[0].'" border="0"></a><br>'."\n");
    }

echo <<<EOT
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
EOT;
}
Affiliates();

# Continue building page
echo <<<EOT
</td><td style="width:1px; {$style["left_border"]}"></td>
<td style="vertical-align:top; {$style["main_background"]}">
EOT;

# Load list of submitters
function Submitters() {
    if (!file_exists('submitters')) { kill('submitters not found'); }
    $submitter = array();
    $loaddata = fopen ("submitters", "r");
    while (!feof($loaddata)) {
        $stuff = fgets($loaddata, filesize("submitters")+1);
        $stuff = explode("%",$stuff);
        $submitter[trim($stuff[0])] = array("name"=>trim($stuff[1]),"number"=>trim($stuff[2]));
    }
    fclose($loaddata);
    return ($submitter);
}

# Load sprite index list
function PrepareDisplay() {
    extract($GLOBALS);

    #Load list
    if (!file_exists($system.'/'.$game.'/'.$type.'/index')) { return "not found"; }
    $spriteindex = array();
    $loaddata = fopen ($system.'/'.$game.'/'.$type.'/index',  "r");
    while (!feof($loaddata)) {
        $stuff = fgets($loaddata, filesize($system.'/'.$game.'/'.$type.'/index')+1);
        if (trim($stuff) != "") { $spriteindex[count($spriteindex)][0] = $stuff; }
    }
    fclose($loaddata);

    # Determine level based on number of spaces
    for ($i=0;$i<count($spriteindex);$i++) {
        $n = 0;
        while ($spriteindex[$i][0][$n] == " ") {
            $n++;
        }
        $spriteindex[$i]["level"]=$n;
    }

    return $spriteindex;
}

# Display row of letters
function Letters() {
    extract($GLOBALS);
    if (!file_exists($system."/index")) {
        if (is_dir($system)) {
            kill('system index (list of games) not found');
        } else {
            kill('system directory not found');
        }
    }
    $alphabet = array("All","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
    echo('<table align="center" cellpadding="2" cellspacing="2" border="0" style="width:552; text-align:center; margin-left:auto; margin-right:auto;">');
    echo('<tr><td>&nbsp;</td></tr>');
    echo('<tr><td>&nbsp;</td></tr>');
    echo('<tr>'."\n");
    for ($i=0;$i<count($alphabet);$i++) {
        echo('<td style="'.$style["letter_background"].'"><div style="font-size:12pt; text-align:center">');
        echo('<a href="'.$thisfilename.'?category='.$category.'&system='.$system.'&letter='.strtolower($alphabet[$i]).'">');
        if (strtolower($alphabet[$i])==$letter) { echo('<u>'); }
        echo($alphabet[$i]);
        if (strtolower($alphabet[$i])==$letter) { echo('</u>'); }
        echo('</a></div></td>'."\n");
    }
    echo('</tr></table>');
}

# Load and display list of games
function GameList() {
    extract($GLOBALS);
    $gamelist = array();
    $loaddata = fopen ($system."/index", "r");
    $n=0;
    $firstline=1;
    while (!feof($loaddata)) {
        $stuff = fgets($loaddata, filesize($system."/index")+1);
        if ($firstline==1) {
            if ($stuff{0} != "#") {
                echo DisplayHeading1col($systemname);
            }
            $firstline=0;
        }
        if ($stuff{0} == "#") {
            echo DisplayHeading1col(substr($stuff,1,strlen($stuff)));
        } else
        if (((($letter == "all") || ($letter == strtolower($stuff{0})))) && (trim($stuff)!=null)) {
            $thisgame = explode("%",$stuff);
            if (($category == "all") || (file_exists($system.'/'.trim($thisgame[1]).'/'.$category.'/index'))) {
                echo('<tr><td colspan="3" style="vertical-align: top; '.$style["link_background"].';"><font size="2">');
                echo('<a href="'.$thisfilename.'?category='.$category.'&system='.$system.'&game='.trim($thisgame[1]));
                if ($category != "all") { echo('&type='.$category); }
                echo('">');
                echo(trim($thisgame[0]));
                echo('</a></font></td></tr>');
                $n=1;
            }
        }
    }
    fclose($loaddata);
    if ($n==0) { ErrNotFound($categorylist[$category],$systemname); }
}

# Display type selection menu
function TypeSelection() {
    extract($GLOBALS);
    echo('<tr><td colspan="3">&nbsp;</td></tr>');
    $output = "";
    $n = 0;
    foreach ($categorylist as $directory => $name) {
        if ((($category=="all")||($category==$directory))&&(is_dir($system.'/'.$game.'/'.$directory))&&($directory!="all")) {
            $output .= ('<tr><td colspan="3" style="vertical-align: top; '.$style["link_background"].';"><font size="2">');
            $output .= ('<a href="'.$thisfilename.'?category='.$category.'&system='.$system.'&game='.$game.'&type='.$directory.'">');
            $output .= ($name);
            $output .= ('</a>');
            $output .= ('</td></tr>');
            $n=1;
        }
    }
    if ($n==0) {
        if ($category!="all") {
            AutoHeader();
            ErrNotFound($categorylist[$category],$gamename);
        }
    } else {
        $output = DisplayHeading1col("Categories").$output;
    }
    echo($output);
}

# Determine places to begin and end (pick section out of list)
function FindLines($spriteindex,$path) {
    $first = -1;
    $last = -1;
    for ($i=0;$i<count($spriteindex);$i++) {
        $k = explode(",",$spriteindex[$i][0]);
        if (($first != -1) && ($last == -1) && ($spriteindex[$i]["level"]==count($path)-1)) {
            $last = $i;
        }
        if (($spriteindex[$i]["level"]==count($path)-1) && (count($k)>1) && (trim($k[1])==$path[count($path)-1])) {
            $first = $i;
        }
    }
    if ($last == -1) { $last = count($spriteindex);    }
    if ($first == -1) { $first = 0; }
    return array($first,$last);
}

# Display @ link (from a spriteindex line)
function DisplayNavigationLink($k) {
    extract($GLOBALS);
    $k = explode(",",$k);
    $basename = basename(getenv("REQUEST_URI"));
    $pathcount = count($path);
    $linktext = substr($k[0],1,strlen($k[0])-1);
    $linkurl = ($basename.'&level'.$pathcount.'='.$k[1]);
    return DisplayPageLink($linktext,$linkurl);
}

# Displays any @-style link
function DisplayPageLink($linktext,$linkurl) {
extract($GLOBALS);
return <<<EOT
\n    <tr><td colspan="3" style="vertical-align: top; {$style["link_background"]};"><font size="2">
        <a href="{$linkurl}">
        {$linktext}
        </a>
    </font>
    </td></tr>
EOT;
}

# Display single image, non-animated-style
function DisplayAnImage ($imgurl,$imgsubmitter,$imgdate) {
    extract($GLOBALS);
    $output = "";
    $output .= ('<tr><td style="vertical-align: top; '.$style["non-animated_background1"].';">');
    $output .= ('<img src="'.$imgurl.'">');
    $output .= ('</td><td style="vertical-align: top; width: '.$date_width.'; '.$style["non-animated_background2"].';"><font size="2">');
    $output .= ($imgdate);
    $output .= ('</font></td><td style="vertical-align: top; width: '.$submitter_width.'; '.$style["non-animated_background3"].';">');
    if ($submitter[$imgsubmitter]["number"]!=='---') { $output .= ('<a href="'.$forumprofile.$submitter[$imgsubmitter]["number"].'"><u>'); }
    $output .= ($submitter[$imgsubmitter]["name"]);
    if ($submitter[$imgsubmitter]["number"]!=='---') { $output .= ('</u></a>'); }
    $output .= ('</font></td></tr>');
    return $output;
}

# Display non-animated group (from spriteindex)
function DisplayNonanimated ($k,$spriteindex,$i1) {
    extract($GLOBALS);
    $i=$i1;
    $m=$i+1;
    $k1 = trim($spriteindex[$m][0]);
    $output = "";
    $output .= ('<tr><td style="vertical-align: top; '.$style["non-animated_background1"].'; background-image:url(\'checker.gif\')">');
    while (($k1{0}=="*") || ($k1{0}=="-")) {
        $data = substr($k1,1,strlen($k1)-1);
        if ($k1{0}=="*") {
            $output .= ('<img src="'.$system.'/'.$game.'/'.$type.'/');
            for ($p=0;$p<count($path);$p++) {
                $output .= ($path[$p].'/');
            }
            $output .= ($data);
            $output .= ('" alt="'.substr($data,0,strrpos($data,".")).'"> ');
        } else {
            $output .= ($data);
        }
        $m++;
        if (isset($spriteindex[$m][0])) {
            $k1 = trim($spriteindex[$m][0]);
        } else {
            $k1 = "end";
        }
    }
    $k = substr($k,1,strlen($k)-1);
    $k = explode(",",$k);
    $output .= ('<br></td><td style="vertical-align: top; width: '.$date_width.'; '.$style["non-animated_background2"].';"><font size="2">');
    $output .= convert_date($k[1]);
    $output .= ('</font></td><td style="vertical-align: top; width: '.$submitter_width.'; '.$style["non-animated_background3"].';">');
    if ($submitter[$k[0]]["number"]!=='---') { $output .= ('<a href="'.$forumprofile.$submitter[$k[0]]["number"].'"><u>'); }
    $output .= ($submitter[$k[0]]["name"]);
    if ($submitter[$k[0]]["number"]!=='---') { $output .= ('</u></a>'); }
    $output .= ('</font></td></tr>');
    return $output;
}

# Display animated sprite (from spriteindex line)
function LineToAnimated($k) {
    extract($GLOBALS);
    $w = $k{0};
    $k = substr($k,1,strlen($k)-1);
    $k = explode(",",$k);
        $imgurl       = $k[0];
        $imgtext      = $k[1];
        $imgsubmitter = $k[2];
        $imgdate      = $k[3];
    $url = "";
    for ($p=0;$p<count($path);$p++) {
        $url = $url.($path[$p].'/');
    }
    // html maps and single-image pages: don't use the entire url, just the filename
    if (($w!=".")&&($w!="%")) { $imgurl = $system.'/'.$game.'/'.$type.'/'.$url.$imgurl; }
    return DisplayAnimated($w,$imgurl,$imgtext,$imgsubmitter,$imgdate);
}

# Display any sprite animated-style
function DisplayAnimated($w,$imgurl,$imgtext,$imgsubmitter,$imgdate) {
    extract($GLOBALS);
    $output = "";
    $output .= ('<tr><td style="vertical-align: top; '.$style["animated_background1"].';">');
    $output .= ('<a href="');
    if ($w=="^") { $output .= ("JAVASCRIPT:clix0r('"); }
    if (($w != ".") && ($w != "%") && ($w != "r")) { $output .= ($imgurl); }
    else if ($w == ".") { $output .= (basename(getenv("REQUEST_URI"))."&alone=".$imgurl); }
    else if ($w == "%") { $output .= (basename(getenv("REQUEST_URI"))."&html=".$imgurl); }
    else if ($w == "r") { $output .= (basename(getenv("REQUEST_URI"))."&review=".$imgurl); }
    if ($w=="^") { $output .= ("');"); }
    $output .= ('"');
    if ($w=="+") { $output .= (' target="Spritewindow"'); }
    $output .= ('>'.$imgtext.'</a></td>');
    $output .= ('<td style="vertical-align: top; width: '.$date_width.'; '.$style["animated_background2"].';"><font size="2">');
    $output .= convert_date($imgdate);
    $output .= ('</font></td><td style="vertical-align: top; width: '.$submitter_width.'; '.$style["animated_background3"].';">');
    if ($submitter[$imgsubmitter]["number"]!=='---') { $output .= ('<a href="'.$forumprofile.$submitter[$imgsubmitter]["number"].'"><u>'); }
    $output .= ($submitter[$imgsubmitter]["name"]);
    if ($submitter[$imgsubmitter]["number"]!=='---') { $output .= ('</u></a>'); }
    $output .= ('</td></tr>');
    return $output;
}

# Automatic header on level0 menu
function AutoHeader() {
    extract($GLOBALS);
    if (!isset($type)) { $type = $category; }
    if ($type != "reviews") {
        echo DisplayHeading1col($categorylist[$type]);
    } else {
        echo DisplayHeading3col($categorylist[$type]);
    }
}

# Manual header
function DisplayHeading($k,$m) {
    extract($GLOBALS);
    $title = substr($k,1,strlen($k)-1);
    $m = trim($m);
    if ($m{0} != "@") {
        return DisplayHeading3col($title);
    } else {
        return DisplayHeading1col($title);
    }
}

# 3-column header
function DisplayHeading3col ($title) {
    extract($GLOBALS);
return <<<EOT
        <tr><td colspan="3">&nbsp;</td></tr>
        <tr>
            <td style="vertical-align: top; {$style["header_background"]};">
                <span style="{$style["header_text"]};">{$title}</span></td>
            <td style="vertical-align: top; {$style["header_background"]}; width: '.$date_width.';">
                <span style="{$style["header_text"]};">Date</span></td>
            <td style="vertical-align: top; {$style["header_background"]}; width: '.$submitter_width.';">
                <span style="{$style["header_text"]};">Submitter</span></td>
        </tr>
EOT;
}

# 1-column header
function DisplayHeading1col ($title) {
    extract($GLOBALS);
return <<<EOT
        <tr><td colspan="3">&nbsp;</td></tr>

        <tr>

        <td colspan="3" style="vertical-align: top; {$style["header_background"]};">
        <span style="{$style["header_text"]};">{$title}</span></td>

        </tr>
EOT;
}

# Single html cell with whatever in it
function DisplayHtmlCell ($html) {
extract($GLOBALS);
return <<<EOT
\n    <tr><td colspan="3" style="vertical-align: top; {$style["link_background"]}; text-align:justify">

    <table width="100%" cellpadding="15" cellspacing="0" border="0"><tr><td style="text-align:justify">
    <font size="2">   \n\n   {$html}   \n\n   </font>
    </td></tr></table>

    </td></tr>
EOT;
}

# Link to a review
function ReviewLink ($k) {
    $w = $k{0};
    $k = substr($k,1,strlen($k)-1);
    $k = explode(",",$k);
        $url = $k[1];
        $text = $k[0];
        $submitter = $k[1];
        $date = $k[2];
    echo DisplayAnimated($w,$url,$text,$submitter,$date);
}

# When the game has nothing in that category
function ErrNotFound ($category,$gamename) {
    echo DisplayHtmlCell('<center>No data to display.</center>');
/*    if (!isset($_GET["game"])) {
        echo DisplayHtmlCell('no game set');
    }
    if ($category == "All") {

    } else {
        echo DisplayHtmlCell('<center>The archives contain no '.$category.' for '.$gamename.'.</center>');
    }*/
}

# Display the menu, getting into the content
function DisplayMenu() {
    extract($GLOBALS);
    echo('<tr><td colspan="3">&nbsp;</td></tr>');

    if ( (count($path)==0) && ($type!="music") && ($type != "backgrounds") && ($spriteindex!="not found") ) { AutoHeader(); }

    if ($spriteindex=="not found") {
        AutoHeader();
        ErrNotFound($categorylist[$category],$gamename);
    } else {

        $line = FindLines($spriteindex,$path);

        // Display the stuff
        for ($i=$line[0];$i<$line[1];$i++) {
            if (($spriteindex[$i]["level"] == count($path))) {
                $k = trim($spriteindex[$i][0]);
                if ($k{0} == "#") { echo(DisplayHeading($k,$spriteindex[$i+1][0])); }
                elseif ($k{0} == "@") { echo(DisplayNavigationLink($k)); }
                elseif ($k{0} == ">") { echo(DisplayNonanimated($k,$spriteindex,$i)); }
                elseif ( ($k{0} == "^") || ($k{0} == "+") || ($k{0} == "&") || ($k{0} == ".") || ($k{0} == "%") ) { echo(LineToAnimated($k)); }
                elseif ($k{0} == "!") { echo(DisplayHtmlCell(substr($k,1,strlen($k)-1))); }
                elseif ($k{0}=="r") { echo ReviewLink($k); }
            }
        }
    }
}

# Miscellaneous page
function Page () {
    extract($GLOBALS);
    // echo('<textarea cols=125 rows=45>'); // begin debugging tool
    if (file_exists("page/".$page.".p")) {
        $stuff="";
        $loaddata = fopen ("page/".$page.".p", "r");
        while (!feof($loaddata)) {
            $stuff = trim($stuff.fgets($loaddata, filesize("page/".$page.".p")+1));
        }
        fclose($loaddata);

        $preurl = basename(getenv("REQUEST_URI"));
        $preurl = substr($preurl,0,strrpos($preurl,"&"));

        $stuff = preg_replace(
            "/<heading cols=1>(.+)<\/heading>/U",
            DisplayHeading1col("\\1"),
            $stuff
        );
        $stuff = preg_replace(
            "/<heading cols=3>(.+)<\/heading>/U",
            DisplayHeading3col("\\1"),
            $stuff
        );
        $stuff = preg_replace(
            "/<link url=\"(.+)\">(.+)<\/link>/U",
            DisplayPageLink("\\2","$preurl&page=\\1"),
            $stuff
        );
        $stuff = preg_replace_callback(
            "/<img url=\"(.+)\" submitter=\"(.+)\" date=\"(.+)\">/U",
            create_function(
                '$matches',
                'return DisplayAnImage("page/".$matches[1],$matches[2],$matches[3]);'
            ),
            $stuff
        );
        $stuff = preg_replace_callback(
            "/<anim type=\"(.+)\" url=\"(.+)\" text=\"(.+)\" submitter=\"(.+)\" date=\"(.+)\">/U",
            create_function(
                '$matches',
                'return DisplayAnimated($matches[1],str_replace("/","~~~","page/".$matches[2]),$matches[3],$matches[4],$matches[5]);'
                // DisplayAnimated($w,$imgurl,$imgtext,$imgsubmitter,$imgdate);
            ),
            $stuff
        );
        $stuff = preg_replace_callback(
            "/<cell>(.+)<\/cell>/U",
            create_function(
                '$matches',
                'return DisplayHtmlCell($matches[1]);'
            ),
            $stuff
        );
        echo($stuff);
    } else {
        kill("The page isn't there, yo.");
    }
    // echo('</textarea>'); // end debugging tool
}

# Up arrow
function UpArrow() {
    extract($GLOBALS);
    $fullurl = basename(getenv("REQUEST_URI"));
    $fullurl = substr($fullurl,0,strrpos($fullurl,"&"));
    if ( (isset($type)) && ( ((isset($spriteindex))&&($spriteindex == "not found")) || (($type==$category)&&(count($path)==0)) ) ) {
        $fullurl = substr($fullurl,0,strrpos($fullurl,"&"));
    }
    if ( (isset($news)) && ($news != "archives") ) { $fullurl = $fullurl.'&news=archives'; }
    if ( count($_GET) == 1 ) { $fullurl = $thisfilename; }
    if (isset($_GET["letter"])) { $fullurl = substr($fullurl,0,strrpos($fullurl,"&")); }
    echo("\n".'<a href="'.$fullurl.'"><img src="arrow.gif" style="position:absolute;top:105;left:160" border="0"></a>'."\n");
}

# Display help link in spc sections
function SpcHelp () {
extract($GLOBALS);
echo <<<EOT
\n    <tr><td colspan="3" style="vertical-align: top;><font size="2">
        <br>Can't play SPC files? <a href="{$thisfilename}?category={$category}&page=spc">Click here for help!</a>
    </font>
    </td></tr>
EOT;
}

# Sub header (for reviews)
function DisplaySubheader($title) {
    extract($GLOBALS);
return <<<EOT
        <tr><td colspan="3">&nbsp;</td></tr>
        <tr>
            <td colspan="3" style="vertical-align: top; {$style["subheader_background"]};">
                <span style="{$style["subheader_text"]};"><b><i>{$title}</i></b></span></td>
        </tr>
EOT;
}

# Display review
function DisplayReview () {
    extract($GLOBALS);
    echo('<table align="center" cellpadding="2" cellspacing="1" border="0" style="width:550; text-align:center; margin-left:auto; margin-right:auto;">');
    echo('<tr><td colspan="3">&nbsp;</td></tr>');
    $theurl = $system.'/'.$game.'/'.$type.'/'.$url.$review.'/index';
    if (file_exists($theurl)) {
        $stuff="";
        $loaddata = fopen ($theurl, "r");
        while (!feof($loaddata)) {
            $stuff = trim($stuff.fgets($loaddata, filesize($theurl)+1));
        }
        fclose($loaddata);
        $stuff = str_replace("<submitter>",$submitter[$review]["name"],$stuff);
        $stuff = preg_replace(
            "/<heading>(.+)<\/heading>/U",
            DisplayHeading1col("\\1"),
            $stuff
        );
        $stuff = preg_replace(
            "/<subheading>(.+)<\/subheading>/U",
            DisplaySubHeader("\\1"),
            $stuff
        );
        $stuff = preg_replace_callback(
            "/<cell>(.+)<\/cell>/U",
            create_function(
                '$matches',
                'return DisplayHtmlCell($matches[1]);'
            ),
            $stuff
        );
        $stuff = preg_replace_callback(
            "/<img src=\"(.+)\" align=\"(left|right)\">/U",
            create_function(
                '$matches',
                '$opp["right"]="left";$opp["left"]="right"; return "<img src=\"".$matches[1]."\" align=\"".$matches[2]."\" style=\"margin-".$opp[$matches[2]].":15px;margin-bottom:5px\">";'
            ),
            $stuff
        );
        $stuff = preg_replace_callback(
            "/<infotable>(.+)<\/infotable>/U",
            create_function(
                '$matches',
                'return InfoTable($matches[1]);'
            ),
            $stuff
        );
        $stuff = str_replace("@",$system."/".$game,$stuff);
        $stuff = str_replace("~",$system."/".$game."/reviews/".$url.$review,$stuff);
        echo($stuff);
    } else {
        echo("<br><br><br><br><center>Dude, I can't find the review.  Sorry.</center>");
    }
    echo('</table><br><br>');
}

#  Display info table in review
function InfoTable ($data) {
    extract($GLOBALS);
    $data = explode("%",$data);
    $output = "";
    $output .= '<table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" valign="center">';
        $output .= '<img src="'.$data[0].'">';
    $output .= '</td><td align="right">';
        $output .= '<table cellspacing="1" cellpadding="3" border="0" align="right">';
        for($i=1;$i<(count($data)-1);$i=$i+2) {
            $output .= '<tr>';
            $output .= '<td style="'.$style["reviewinfo_background1"].'">'.$data[$i].'</td>';
            $output .= '<td style="'.$style["reviewinfo_background2"].'">'.$data[$i+1].'</td>';
            $output .= '</tr>';
        }
        $output .= '</table>';
    $output .= '</td></tr></table>';
    return $output;
}

# Initiate actions
if (isset($alone) && (!isset($_GET['iframe']))) {
    Alone();
} else if (isset($html)) {
    Html($html,$url);
} else if (isset($review)) {
    $submitter = Submitters();
    DisplayReview();
} else if ((isset($system)) && (isset($category))) {
    if (!isset($game)) { Letters(); }
    if ((isset($game)) && (isset($type))) { $spriteindex = PrepareDisplay(); $submitter = Submitters(); }

    echo('<table align="center" cellpadding="2" cellspacing="1" border="0" style="width:550; text-align:center; margin-left:auto; margin-right:auto;">');

    if (!isset($game)) { GameList(); }
    if ((isset($game)) && (!isset($type))) { TypeSelection(); }
    if ((isset($game)) && (isset($type))) { DisplayMenu(); }

    if ( (isset($type)) && ($type=="music") && ($spriteindex!="not found") ) { SpcHelp(); }
    echo('</table>');
    echo('<br><br>');
    GoogleAd($style);
    echo('<br><br>');
} else if (isset($page)) {
    $submitter = Submitters();
    echo('<table align="center" cellpadding="2" cellspacing="1" border="0" style="width:550; text-align:center; margin-left:auto; margin-right:auto;">');
    echo('<tr><td colspan="3">&nbsp;</td></tr>');
    Page();
    echo('</table><br><br>');
} else {
    News();
}

# Display up arrow
if ( ( (isset($system)) && (isset($category)) ) || (isset($news)) || (isset($page)) ) { UpArrow(); }

# Finish constructing html
echo <<<EOT

</td></tr>
<tr><td height="1" style="{$style["bottom_border"]}" colspan="4"></td></tr>
<tr><td height="19" style="{$style["bottom_background"]}; text-align:right" colspan="4">
Copyright &copy; 2000-2009 Game Sprite Archives&nbsp;</td></tr>
</table>

</body>
EOT;

/* # Timer end
$time_end = microtime(1);
$time = $time_end - $time_start;
$time = round($time,3); */

/* echo <<<EOT
<script language=\"JavaScript\">self.status="Script executed in {$time} seconds";</script>
</html>
EOT; */

?>
