<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        require __DIR__ . '\app\views\index.php';
        break;
    case '/login':
        require __DIR__ . '\app\views\pages\login.php';
        break;
    case '/datlich':
        require __DIR__ . '\app\views\pages\datLich.php';
        break;
    case '/profile':
        require __DIR__ . '\app\views\pages\profile.php';
        break;
    case '/register':
        require __DIR__ . '\app\views\pages\register.php';
        break;
    case '/detail':
        require __DIR__ . '\app\views\pages\chiTietDichVu.php';
        break;
    case '/feedback':
        require __DIR__ . '\app\views\pages\feedback.php';
        break;
    case '/admin':
        require __DIR__ . '\app\views\admin\index.php';
        break;
        
    default:
        http_response_code(404);
        require __DIR__ . '\app\views\pages\404.php';
        break;
}
