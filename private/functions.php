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



/* HEADERS */
function error_404() {
  header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
  exit();
}

function error_500() {
  header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
  exit();
}

// Redirect
function redirect_to($location) {
  header("Location: " . $location);
  exit;
}

/* FORMS */
function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}



