<?php
// Start session only once
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- External CSS -->
    <link rel="stylesheet" href="styles/style.css">

    <title>The Grand Coastline</title>
</head>

<body>

    <!-- Global Header -->
    <header class="site-header">

    <div class="floating-nav">

        <div class="nav-logo">
            <a href="index.php">The Grand Coastline</a>
        </div>

        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>

        <nav class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="rooms.php">Rooms</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="booking.php">Book Now</a></li>

                <?php if (isset($_SESSION['admin_logged_in'])): ?>
                    <li><a href="admin/dashboard.php">Admin</a></li>
                    <li><a href="admin/logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="admin/login.php">Admin Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>

    </div>
</header>


    <!-- Page Content Wrapper -->
    <main class="content-container">
