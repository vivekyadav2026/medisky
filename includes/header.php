<?php
if (!headers_sent()) {
    header("Cache-Control: no-cache, must-revalidate, max-age=0");
    header("Pragma: no-cache");
}
if (!isset($page_title)) {
    $page_title = "Medisky Lifesciences Pvt. Ltd. | Clinical Nutrition & Critical Care Therapeutics";
}
if (!isset($page_description)) {
    $page_description = "Medisky Lifesciences Pvt. Ltd. — Patna-based marketer of parenteral nutrition, IV infusions, iron therapy and surgical consumables for Indian hospitals.";
}
if (!isset($current_page)) {
    $current_page = '';
}

// Dynamic Cache-Busting Versioning based on CSS File Modification Time
$css_file = __DIR__ . '/../assets/css/style.css';
$asset_ver = file_exists($css_file) ? filemtime($css_file) : time();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<title><?php echo htmlspecialchars($page_title); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
<!-- FAVICON -->
<link rel="icon" type="image/png" href="assets/img/favicon.png?v=<?php echo $asset_ver; ?>">
<link rel="shortcut icon" href="favicon.ico?v=<?php echo $asset_ver; ?>">
<link rel="apple-touch-icon" href="assets/img/favicon.png?v=<?php echo $asset_ver; ?>">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=IBM+Plex+Sans:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Dynamic Cache-Busting CSS -->
<link rel="stylesheet" href="assets/css/style.css?v=<?php echo $asset_ver; ?>">
</head>
<body>

<div class="top-strip">
  <div class="container-xl d-flex justify-content-between">
    <span>For registered medical practitioners &amp; hospital procurement teams</span>
    <span class="d-none d-md-inline">Patna, Bihar &nbsp;•&nbsp; <a href="tel:+919939679089">+91 99396 79089</a></span>
  </div>
</div>

<header class="site-header">
  <nav class="navbar navbar-expand-lg py-3">
    <div class="container-xl">
      <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt="Medisky Lifesciences"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav ms-auto align-items-lg-center">
          <li class="nav-item"><a class="nav-link <?php echo ($current_page === 'home') ? 'active' : ''; ?>" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link <?php echo ($current_page === 'about') ? 'active' : ''; ?>" href="about.php">About Us</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php echo ($current_page === 'products') ? 'active' : ''; ?>" href="products.php" id="productDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Products
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="productDropdown">
              <li><a class="dropdown-item fw-bold text-primary" href="products.php">All Products Overview &#8594;</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="product-aminosky.php">Aminosky-10% Infusion</a></li>
              <li><a class="dropdown-item" href="product-glutasky.php">Glutasky Infusion 20%</a></li>
              <li><a class="dropdown-item" href="product-lglutasky-plus.php">L-Glutasky Plus Sachet</a></li>
              <li><a class="dropdown-item" href="product-zincflow.php">ZincFlow IP Injection</a></li>
              <li><a class="dropdown-item" href="product-ferric-cm.php">Ferric-CM Injection</a></li>
              <li><a class="dropdown-item" href="product-tetravan.php">Tetravan Colloid Infusion</a></li>
              <li><a class="dropdown-item" href="product-touch-med.php">Touch-Med Nitrile Gloves</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link <?php echo ($current_page === 'contact') ? 'active' : ''; ?>" href="contact.php">Contact</a></li>
          <li class="nav-item ms-lg-3"><a class="btn-brand" href="contact.php">Get In Touch</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
