<?php
include "header.php";
include "sidebar.php";
?>

<div class="content">
  <?php
$page = $_GET['page'] ?? 'home';

$allowed_pages = ['home', 'contact', 'middle', 'full', 'profile', 'lower', 'services', 'upper', 'why', '404']; 

if (!in_array($page, $allowed_pages)) {
    $page = '404';
}

if ($page === '404') {
    $extraCSS = '<link rel="stylesheet" href="CSS/404.css">';
}

$file = "pages/" . $page . ".php";
include $file;
?>
</div>

<?php include "footer.php"; ?>

