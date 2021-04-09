<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login dan Register OOP</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body> 
    <header>
        <h1>Belajar Auth di Sekolah Koding</h1>
        <nav>
        <?php if (Session::exists('username')) {?>
            <a href="logout.php">logout</a>
        <?php }else{ ?>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        <?php } ?>
            <a href="profile.php">Profile</a>
        </nav>
    </header>           