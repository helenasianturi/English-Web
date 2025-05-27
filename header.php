<?php
// Ambil halaman saat ini dari URL, default ke 'home'
$currentPage = $_GET['page'] ?? 'home';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Bahasa Inggris Sederhana (PHP)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>This is Nini!</h1>
        <nav>
            <a href="index.php?page=home" class="<?= ($currentPage === 'home' ? 'active' : '') ?>">Home</a>
            <a href="index.php?page=vocabulary" class="<?= ($currentPage === 'vocabulary' ? 'active' : '') ?>">Vocabulary</a>
            <a href="index.php?page=grammar" class="<?= ($currentPage === 'grammar' ? 'active' : '') ?>">Grammar</a>
            <a href="index.php?page=quiz" class="<?= ($currentPage === 'quiz' ? 'active' : '') ?>">Quiz</a>
        </nav>
    </header>

    <main>
        <div class="page-content">