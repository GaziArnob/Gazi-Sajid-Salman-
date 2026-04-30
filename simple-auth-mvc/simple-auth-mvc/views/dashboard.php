<?php require __DIR__ . '/layout/header.php'; ?>

<h1>Dashboard</h1>
<p class="muted">This page is protected.</p>

<div class="profile">
    <p><strong>Name:</strong> <?php echo htmlspecialchars($_SESSION['user']['name']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['user']['email']); ?></p>
</div>

<a class="logout" href="index.php?action=logout">Logout</a>

<?php require __DIR__ . '/layout/footer.php'; ?>
