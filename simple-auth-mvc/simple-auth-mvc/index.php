<?php

session_start();

require_once __DIR__ . '/controllers/AuthController.php';
require_once __DIR__ . '/controllers/DashboardController.php';

$action = $_GET['action'] ?? 'signin';
$authController = new AuthController();
$dashboardController = new DashboardController();

switch ($action) {
    case 'signup':
        $_SERVER['REQUEST_METHOD'] === 'POST'
            ? $authController->signup()
            : $authController->showSignup();
        break;

    case 'signin':
        $_SERVER['REQUEST_METHOD'] === 'POST'
            ? $authController->signin()
            : $authController->showSignin();
        break;

    case 'dashboard':
        $dashboardController->index();
        break;

    case 'logout':
        $authController->logout();
        break;

    default:
        header('Location: index.php?action=signin');
        exit;
}
