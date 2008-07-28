<?
$gameName='Agadoth Online';
$mootools_v11='<script type="text/javascript" src="js/mt11.js"></script>'; # Mootools 1.1
$mootools_v12='<script type="text/javascript" src="js/mt12.js"></script>'; # Mootools 1.2

function printXmlVersion()
{ # Print Xml Version
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
}

function printDOCTYPE()
{ # Print DOCTYPE XHTML 1.0 Strict
    echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n";
}

function printXHTML()
{ # Print XHTML
   echo "<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"es\" lang=\"es\">\n";
}

function openHTML()
{ # Print standars XHTML 1.0 Strict
    printXmlVersion();
    printDOCTYPE();
    printXHTML();
}

function closeHTML(){echo '</html>';} #Print a tag for close html

function setTitle($title='')
{ # Return a configurable title with game name
    global $gameName;
    return '<title>..::'.$gameName.'::..'.(!empty($title)?' - '.$title:$title).'</title>';
}

function setCharset($charset='')
{ # Return a meta with charset (by default utf-8)
    return '<meta http-equiv="Content-Type" content="text/html;'.(empty($charset)?'charset=utf-8':$charset).'" />';
}

function setRss($rss='') # [TODO] Create a page with rss
{ # Return html code for a not empty rss
    global $gameName;
    return !empty($rss)?$rss='<link rel="alternate" type="application/rss+xml" title="..:: '.$gameName.' ::.." href="'.$rss.'">':'';
}

function setHead($title='',$extra='',$charset='')
{
    echo '<head>
    '.setCharset().'
    '.setTitle($title).'
    '.setRss().'
    <style type="text/css" media="all">
        @import "css/defaults.css";
        @import "css/messages.css";
    </style>
    <!-- Begin the rounding blurb and use RUZEE -->
    <script type="text/javascript" src="js/sb.js"></script>
    <script type="text/javascript">
            var border = RUZEE.ShadedBorder.create({ corner:10, shadow:16,  border:1 });
            var minicontainer = RUZEE.ShadedBorder.create({ corner:7, shadow:0,  border:1 });
    </script>';
    echo (!empty($extra))?"\t".$extra."\n":"\n";
    echo "</head>\n";
    #[TODO] Create a good favicon <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
}

function openContent(){require_once('inc/header.php');} # Open content with header

function closeContent(){require_once('inc/footer.php');} # Close content with footer

# Messages
function ERR($m){return '<div class="error">'.$m.'</div>';}
function INF($m){return '<div class="info">'.$m.'</div>';}
function SUC($m){return '<div class="success">'.$m.'</div>';}
function WAR($m){return '<div class="warning">'.$m.'</div>';}
?>
