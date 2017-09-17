<?php if (!isset($page_title)) { $page_title = "Staff Area"; } ?>
<!DOCTYPE html>
<html>
<head>
  <title>GBI - <?php echo h($page_title); ?></title>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed:300,400|Roboto+Condensed:300,400" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo url_for('/css/style.css'); ?>">
</head>
<body>
  <div class="site-wrapper">

    <!-- HEADER -->
    <header>
      <section class="site-branding">
        <h1>GBI Staff Area</h1>
      </section><!-- class="site-branding" -->
      <nav class="main-nav">
        <ul>
          <li><a href="<?php echo WWW_ROOT . '/staff/index.php'; ?>">Menu</a></li>
        </ul>
      </nav>
    </header>