 <?php require_once('../../../private/initialize.php'); ?>
<?php
 if (!isset($_GET['id'])) {
  redirect_to((url_for('/staff/pages/index.php')));
 }
 $id = $_GET['id'];
 $subject_id = '';
 $page_name = '';
 $position = '';
 $visible = '';
if (is_post_request()) {
  // handle form values sent by new.php
  $page_name = $_POST['page_name'] ?? '';
  $subject_id = $_POST['subject_id'] ?? '';
  $position = $_POST['position'] ?? '';
  $visible = $_POST['visible'] ?? '';
  // echo results on same page
  echo "Form paramenters<br>";
  echo "Page Name: " . $page_name . "<br>";
  echo "Subject ID: " . $subject_id . "<br>";
  echo "Position: " . $position . "<br>";
  echo "Visible: " . $visible . "<br>";
}
?>

<?php $page_title = 'Edit Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<!-- MAIN CONTENT -->
<section class="main-content">
  <div class="content-header">
    <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">Back to List</a>
  </div><!-- class="content-header" -->

  <div class="page new">
    <h1>Edit Page</h1>

    <form action="<?php echo url_for('/staff/pages/edit.php?id=' . h(u($id))); ?>" method="post">

      <dl>
        <dt>Page Name</dt>
        <dd><input type="text" name="page_name" value="<?php echo h($page_name); ?>"></dd>
      </dl>

      <dl>
        <dt>Subject ID</dt>
        <dd>
          <select name="subject_id">
            <option value=1>1</option>
          </select>
        </dd>
      </dl>

      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1"<?php if ($position == "1") { echo "selected"; } ?>>1</option>
          </select>
        </dd>
      </dl>

      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0">
          <input type="checkbox" name="visible" <?php if ($visible == 1) { echo 'checked'; } else { ''; } ?> value="1">
        </dd>
      </dl>

      <div id="operations">
        <input type="submit" value="Edit Page">
      </div>


    </form>



  </div><!-- class="page new" -->
</section><!-- class="main-content" -->
