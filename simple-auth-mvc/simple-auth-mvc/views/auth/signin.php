<?php require __DIR__ . '/../layout/header.php'; ?>

<h1>Sign In</h1>
<p class="muted">Welcome back</p>

<?php if (!empty($_SESSION['success'])): ?>
    <div class="alert success">
        <p><?php echo htmlspecialchars($_SESSION['success']); ?></p>
    </div>
    <?php unset($_SESSION['success']); ?>
<?php endif; ?>

<?php if (!empty($errors)): ?>
    <div class="alert error">
        <?php foreach ($errors as $error): ?>
            <p><?php echo htmlspecialchars($error); ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form method="POST" action="index.php?action=signin" class="auth-form">
    <label>Email</label>
    <input type="email" name="email" value="<?php echo htmlspecialchars($email ?? ''); ?>">

    <label>Password</label>
    <input type="password" name="password">

    <button type="submit">Sign In</button>
</form>

<p class="link-text">No account? <a href="index.php?action=signup">Sign up</a></p>

<?php require __DIR__ . '/../layout/footer.php'; ?>
