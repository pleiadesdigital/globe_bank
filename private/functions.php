<?php
function url_for($script_path) {
  // add the leading '/' if not present
  if ($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

// URL Encode
function u($string="") {
  return urlencode($string);
}

function raw_u($string="") {
  return urlencode($string);
}

// HTML Special Characteres
function h($string="") {
  return htmlspecialchars($string);
}
