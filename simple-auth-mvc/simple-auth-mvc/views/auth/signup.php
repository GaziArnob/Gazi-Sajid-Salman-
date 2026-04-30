<?php require __DIR__ . '/../layout/header.php'; ?>

<h1>Sign Up</h1>
<p class="muted">Create your account</p>

<?php if (!empty($errors)): ?>
    <div class="alert error">
        <?php foreach ($errors as $error): ?>
            <p><?php echo htmlspecialchars($error); ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form method="POST" action="index.php?action=signup" class="auth-form">
    <label>Name</label>
    <input type="text" name="name" value="<?php echo htmlspecialchars($name ?? ''); ?>">

    <label>Email</label>
    <input type="email" name="email" value="<?php echo htmlspecialchars($email ?? ''); ?>">

    <label>Password</label>
    <input type="password" name="password" id="password">

    <label>Confirm Password</label>
    <input type="password" name="confirm_password">

    <button type="submit">Create Account</button>
</form>

<p class="link-text">Already have an account? <a href="index.php?action=signin">Sign in</a></p>

<?php require __DIR__ . '/../layout/footer.php'; ?>
