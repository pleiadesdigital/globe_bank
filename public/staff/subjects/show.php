<?php require_once('../../../private/initialize.php'); ?>

<?php $id = $_GET['id'] ?? '1'; ?>


<?php $page_title = "GBI - Show Subjects"; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<!-- MAIN CONTENT -->

<section class="main-content">

  <div class="content-header">
    <a href="<?php echo url_for('/staff/subjects/index.php'); ?>">Back to Staff Subjects</a>
  </div>
  <div>
    <p><?php echo "Page ID: " . h($id) . "."; ?></p>
  </div>

</section><!-- class="main-content" -->


<?php include_once(SHARED_PATH . '/staff_footer.php'); ?>