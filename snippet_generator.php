<?php
// Start by reading in snippet_template.htmlentities
$html = file_get_contents("snippet_template.html");
$html_pieces = explode("<!-- EXPLODE-HERE -->", $html);

// Set up indexes for different segments by order of appearance
$idx_header = 1;
$idx_footer = 2;

// Extract the correct pieces for easy insertion
$header = $html_pieces[$idx_header];
$footer = $html_pieces[$idx_footer];
?>
