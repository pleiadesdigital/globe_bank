<?php require_once('../../../private/initialize.php'); ?>

<?php $id = $_GET['id'] ?? '1'; ?>
<?php $subj_id = $_GET['subj_id'] ?? '11'; ?>


<?php $page_title = "GBI - Show Page"; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<!-- MAIN CONTENT -->

<section class="main-content">

  <div class="content-header">
    <a href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to Staff Pages</a>
  </div>
  <div>
    <p><?php echo "Page ID: " . h($id) . " | Subject ID: " . h($subj_id); ?></p>
  </div>

</section><!-- class="main-content" -->


<?php include_once(SHARED_PATH . '/staff_footer.php'); ?>

