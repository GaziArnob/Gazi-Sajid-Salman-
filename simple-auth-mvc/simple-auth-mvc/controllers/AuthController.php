<?php

require_once __DIR__ . '/../models/User.php';

class AuthController
{
    private User $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function showSignup(): void
    {
        $errors = [];
        require __DIR__ . '/../views/auth/signup.php';
    }

    public function signup(): void
    {
        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
        $confirmPassword = $_POST['confirm_password'] ?? '';
        $errors = [];

        if ($name === '') {
            $errors[] = 'Name is required.';
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Valid email is required.';
        }

        if (strlen($password) < 6) {
            $errors[] = 'Password must be at least 6 characters.';
        }

        if ($password !== $confirmPassword) {
            $errors[] = 'Passwords do not match.';
        }

        if ($this->userModel->findByEmail($email)) {
            $errors[] = 'Email is already registered.';
        }

        if ($errors) {
            require __DIR__ . '/../views/auth/signup.php';
            return;
        }

        $this->userModel->create($name, $email, $password);
        $_SESSION['success'] = 'Account created. Please sign in.';
        header('Location: index.php?action=signin');
        exit;
    }

    public function showSignin(): void
    {
        $errors = [];
        require __DIR__ . '/../views/auth/signin.php';
    }

    public function signin(): void
    {
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
        $errors = [];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Valid email is required.';
        }

        if ($password === '') {
            $errors[] = 'Password is required.';
        }

        $user = $this->userModel->findByEmail($email);

        if (!$errors && (!$user || !password_verify($password, $user['password']))) {
            $errors[] = 'Wrong email or password.';
        }

        if ($errors) {
            require __DIR__ . '/../views/auth/signin.php';
            return;
        }

        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
        ];

        header('Location: index.php?action=dashboard');
        exit;
    }

    public function logout(): void
    {
        session_destroy();
        header('Location: index.php?action=signin');
        exit;
    }
}
