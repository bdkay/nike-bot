<?php
include("parse.php");
$html = file_get_html('https://twitter.com/nikestore');
$output = "";

foreach($html->find('a[class=twitter-timeline-link]') as $element) {
    $pos = strrpos($element, "http://bit.ly/");
    if ($pos === false) {
        //product link not found
	} else {
	    $linkexplode  = explode("/", $element->title);
		$fn = "history/" . $linkexplode[3] . ".txt";
	    if(!file_exists($fn)) {
			$output .= "<script>window.open('{$element->title}');
                  window.focus();</script>";
			$fh = fopen($fn, 'w') or die("can't open product file");
		    fclose($fh);
		}
	}
}

echo $output;
echo '<script>setTimeout("location.reload(true);",500);</script>';
?>