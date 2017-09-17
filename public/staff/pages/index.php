<?php require_once('../../../private/initialize.php'); ?>
<?php
  $pages = [
    ['id' => '1', 'subject_id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'Subj 1 - Page 1'],
    ['id' => '2', 'subject_id' => '1', 'position' => '2', 'visible' => '1', 'menu_name' => 'Subj 1 - Page 2'],
    ['id' => '3', 'subject_id' => '1', 'position' => '3', 'visible' => '1', 'menu_name' => 'Subj 1 - Page 3'],
    ['id' => '4', 'subject_id' => '2', 'position' => '1', 'visible' => '1', 'menu_name' => 'Subj 2 - Page 4'],
    ['id' => '5', 'subject_id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Subj 2 - Page 5'],
    ['id' => '6', 'subject_id' => '2', 'position' => '3', 'visible' => '1', 'menu_name' => 'Subj 2 - Page 6'],
    ['id' => '7', 'subject_id' => '3', 'position' => '1', 'visible' => '1', 'menu_name' => 'Subj 3 - Page 7'],
    ['id' => '8', 'subject_id' => '3', 'position' => '2', 'visible' => '1', 'menu_name' => 'Subj 3 - Page 8'],
    ['id' => '9', 'subject_id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Subj 3 - Page 9']
  ];
?>

<?php $page_title = "Pages"; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<!-- MAIN CONTENT -->

<section class="main-content">
  <div id="pages listing">
    <h1>Pages</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/pages/new.php'); ?>">Create New Page</a>
    </div>

    <table class="list">
      <tr>
        <th>ID</th>
        <th>SUBJ ID</th>
        <th>Position</th>
        <th>Visible</th>
        <th>Name</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php foreach ($pages as $page) { ?>
        <tr>
          <td><?php echo h($page['id']); ?></td>
          <td><?php echo h($page['subject_id']); ?></td>
          <td><?php echo h($page['position']); ?></td>
          <td><?php echo ($page['visible']) == 1 ? 'true' : 'false'; ?></td>
          <td><?php echo h($page['menu_name']); ?></td>
          <td><a class="action" href="<?php echo url_for('staff/pages/show.php?id=' . h(u($page['id'])) . '&subject_id=' . h(u($page['subject_id']))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('staff/pages/edit.php?id=' . h(u($page['id']))); ?>">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
        </tr>
      <?php } ?>

    </table>

  </div>

</section><!-- class="main-content" -->

<?php include_once(SHARED_PATH . '/staff_footer.php'); ?>






