<?php
// Mulai session di paling atas untuk manajemen state kuis
session_start();

// Sertakan file data
require_once 'data.php';

// Ambil halaman yang diminta dari URL, default ke 'home'
$page = $_GET['page'] ?? 'home';

// Sertakan header
require_once 'header.php';

// Tampilkan konten berdasarkan halaman yang diminta
// Ini adalah routing sederhana
switch ($page) {
    case 'vocabulary':
        require_once 'vocabulary.php';
        break;
    case 'grammar':
        require_once 'grammar.php';
        break;
    case 'quiz':
        require_once 'kuis.php';
        break;
    case 'home':
    default: // Jika halaman tidak dikenali, tampilkan home
        require_once 'home.php';
        break;
}


?>