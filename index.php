<?php
include "header.php";
include "sidebar.php";
?>

<div class="content">
  <?php
$page = $_GET['page'] ?? 'home';

// Povolené stránky
$allowed_pages = ['home', 'contact', 'middle', 'full', 'profile', 'lower', 'services', 'upper', 'why', '404']; 

if (!in_array($page, $allowed_pages)) {
    $page = '404';
}

// Pokud jde o 404, připoj CSS
if ($page === '404') {
    $extraCSS = '<link rel="stylesheet" href="CSS/404.css">';
}

$file = "pages/" . $page . ".php";

// Jen zahrne soubor, fallback není
include $file;
?>
</div>

<?php include "footer.php"; ?>
