<?php
  header('Content-type: text/html');

  // Replace placeholders with actual header/footer, due to code separation requirements
  require 'snippet_generator.php'; // $header, $footer
  $html = file_get_contents("home_template.html");
  $html = str_replace('---INSERT_HEADER_HERE---', $header, $html);
  $html = str_replace('---INSERT_FOOTER_HERE---', $footer, $html);
  echo $html;
?>
