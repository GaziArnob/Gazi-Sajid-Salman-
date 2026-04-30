<?php

class DashboardController
{
    public function index(): void
    {
        if (empty($_SESSION['user'])) {
            header('Location: index.php?action=signin');
            exit;
        }

        require __DIR__ . '/../views/dashboard.php';
    }
}
