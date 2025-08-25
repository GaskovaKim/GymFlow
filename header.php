<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GymFlow</title>
  <link rel="stylesheet" href="CSS/base.css">
  <link rel="stylesheet" href="CSS/header.css">
  <link rel="stylesheet" href="CSS/sidebar.css">
  <link rel="stylesheet" href="CSS/content.css">
  <link rel="stylesheet" href="CSS/modal.css">
  <link rel="stylesheet" href="CSS/footer.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Russo+One&display=swap" rel="stylesheet">
</head>
<body>
    
<header class="header">
  <div class="header-left"></div>
  <h1 class="logo">GymFlow</h1>
  <div class="top-buttons">
    <button class="top-btn" id="loginBtn" onclick="openModal()"><span class="material-symbols-outlined">login</span>PŘIHLÁŠENÍ</button>
    <button class="top-btn hidden" id="profileBtn" onclick="showPage('profilePage')"><span class="material-symbols-outlined">person</span>PROFIL</button>
    <button class="top-btn hidden" id="logoutBtn" onclick="logout()"><span class="material-symbols-outlined">logout</span>ODHLÁŠENÍ</button>
  </div>
</header>
<div class="main-layout">
