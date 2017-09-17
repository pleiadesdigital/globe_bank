<?php require_once('../../../private/initialize.php'); ?>

<?php

if (is_post_request()) {

  $menu_name = $_POST['page_name'] ?? '';
  $subject_id = $_POST['subject_id'] ?? '';
  $position = $_POST['position'] ?? '';
  $visible = $_POST['visible'] ?? '';

  echo "Form paramenters<br>";
  echo "Page Name: " . $menu_name . "<br>";
  echo "Subject ID: " . $subject_id . "<br>";
  echo "Position: " . $position . "<br>";
  echo "Visible: " . $visible . "<br>";

} else {
  redirect_to(url_for('/staff/pages.new.php'));
}


?>