<?php
$pageTitle = $pageTitle ?? 'Bookkeeping made clear';
$currentPage = basename($_SERVER['PHP_SELF']);
require_once __DIR__ . '/../config.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Reliable, accurate bookkeeping that gives small business owners clarity and confidence.">
  <title><?= htmlspecialchars($pageTitle) ?> | <?= htmlspecialchars(BUSINESS_NAME) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
  <div class="container nav-wrap">
    <a class="brand" href="index.php" aria-label="<?= htmlspecialchars(BUSINESS_NAME) ?> home">
      <span class="brand-mark">c<span>.</span></span>
      <span><?= htmlspecialchars(BUSINESS_NAME) ?><small>BOOKKEEPING</small></span>
    </a>
    <button class="menu-toggle" aria-label="Toggle navigation" aria-expanded="false"><span></span><span></span></button>
    <nav class="main-nav">
      <a class="<?= $currentPage === 'index.php' ? 'active' : '' ?>" href="index.php">Home</a>
      <a class="<?= $currentPage === 'services.php' ? 'active' : '' ?>" href="services.php">Services</a>
      <a class="<?= $currentPage === 'pricing.php' ? 'active' : '' ?>" href="pricing.php">Packages</a>
      <a class="<?= $currentPage === 'about.php' ? 'active' : '' ?>" href="about.php">About us</a>
      <a class="nav-cta" href="contact.php">Let's talk <span>↗</span></a>
    </nav>
  </div>
</header>
<main>
